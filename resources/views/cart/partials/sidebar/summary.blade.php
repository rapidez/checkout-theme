<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing tag="dl">
        <div>
            <dt>@lang('Subtotal')</dt>
            <dd v-if="showTax">@{{ cart.prices.subtotal_including_tax.value | price }}</dd>
            <dd v-else>@{{ cart.prices.subtotal_excluding_tax.value | price }}</dd>
        </div>
        <div v-if="cart.shipping_addresses?.length && cart.shipping_addresses[0]?.selected_shipping_method?.amount">
            <dt>@lang('Shipping')</dt>
            <dd v-if="cart.shipping_addresses[0].selected_shipping_method.amount.value > 0">
                @{{ cart.shipping_addresses[0].selected_shipping_method.amount.value | price  }}
            </dd>
            <dd v-else class="font-medium text-primary">
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

    <x-rapidez::button.conversion :href="route('checkout')" class="flex w-full items-center justify-center gap-1 mt-6" dusk="checkout">
        @lang('To checkout')
        <x-heroicon-o-arrow-right class="size-4" />
    </x-rapidez::button.conversion>

    <div class="mt-4 flex items-center justify-center gap-1 text-center text-sm">
        <x-heroicon-o-check class="size-5 text-primary" stroke-width="2.5" />
        @lang('Ordered within 2 minutes')
    </div>
</x-rapidez-ct::card>
