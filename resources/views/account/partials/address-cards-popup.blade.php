<x-rapidez-ct::popup title="My addresses">
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
                    @include('rapidez-ct::account.partials.address-cards.buttons')
                </x-rapidez-ct::card.address>
                </x-rapidez-ct::card.address>
            </graphql-mutation>
        </template>
    </div>
</x-rapidez-ct::popup>
