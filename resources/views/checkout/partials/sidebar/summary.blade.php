<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::summary>
        <li v-for="item in cart.items">
            <span>@{{ item.qty }}x @{{ item.name }}</span>
        </li>
        <li class="last:font-medium" v-for="segment in checkout.totals.total_segments">
            <span>@{{ segment.title }}</span>
            <span v-if="segment.code !== 'shipping'">@{{ segment.value | price }}</span>
            <span v-else>@{{ (checkout.totals.shipping_incl_tax - checkout.totals.shipping_tax_amount) | price }}</span>
        </li>
    </x-rapidez-ct::summary>
</x-rapidez-ct::card>
