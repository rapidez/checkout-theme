<graphql-mutation
    :query="config.queries.setPaymentMethodOnCart"
    :variables="{
        cart_id: mask.value,
        code: cart.value.selected_payment_method.code,
    }"
    group="payment"
    :before-request="handleBeforePaymentMethodHandlers"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    mutate-event="setPaymentMethodOnCart"
    v-slot="{ mutate, variables }"
>
    <div partial-submit v-on:partial-submit="async () => await mutate()" class="flex flex-col gap-3">
        <div v-for="(method, index) in cart.value.available_payment_methods">
            @include('rapidez-ct::checkout.partials.sections.payment.payment-methods')
        </div>
    </div>
</graphql-mutation>
<graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }" v-slot="{ data }">
    <div v-if="data?.checkoutAgreements?.length" class="mt-5 flex flex-col gap-y-4">
        <div v-for="agreement in data.checkoutAgreements" class="flex gap-2">
            <template v-if="agreement.mode != 'AUTO'">
                <x-rapidez::input.checkbox.base
                    name="agreement_ids[]"
                    v-bind:value="agreement.agreement_id"
                    dusk="agreements"
                    required
                />
            </template>
            <x-rapidez::slideover.global title="agreement" v-bind:id="agreement.checkbox_text" v-bind:title="agreement.name">
                <x-slot:label>
                    <span class="text-sm underline">
                        @{{ agreement.checkbox_text }}
                    </span>
                </x-slot:label>
                <div v-if="agreement.is_html" v-html="agreement.content"></div>
                <div v-else="" class="whitespace-pre-wrap" v-text="agreement.content"></div>
            </x-rapidez::slideover.global>
        </div>
    </div>
</graphql>
