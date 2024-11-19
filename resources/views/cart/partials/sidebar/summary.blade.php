<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing tag="dl">
        <div>
            <dt>@lang('Subtotal')</dt>
            <dd>@{{ cart.prices.subtotal_including_tax.value | price }}</dd>
        </div>
        <div v-if="cart.shipping_addresses?.length && cart.shipping_addresses[0]?.selected_shipping_method?.amount">
            <dt>@lang('Shipping')</dt>
            <dd v-if="cart.shipping_addresses[0].selected_shipping_method.amount.value > 0">
                @{{ cart.shipping_addresses[0].selected_shipping_method.amount.value | price  }}
            </dd>
            <dd v-else class="font-medium text-ct-enhanced">
                @lang('Free')
            </dd>
        </div>
        <div v-if="cart.prices?.applied_taxes?.length && cart.prices?.applied_taxes[0]?.amount?.value > 0">
            <dt>@lang('Tax')</dt>
            <dd>@{{ cart.prices.applied_taxes[0].amount.value | price }}</dd>
        </div>
        <div v-for="discount in cart.prices.discounts">
            <dt>@{{ discount.label }}</dt>
            <dd>-@{{ discount.amount.value | price }}</dd>
        </div>
        <div class="font-medium">
            <dt>@lang('Total')</dt>
            <dd>@{{ cart.prices.grand_total.value | price }}</dd>
        </div>
    </x-rapidez-ct::separated-listing>

    <x-rapidez-ct::button.enhanced :href="route('checkout')" class="flex w-full items-center justify-center gap-1 mt-6" dusk="checkout">
        @lang('To checkout')
        <x-heroicon-o-arrow-right class="h-4" />
    </x-rapidez-ct::button.enhanced>

    <div class="mt-4 flex items-center justify-center gap-1 text-center text-sm">
        <x-heroicon-o-check class="h-5 text-ct-accent" stroke-width="2.5" />
        @lang('Ordered within 2 minutes')
    </div>
</x-rapidez-ct::card>
