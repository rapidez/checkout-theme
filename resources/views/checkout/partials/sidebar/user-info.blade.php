<template v-if="checkout.step < 4">
    <template v-if="checkout.hide_billing || checkout.shipping_address?.customer_address_id == checkout.billing_address?.customer_address_id">
        <x-rapidez-ct::card>
            <x-rapidez-ct::address v-bind:address="checkout.shipping_address" shipping billing>
                <x-rapidez-ct::button.link v-if="checkout.step == 3" v-on:click="goToStep(2)">
                    @lang('Edit')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::address>
        </x-rapidez-ct::card>
    </template>
    <template v-else>
        <x-rapidez-ct::card>
            <x-rapidez-ct::address v-bind:address="checkout.shipping_address" shipping>
                <x-rapidez-ct::button.link v-if="checkout.step == 3" v-on:click="goToStep(2)">
                    @lang('Edit')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::address>
        </x-rapidez-ct::card>
        <x-rapidez-ct::card>
            <x-rapidez-ct::address v-bind:address="checkout.billing_address" billing>
                <x-rapidez-ct::button.link v-if="checkout.step == 3" v-on:click="goToStep(2)">
                    @lang('Edit')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::address>
        </x-rapidez-ct::card>
    </template>
</template>
