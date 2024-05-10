<x-rapidez-ct::card.inactive>
    <form id="payment" class="flex flex-col gap-2" v-on:submit.prevent="save(['payment_method'], 4)">
        <div v-for="(method, index) in checkout.payment_methods">
            @include('rapidez-ct::checkout.partials.sections.payment.payment-methods')
        </div>
        <graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }">
            <div v-if="data?.checkoutAgreements?.length" class="mt-5 flex flex-col gap-y-4" slot-scope="{ data }">
                <div v-for="agreement in data.checkoutAgreements">
                    <label
                        class="text-ct-neutral cursor-pointer text-sm underline"
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
    </form>
</x-rapidez-ct::card.inactive>
