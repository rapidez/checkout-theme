@php($checkoutSteps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code')) ?: config('rapidez.frontend.checkout_steps.default'))
<checkout-success>
    <div slot-scope="{ order, refreshOrder, hideBilling, shipping, billing, items }" dusk="checkout-success">
        <div class="flex flex-wrap gap-1 items-baseline justify-between">
            <x-rapidez-ct::title>
                @lang('Thank you for your order')
            </x-rapidez-ct::title>
        </div>
        <x-rapidez-ct::sections>
            @include('rapidez-ct::checkout.partials.sections.success.order-completed-note')
        </x-rapidez-ct::sections>
        <x-rapidez-ct::sections>
            @include('rapidez-ct::checkout.partials.sections.success.order-info')
            @include('rapidez-ct::checkout.partials.sections.success.products')
            @include('rapidez-ct::checkout.partials.sections.success.newsletter')
            @includeWhen(
                config('rapidez.checkout-theme.checkout.success.register'),
                'rapidez-ct::checkout.partials.sections.success.create-account'
            )
        </x-rapidez-ct::sections>
    </div>
</checkout-success>
