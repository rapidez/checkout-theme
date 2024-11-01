<graphql-mutation
    :query="config.queries.setExistingShippingAddressesOnCart"
    :variables="{
        cart_id: mask,
        customer_address_id: cart.shipping_addresses[0]?.customer_address_id,
    }"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    mutate-event="setShippingAddressesOnCart"
    v-slot="setShippingAddress"
>
    <graphql-mutation
        :query="config.queries.setExistingBillingAddressOnCart"
        :variables="{
            cart_id: mask,
            customer_address_id: cart.billing_address?.customer_address_id,
        }"
        :callback="updateCart"
        :error-callback="checkResponseForExpiredCart"
        mutate-event="setBillingAddressOnCart"
        v-slot="setBillingAddress"
    >
        <div class="grid gap-5 lg:grid-cols-2">
            <template v-for="userAddress in $root.user.addresses">
                <x-rapidez-ct::card.address
                    v-bind:key="userAddress.id"
                    v-bind:address="userAddress"
                    v-bind:billing="setBillingAddress.variables.customer_address_id === userAddress.id"
                    v-bind:shipping="setShippingAddress.variables.customer_address_id === userAddress.id"
                    v-bind:check="setBillingAddress.variables.customer_address_id === userAddress.id || setShippingAddress.variables.customer_address_id === userAddress.id"
                    class="w-full sm:min-w-[350px]"
                >
                        <x-rapidez-ct::button.link
                            v-if="!cart.is_virtual && setShippingAddress.variables.customer_address_id !== userAddress.id"
                            v-on:click.prevent="() => window.app.$set(setShippingAddress.variables, 'customer_address_id', userAddress.id) && setShippingAddress.mutate()"
                            v-bind:class="{'blur pointer-events-none': setShippingAddress.mutating}"
                        >
                            @lang('Select as shipping')
                        </x-rapidez-ct::button.link>

                        <x-rapidez-ct::button.link
                            v-if="setBillingAddress.variables.customer_address_id !== userAddress.id"
                            v-on:click.prevent="() => window.app.$set(setBillingAddress.variables, 'customer_address_id', userAddress.id) && setBillingAddress.mutate()"
                            v-bind:class="{'blur pointer-events-none': setBillingAddress.mutating}"
                        >
                            @lang('Select as billing')
                        </x-rapidez-ct::button.link>
                </x-rapidez-ct::card.address>
            </template>
        </div>
    </graphql-mutation>
</graphql-mutation>