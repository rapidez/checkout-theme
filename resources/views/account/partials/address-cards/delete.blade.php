<graphql-mutation
    query="mutation deleteCustomerAddress($id: Int!){ deleteCustomerAddress ( id: $id ) }"
    :variables="{ id: variables.id }"
    :callback="refreshUserInfoCallback"
    v-slot="{ mutate }"
>
    <x-rapidez-ct::button.link v-if="!variables.default_billing && !variables.default_shipping" v-on:click="data.customer.addresses.splice(addressIndex,1);mutate()">
        @lang('Delete address')
    </x-rapidez-ct::button.link>
</graphql-mutation>
