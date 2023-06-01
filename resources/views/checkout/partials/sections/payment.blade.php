<form
    id="payment"
    v-on:submit.prevent="save(['payment_method'], 4)"
>
    <div
        class="my-2"
        v-for="(method, index) in checkout.payment_methods"
    >
        <x-rapidez-ct::input.radio
            v-bind:value="method.code"
            v-bind:dusk="'method-'+index"
            v-model="checkout.payment_method"
        >
            <div>@{{ method.title }}</div>
            <img
                class="max-h-10"
                alt=""
                v-bind:src="`/payment-icons/${method.code}.svg`"
                onerror="this.onerror=null;this.src='/payment-icons/creditcard.svg'"
            />
        </x-rapidez-ct::input.radio>
    </div>
    <graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }">
        <div
            class="mt-5 flex flex-col gap-y-4"
            v-if="data"
            slot-scope="{ data }"
        >
            <div v-for="agreement in data.checkoutAgreements">

                <label
                    class="cursor-pointer text-sm text-primary underline"
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
                        <label
                            class="cursor-pointer text-sm text-primary underline"
                            v-bind:for="agreement.checkbox_text"
                        >
                            @{{ agreement.checkbox_text }}
                        </label>
                    </x-rapidez-ct::input.checkbox>
                </template>
                <x-rapidez-ct::slideover id="agreement.checkbox_text">
                    <x-slot name="title">
                        @{{ agreement.name }}
                    </x-slot>
                    <div
                        v-if="agreement.is_html"
                        v-html="agreement.content"
                    ></div>
                    <div
                        class="whitespace-pre-wrap"
                        v-else
                        v-text="agreement.content"
                    ></div>
                </x-rapidez-ct::slideover>
            </div>
        </div>
    </graphql>
</form>
