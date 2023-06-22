<input type="checkbox" id="popup" class="peer hidden"/>
<div class="fixed inset-0 opacity-0 transition z-50 flex justify-center items-center pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto">
    <x-rapidez-ct::sections class="relative z-10">
        <x-rapidez-ct::card.inactive>
            <x-rapidez-ct::title class="mb-5">@lang('My addresses')</x-rapidez-ct::title>
            <label class="absolute cursor-pointer top-7 right-7 w-5 h-5" for="popup">
                <x-heroicon-o-x/>
            </label>

            <div class="grid sm:grid-cols-2 gap-5">
                <template v-for="userAddress in data.customer.addresses">
                    <graphql-mutation
                        query="mutation address($id: Int!, $default_billing: Boolean, $default_shipping: Boolean){ updateCustomerAddress ( id: $id, input: {default_billing: $default_billing, default_shipping: $default_shipping} ) { id } }"
                        :variables="userAddress"
                        :callback="runQuery"
                        v-slot="{ mutate }"
                    >
                        <x-rapidez-ct::card.address
                            v-bind:address="userAddress"
                            v-bind:billing="userAddress.default_billing"
                            v-bind:shipping="userAddress.default_shipping"
                            check="userAddress.default_billing || userAddress.default_shipping"
                            class="w-full sm:min-w-[350px]"
                        >
                            <x-rapidez-ct::button.link v-bind:href="`/account/address/${userAddress.id}`">
                                @lang('Edit')
                            </x-rapidez-ct::button.link>
                            <x-rapidez-ct::button.link
                                v-if="!userAddress.default_shipping"
                                v-on:click="userAddress.default_shipping=true;mutate()"
                            >
                                @lang('Select as shipping')
                            </x-rapidez-ct::button.link>
                            <x-rapidez-ct::button.link
                                v-else
                                v-on:click="userAddress.default_shipping=false;mutate()"
                            >
                                @lang('Deselect as shipping')
                            </x-rapidez-ct::button.link>

                            <x-rapidez-ct::button.link
                                v-if="!userAddress.default_billing"
                                v-on:click="userAddress.default_billing=true;mutate()"
                            >
                                @lang('Select as billing')
                            </x-rapidez-ct::button.link>
                            <x-rapidez-ct::button.link
                                v-else
                                v-on:click="userAddress.default_billing=false;mutate()"
                            >
                                @lang('Deselect as billing')
                            </x-rapidez-ct::button.link>
                        </x-rapidez-ct::card.address>
                    </graphql-mutation>
                </template>
            </div>
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <label class="absolute cursor-pointer inset-0 bg-ct-primary/60" for="popup"></label>
</div>