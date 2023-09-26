<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing>
        <li>
            <span>@lang('Subtotal')</span>
            <span>@{{ cart.subtotal | price }}</span>
        </li>
        <li v-if="cart.shipping_method">
            <span>@lang('Shipping')</span>
            <span v-if="cart.shipping_amount_excl_tax > 0">
                @{{ cart.shipping_amount_excl_tax | price }}
            </span>
            <span v-else class="font-medium text-ct-enhanced">
                @lang('Free')
            </span>
        </li>
        <li v-if="cart.tax > 0">
            <span>@lang('Tax')</span>
            <span>@{{ cart.tax | price }}</span>
        </li>
        <li v-if="cart.discount_name">
            <span>@lang('Discount') (@{{ cart.discount_name }})</span>
            <span>@{{ cart.discount_amount | price }}</span>
        </li>
        <li class="font-medium">
            <span>@lang('Total')</span>
            <span>@{{ cart.total | price }}</span>
        </li>
    </x-rapidez-ct::separated-listing>

    <x-rapidez-ct::button.enhanced :href="route('checkout')" class="flex w-full items-center justify-center gap-1 mt-6" dusk="checkout">
        @lang('To checkout')
        <x-heroicon-o-arrow-right class="h-4" />
    </x-rapidez-ct::button.enhanced>

    <div class="mt-4 flex items-center justify-center gap-1 text-center text-sm">
        <x-heroicon-o-check class="h-5 text-ct-accent" />
        @lang('Ordered within 2 minutes')
    </div>
</x-rapidez-ct::card>
