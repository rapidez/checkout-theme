<checkout-success>
    <div slot-scope="{ order }" dusk="checkout-success">
        <x-rapidez-ct::title-progress-bar>
            @lang('Thank you for your order')
        </x-rapidez-ct::title-progress-bar>
        <x-rapidez-ct::sections>
            @include('rapidez-ct::checkout.partials.sections.success.order-completed-note')
        </x-rapidez-ct::sections>
        <x-rapidez-ct::sections>
            @include('rapidez-ct::checkout.partials.sections.success.order-info')
            @include('rapidez-ct::checkout.partials.sections.success.products')
            @includeWhen(
                config('rapidez-checkout-theme.checkout.success.register'),
                'rapidez-ct::checkout.partials.sections.success.create-account'
            )
        </x-rapidez-ct::sections>
    </div>
</checkout-success>
