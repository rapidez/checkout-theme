<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Customer centre')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing
        class="font-medium"
        tag="div"
    >
        @foreach (config('rapidez-checkout-theme.account.navigation') as $key => $item)
            @includeFirst(['rapidez-ct::components.dashboard.sidebar-item.' . $key, 'rapidez-ct::components.dashboard.sidebar-item.index'])
        @endforeach
    </x-rapidez-ct::separated-listing>

</x-rapidez-ct::card>
