<x-rapidez-ct::popup title="My addresses">
    <div class="grid gap-5 lg:grid-cols-2">
        <template v-for="userAddress, addressIndex in data.customer.addresses">
            <graphql-mutation
                query="mutation address($id: Int!, $default_billing: Boolean, $default_shipping: Boolean){ updateCustomerAddress ( id: $id, input: {default_billing: $default_billing, default_shipping: $default_shipping} ) { id } }"
                :variables="userAddress"
                :callback="runQuery"
                v-slot="{ mutate, mutating, variables }"
            >
                <x-rapidez-ct::card.address
                    v-bind:address="variables"
                    v-bind:billing="variables.default_billing"
                    v-bind:shipping="variables.default_shipping"
                    v-bind:check="variables.default_billing || variables.default_shipping"
                    class="w-full sm:min-w-[350px]"
                >
                    @include('rapidez-ct::account.partials.address-cards.buttons')
                </x-rapidez-ct::card.address>
            </graphql-mutation>
        </template>
    </div>
</x-rapidez-ct::popup>
