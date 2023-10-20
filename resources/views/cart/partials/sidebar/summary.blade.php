<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing tag="dl">
        <div>
            <dt>@lang('Subtotal')</dt>
            <dd>@{{ cart.subtotal | price }}</dd>
        </div>
        <div v-if="cart.shipping_method">
            <dt>@lang('Shipping')</dt>
            <dd v-if="cart.shipping_amount_excl_tax > 0">
                @{{ cart.shipping_amount_excl_tax | price }}
            </dd>
            <dd v-else class="font-medium text-ct-enhanced">
                @lang('Free')
            </dd>
        </div>
        <div v-if="cart.tax > 0">
            <dt>@lang('Tax')</dt>
            <dd>@{{ cart.tax | price }}</dd>
        </div>
        <div v-if="cart.discount_name">
            <dt>@lang('Discount') (@{{ cart.discount_name }})</dt>
            <dd>@{{ cart.discount_amount | price }}</dd>
        </div>
        <div class="font-medium">
            <dt>@lang('Total')</dt>
            <dd>@{{ cart.total | price }}</dd>
        </div>
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
