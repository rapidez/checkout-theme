<checkout-address v-slot="{ useCards, editing, toggleEdit }">
    <template v-if="useCards && !editing">
        <div>
            @include('rapidez-ct::checkout.partials.address-cards')
            @include('rapidez-ct::checkout.partials.buttons.address')
        </div>
    </template>
    <template v-else>
        <div>
            <graphql-mutation
                :query="config.queries.setNewShippingAddressesOnCart"
                :variables="{
                    cart_id: mask,
                    ...window.address_defaults,
                    ...cart.shipping_addresses[0],
                    country_code: cart.shipping_addresses[0]?.country.code || window.address_defaults.country_code
                }"
                group="shipping"
                :before-request="(query, variables, options) => [variables.customer_address_id ? config.queries.setExistingShippingAddressesOnCart : query, variables, options]"
                :callback="updateCart"
                :error-callback="checkResponseForExpiredCart"
                :watch="false"
                mutate-event="setShippingAddressesOnCart"
                v-slot="{ mutate, variables }"
                v-if="!cart.is_virtual"
            >
                <fieldset partial-submit="mutate" v-on:change="function (e) {e.target.closest('fieldset').querySelector(':invalid') === null && mutate().then(() => (cart?.billing_address?.same_as_shipping ?? true) && window.app.$emit('setBillingAddressOnCart'))}">
                    @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'shipping'])
                </fieldset>
            </graphql-mutation>
            <graphql-mutation
                :query="config.queries.setNewBillingAddressOnCart"
                :variables="JSON.parse(JSON.stringify({
                    cart_id: mask,
                    ...window.address_defaults,
                    ...cart.billing_address,
                    same_as_shipping: !cart.is_virtual && (cart?.billing_address?.same_as_shipping ?? true),
                    country_code: cart.billing_address?.country.code || window.address_defaults.country_code
                }))"
                :before-request="(query, variables, options) => [variables.customer_address_id ? config.queries.setExistingBillingAddressOnCart : query, variables, options]"
                :callback="updateCart"
                :error-callback="checkResponseForExpiredCart"
                :watch="false"
                group="billing"
                mutate-event="setBillingAddressOnCart"
                v-slot="{ mutate, variables }"
            >
                <fieldset partial-submit="mutate" v-on:change="function (e) {e.target.closest('fieldset').querySelector(':invalid') === null && mutate().then(() => (cart?.billing_address?.same_as_shipping ?? true) && window.app.$emit('setBillingAddressOnCart'))}">
                    @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'billing'])
                </fieldset>
            </graphql-mutation>
        </div>
    </template>
</checkout-address>
