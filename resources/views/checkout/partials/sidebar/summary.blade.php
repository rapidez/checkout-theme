<x-rapidez-ct::card class="relative">
    <div class="absolute inset-x-0 bottom-full -translate-y-6 max-md:hidden [&>*]:h-auto [&>*]:max-h-20 [&>*]:w-full [&>*]:object-contain">
        <x-rapidez-ct::logo />
    </div>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('rapidez-ct::frontend.checkout.order_overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::seperated-listing>
        <li v-for="item in cart.items">
            <span>@{{ item.qty }}x @{{ item.name }}</span>
        </li>
        <li
            class="flex justify-between last:font-medium [&>*]:flex-1 last:[&>*]:text-right"
            v-for="segment in checkout.totals.total_segments"
            v-if="segment.title"
        >
            <span>@{{ segment.title }}</span>
            <span v-if="segment.code !== 'shipping'">@{{ segment.value | price }}</span>
            <span v-else>@{{ (checkout.totals.shipping_incl_tax - checkout.totals.shipping_tax_amount) | price }}</span>
        </li>
    </x-rapidez-ct::seperated-listing>
</x-rapidez-ct::card>
