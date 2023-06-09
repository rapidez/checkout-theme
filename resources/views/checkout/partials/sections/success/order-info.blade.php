<x-rapidez-ct::card.inactive>
    <div class="flex">
        <template v-if="checkout.hide_billing || checkout.shipping_address?.customer_address_id == checkout.billing_address?.customer_address_id">
            <x-rapidez-ct::card.address
                v-bind:address="checkout.shipping_address"
                shipping
                billing
                check
            />
        </template>
        <template v-else>
            <x-rapidez-ct::card.address
                v-bind:address="checkout.shipping_address"
                shipping
                check
            />
            <x-rapidez-ct::card.address
                v-bind:address="checkout.billing_address"
                billing
                check
            />
        </template>
    </div>
</x-rapidez-ct::card.inactive>
