<x-rapidez-ct::card.inactive>
    <div
        v-if="data?.customer?.addresses"
        v-bind:set-billing="data.customer.billing_address = data.customer.addresses.find(e => e.default_billing)"
        v-bind:set-shipping="data.customer.shipping_address = data.customer.addresses.find(e => e.default_shipping)"
    >
        @include('rapidez-ct::account.partials.address-cards')
        @include('rapidez-ct::account.partials.address-cards-popup')
    </div>
</x-rapidez-ct::card.inactive>