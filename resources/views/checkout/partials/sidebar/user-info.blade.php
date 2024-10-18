<template v-if="cart.shipping_addresses[0]?.uid == cart.billing_address?.uid || cart.shipping_addresses[0]?.customer_address_id == cart.billing_address?.customer_address_id">
    <x-rapidez-ct::card v-if="cart.shipping_addresses[0]">
        <x-rapidez-ct::address v-bind:address="cart.shipping_addresses[0]" shipping billing>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
</template>
<template v-else>
    <x-rapidez-ct::card v-if="cart.shipping_addresses[0]">
        <x-rapidez-ct::address v-bind:address="cart.shipping_addresses[0]" shipping>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
    <x-rapidez-ct::card>
        <x-rapidez-ct::address v-bind:address="cart.billing_address" billing>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
</template>
