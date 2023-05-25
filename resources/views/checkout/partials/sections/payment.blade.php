<form id="payment" v-on:submit.prevent="save(['payment_method'], 4)">
    <div class="my-2" v-for="(method, index) in checkout.payment_methods">
        <x-rapidez::radio
            v-bind:value="method.code"
            v-bind:dusk="'method-'+index"
            v-model="checkout.payment_method"
        >
            @{{ method.title }}
        </x-rapidez::radio>
    </div>

    <graphql query="{ checkoutAgreements { agreement_id name checkbox_text content is_html mode } }">
        <div v-if="data" slot-scope="{ data }" class="mt-5">
            <div v-for="agreement in data.checkoutAgreements">
                <x-rapidez::slideover>
                    <x-slot name="button">
                        <a class="text-gray-700" href="#" v-on:click.prevent="toggle" v-if="agreement.mode == 'AUTO'">
                            @{{ agreement.checkbox_text }}
                        </a>
                        <div v-else>
                            <x-rapidez::checkbox
                                name="agreement_ids[]"
                                v-bind:value="agreement.agreement_id"
                                v-model="checkout.agreement_ids"
                                dusk="agreements"
                                required
                            >
                                <a href="#" v-on:click.prevent="toggle">@{{ agreement.checkbox_text }}</a>
                            </x-rapidez::checkbox>
                        </div>
                    </x-slot>

                    <x-slot name="title">
                        @{{ agreement.name }}
                    </x-slot>

                    <div v-if="agreement.is_html" v-html="agreement.content"></div>
                    <div v-else v-text="agreement.content" class="whitespace-pre-line"></div>
                </x-rapidez::slideover>
            </div>
        </div>
    </graphql>
</form>