<div class="grid gap-5 sm:grid-cols-2">
    <template v-if="billingAndShippingAreTheSame">
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping billing check>
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
        <button v-on:click.prevent="toggleEdit" class="flex flex-col items-center justify-center gap-y-2 font-medium bg-ct-disabled rounded max-sm:hidden">
            <span>+</span>
            <span>@lang('Add new address')</span>
        </button>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping check class="h-full">
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
            <x-slot:empty>
                <label for="popup" class="flex flex-col items-center justify-center gap-y-2 font-medium rounded max-sm:hidden h-full cursor-pointer">
                    <span>+</span>
                    <span>@lang('Select an address')</span>
                </label>
                <input type="checkbox" oninvalid="this.setCustomValidity('{{ __('Please select an address') }}')" required class="absolute w-full h-full inset-0 opacity-0 pointer-events-none">
            </x-slot>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="checkout.billing_address" billing check class="h-full">
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
            <x-slot:empty>
                <label for="popup" class="flex flex-col items-center justify-center gap-y-2 font-medium rounded max-sm:hidden h-full cursor-pointer">
                    <span>+</span>
                    <span>@lang('Select an address')</span>
                </label>
                <input type="checkbox" oninvalid="this.setCustomValidity('{{ __('Please select an address') }}')" required class="absolute w-full h-full inset-0 opacity-0 pointer-events-none">
            </x-slot>
        </x-rapidez-ct::card.address>
    </template>
</div>

@include('rapidez-ct::checkout.partials.address-cards-popup')
