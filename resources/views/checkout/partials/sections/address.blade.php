<checkout-address v-slot="{ useCards, editing, toggleEdit, isType, select }">
    <x-rapidez-ct::card.inactive v-if="useCards && !editing">
        @include('rapidez-ct::checkout.partials.address-cards')
        <div class="mt-5">
            <x-rapidez-ct::button.accent v-on:click.prevent="toggleEdit">
                @lang('Use a new address')
            </x-rapidez-ct::button.accent>
            <x-rapidez-ct::button.outline tag="label" for="popup" class="cursor-pointer" v-if="$root.user.addresses.length">
                @lang('My addresses')
            </x-rapidez-ct::button.outline>
        </div>
    </x-rapidez-ct::card.inactive>

    <x-rapidez-ct::card.inactive v-else>
        @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'shipping'])

        <div class="mt-9 pt-7 border-t-2 border-white" v-if="!checkout.hide_billing">
            @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'billing'])
        </div>
    </x-rapidez-ct::card.inactive>
</checkout-address>
