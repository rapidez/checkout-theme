<checkout-address v-slot="{ useCards, editing, toggleEdit }">
    <template v-if="useCards && !editing">
        <div>
            @include('rapidez-ct::checkout.partials.address-cards')
            @include('rapidez-ct::checkout.partials.buttons.address')
        </div>
    </template>
    <template v-else>
        <div class="flex flex-col gap-6">
            @include('rapidez::checkout.steps.shipping_address')
            @include('rapidez::checkout.steps.billing_address')
        </div>
    </template>
</checkout-address>
