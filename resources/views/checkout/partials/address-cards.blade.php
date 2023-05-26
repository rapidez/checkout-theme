<div class="grid gap-5 grid-cols-2">
    <template v-if="hideBilling">
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping billing check>
            <x-slot:button v-on:click.prevent="toggle">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping check>
            <x-slot:button v-on:click.prevent="toggle">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="checkout.billing_address" billing check>
            <x-slot:button v-on:click.prevent="toggle">
                @lang('Edit')
            </x-slot:button>
        </x-rapidez-ct::card.address>
    </template>
</div>

@include('rapidez-ct::checkout.partials.address-cards-popup')