<template v-if="checkout.step < 4">
    <template v-if="checkout.hide_billing">
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping billing>
            <x-slot:button v-if="checkout.step == 3" v-on:click="goToStep(2)">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping>
            <x-slot:button v-if="checkout.step == 3" v-on:click="goToStep(2)">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="checkout.billing_address" billing>
            <x-slot:button v-if="checkout.step == 3" v-on:click="goToStep(2)">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
    </template>
</template>