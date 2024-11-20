<x-rapidez-ct::sections>
    @include('rapidez-ct::cart.partials.products')
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline href="/">
        @lang('Continue shopping')
    </x-rapidez-ct::button.outline>

    @include('rapidez-ct::cart.coupon')
</x-rapidez-ct::toolbar>
