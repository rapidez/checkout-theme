<x-rapidez-ct::card class="relative">
    <div class="absolute inset-x-0 bottom-full -translate-y-6 max-md:hidden [&>*]:h-auto [&>*]:max-h-20 [&>*]:w-full [&>*]:object-contain">
        <x-rapidez-ct::logo />
    </div>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing>
        <li v-for="item in cart.items">
            <span>@{{ item.qty }}x @{{ item.name }}</span>
        </li>
        <li
            class="flex justify-between last:font-medium [&>*]:flex-1 last:[&>*]:text-right"
            v-for="segment in checkout.totals.total_segments"
            v-if="segment.title"
        >
            <span v-if="segment.code !== 'shipping'">@{{ segment.title }}</span>
            <span v-else>@lang('Shipping')</span>

            <span v-if="segment.code !== 'shipping'">
                <span>
                    @{{ segment.value | price }}
                </span>
            </span>
            <template v-else>
                <span v-if="shipping_total = (checkout.totals.shipping_incl_tax - checkout.totals.shipping_tax_amount) > 0">
                    @{{ shipping_total | price }}
                </span>
                <span
                    class="text-ct-enhanced font-medium"
                    v-else
                >
                    @lang('Free')
                </span>
            </template>
        </li>
    </x-rapidez-ct::separated-listing>
</x-rapidez-ct::card>
