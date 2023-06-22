<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('rapidez-ct::frontend.cart.order_overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::seperated-listing>
        <li>
            <span>@lang('rapidez-ct::frontend.subtotal')</span>
            <span>@{{ cart.subtotal | price }}</span>
        </li>
        <li v-if="cart.tax > 0">
            <span>@lang('rapidez-ct::frontend.tax')</span>
            <span>@{{ cart.tax | price }}</span>
        </li>
        <li>
            <span>@lang('rapidez-ct::frontend.shipping')</span>
            <span v-if="cart.shipping_amount > 0">@{{ cart.shipping_amount | price }}</span>
            <span
                class="font-medium text-ct-enhanced"
                v-else
            >
                @lang('rapidez-ct::frontend.free')
            </span>
            <small class="mt-1 w-full">@{{ cart.shipping_description }}</small>
        </li>
        <li v-if="cart.discount_name">
            <span>@lang('rapidez-ct::frontend.discount') (@{{ cart.discount_name }})</span>
            <span>@{{ cart.discount_amount | price }}</span>
        </li>
        <li class="font-medium">
            <span>@lang('rapidez-ct::frontend.total')</span>
            <span>@{{ cart.total | price }}</span>
        </li>
    </x-rapidez-ct::seperated-listing>

    <x-rapidez-ct::button.enhanced
        class="flex w-full items-center justify-center gap-1 mt-6"
        href="/checkout"
        dusk="checkout"
    >
        @lang('rapidez-ct::frontend.cart.checkout')
        <x-heroicon-o-arrow-right class="h-4" />
    </x-rapidez-ct::button.enhanced>

    <div class="mt-4 flex items-center justify-center gap-1 text-center text-sm">
        <x-heroicon-o-check class="h-5 text-ct-accent" />
        @lang('rapidez-ct::frontend.cart.cta')
    </div>
</x-rapidez-ct::card>
