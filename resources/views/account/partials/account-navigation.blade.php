<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('rapidez-ct::frontend.account.dashboard.dashboard')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::seperated-listing class="font-medium">
        <li>
            <a href="/account/edit">
                @lang('rapidez-ct::frontend.account.dashboard.settings')
            </a>
        </li>
        <li>
            <a href="/account/orders">
                @lang('rapidez-ct::frontend.account.dashboard.orders')
            </a>
        </li>
        <li>
            <button>
                @lang('rapidez-ct::frontend.account.logout')
            </button>
        </li>
    </x-rapidez-ct::seperated-listing>
</x-rapidez-ct::card>
