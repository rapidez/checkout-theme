<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::summary>
        <li>
            <span>@lang('Subtotal')</span>
            <span>@{{ cart.subtotal | price }}</span>
        </li>
        <li v-if="cart.tax > 0">
            <span>@lang('Tax')</span>
            <span>@{{ cart.tax | price }}</span>
        </li>
        <li v-if="cart.shipping_amount > 0">
            <span>@lang('Shipping')</span>
            <span>@{{ cart.shipping_amount | price }}</span>
            <small class="w-full mt-1">@{{ cart.shipping_description }}</small>
        </li>
        <li v-if="cart.discount_name && cart.discount_amount < 0">
            <span>@lang('Discount'):</span>
            <span>@{{ cart.discount_name }}</span>
        </li>
        <li v-if="!cart.discount_name && cart.discount_amount < 0">
            <span>@lang('Discount')</span>
            <span>@{{ cart.discount_amount | price }}</span>
        </li>
        <li class="font-medium">
            <span>@lang('Total')</span>
            <span>@{{ cart.total | price }}</span>
        </li>
    </x-rapidez-ct::summary>

    <x-rapidez-ct::button.enhanced class="w-full mt-5" href="/checkout" dusk="checkout">
        @lang('Checkout')
    </x-rapidez-ct::button.enhanced>

    <div class="text-sm mt-4 text-center">
        @lang('Ordered within 2 minutes')
    </div>
</x-rapidez-ct::card>
