<graphql-mutation
    :query="config.queries.setPaymentMethodOnCart"
    :variables="{
        cart_id: mask,
        code: cart.selected_payment_method.code,
    }"
    group="payment"
    :before-request="handleBeforePaymentMethodHandlers"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    mutate-event="setPaymentMethodOnCart"
    v-slot="{ mutate, variables }"
>
    <div partial-submit="mutate">
        <div v-for="(method, index) in cart.available_payment_methods">
            @include('rapidez-ct::checkout.partials.sections.payment.payment-methods')
        </div>
    </div>
</graphql-mutation>
<graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }">
    <div v-if="data?.checkoutAgreements?.length" class="mt-5 flex flex-col gap-y-4" slot-scope="{ data }">
        <div v-for="agreement in data.checkoutAgreements">
            <label
                class="text-ct-primary cursor-pointer text-sm underline"
                v-bind:for="agreement.checkbox_text"
                v-if="agreement.mode == 'AUTO'"
            >
                @{{ agreement.checkbox_text }}
            </label>
            <template v-else>
                @include('rapidez-ct::checkout.partials.sections.payment.agreement-checkbox')
            </template>
            <x-rapidez-ct::slideover id="agreement.checkbox_text">
                <x-slot name="title">
                    @{{ agreement.name }}
                </x-slot>
                <div v-if="agreement.is_html" v-html="agreement.content"></div>
                <div v-else class="whitespace-pre-wrap" v-text="agreement.content"></div>
            </x-rapidez-ct::slideover>
        </div>
    </div>
</graphql>