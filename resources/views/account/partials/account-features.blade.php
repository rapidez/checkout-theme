<x-rapidez-ct::card>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Account features')
    </x-rapidez-ct::title.lg>
    <ul class="space-y-5 [&>*]:relative [&>*]:pl-7">
        @foreach (['Track status of your order and view order history', 'Quick and easy ordering without having to fill in your details every time', 'Everything centralized in 1 place such as returns, exchanges and customer service'] as $feature)
            <li>
                <x-heroicon-o-check class="absolute top-0 left-0 h-5 text-ct-accent" />
                <span>@lang($feature)</span>
            </li>
        @endforeach
    </ul>
</x-rapidez-ct::card>
