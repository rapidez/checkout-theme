<checkout-address v-slot="{ useCards, editing, toggleEdit, isType, select }">
    <template v-if="useCards && !editing">
        @include('rapidez-ct::checkout.partials.address-cards')
        @include('rapidez-ct::checkout.partials.buttons.address')
    </template>
    <template v-else>
        @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'shipping'])

        <div class="mt-9 pt-7 border-t-2 border-white" v-if="!checkout.hide_billing">
            @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'billing'])
        </div>
    </template>
</checkout-address>
