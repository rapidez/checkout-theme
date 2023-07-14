<x-rapidez-ct::card.inactive>
    <form id="payment" class="flex flex-col gap-2" v-on:submit.prevent="save(['payment_method'], 4)">
        <div v-for="(method, index) in checkout.payment_methods">
            <x-rapidez-ct::input.radio
                v-bind:value="method.code"
                v-bind:dusk="'method-'+index"
                v-model="checkout.payment_method"
                name="payment_method"
                required
            >
                <div>@{{ method.title }}</div>
                <img
                    class="absolute right-7 top-1/2 max-h-10 -translate-y-1/2"
                    v-bind:alt="method.code"
                    v-bind:src="`/vendor/payment-icons/${method.code}.svg`"
                    onerror="this.onerror=null; this.src='/vendor/payment-icons/creditcard.svg'"
                />
            </x-rapidez-ct::input.radio>
        </div>
        <graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }">
            <div v-if="data" class="mt-5 flex flex-col gap-y-4" slot-scope="{ data }">
                <div v-for="agreement in data.checkoutAgreements">
                    <label
                        class="cursor-pointer text-sm text-ct-primary underline"
                        v-bind:for="agreement.checkbox_text"
                        v-if="agreement.mode == 'AUTO'"
                    >
                        @{{ agreement.checkbox_text }}
                    </label>
                    <template v-else>
                        <x-rapidez-ct::input.checkbox
                            name="agreement_ids[]"
                            v-bind:value="agreement.agreement_id"
                            v-model="checkout.agreement_ids"
                            dusk="agreements"
                            required
                        >
                            <label class="cursor-pointer text-sm text-ct-primary underline" v-bind:for="agreement.checkbox_text">
                                @{{ agreement.checkbox_text }}
                            </label>
                        </x-rapidez-ct::input.checkbox>
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
