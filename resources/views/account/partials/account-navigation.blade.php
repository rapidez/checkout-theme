<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Customer centre')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::list class="font-medium">
        @foreach (config('rapidez-checkout-theme.account.navigation') as $key => $item)
            @includeFirst(['rapidez-ct::components.dashboard.sidebar-item.' . $key, 'rapidez-ct::components.dashboard.sidebar-item.index'])
        @endforeach
    </x-rapidez-ct::list>
</x-rapidez-ct::card>
