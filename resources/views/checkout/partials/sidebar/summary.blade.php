<x-rapidez-ct::card class="relative">
    <a href="{{ url('/') }}" class="absolute inset-x-0 bottom-full -translate-y-6 max-lg:hidden *:h-auto *:max-h-20 *:w-full *:object-contain">
        <x-rapidez-ct::logo />
    </a>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing class="border-b pb-4 mb-4">
        <li v-for="item in cart.items">
            @{{ item.quantity }}x @{{ item.product.name }}
        </li>
    </x-rapidez-ct::separated-listing>
    <x-rapidez-ct::separated-listing tag="dl">
            @include('rapidez-ct::checkout.partials.sidebar.totals')
    </x-rapidez-ct::separated-listing>
</x-rapidez-ct::card>
