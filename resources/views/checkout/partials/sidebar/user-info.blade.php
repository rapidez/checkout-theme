<template v-if="!cart.value.billing_address || cart.value.billing_address?.same_as_shipping">
    <x-rapidez-ct::card v-if="cart.value.shipping_addresses[0]">
        <x-rapidez-ct::address v-bind:address="cart.value.shipping_addresses[0]" shipping billing>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
</template>
<template v-else>
    <x-rapidez-ct::card v-if="cart.value.shipping_addresses[0]">
        <x-rapidez-ct::address v-bind:address="cart.value.shipping_addresses[0]" shipping>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
    <x-rapidez-ct::card>
        <x-rapidez-ct::address v-bind:address="cart.value.billing_address" billing>
            <x-rapidez-ct::button.link :href="route('checkout', ['step' => 'credentials'])">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::address>
    </x-rapidez-ct::card>
</template>
