<x-rapidez-ct::title.lg class="mb-4">
    @lang('Order overview')
</x-rapidez-ct::title.lg>
<x-rapidez-ct::separated-listing class="border-b pb-4 mb-4" v-cloak>
    <li v-for="item in cart.items">
        @{{ item.quantity }}x @{{ item.product.name }}
    </li>
</x-rapidez-ct::separated-listing>
<x-rapidez-ct::separated-listing tag="dl">
        @include('rapidez-ct::checkout.partials.sidebar.totals')
</x-rapidez-ct::separated-listing>
