<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Customer centre')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::seperated-listing class="font-medium">
        <li>
            <a href="/account/edit">
                @lang('Account settings')
            </a>
        </li>
        <li>
            <a href="/account/orders">
                @lang('My orders')
            </a>
        </li>
        <li>
            <button>
                @lang('Logout')
            </button>
        </li>
    </x-rapidez-ct::seperated-listing>
</x-rapidez-ct::card>
