@php($checkoutSteps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code')) ?: config('rapidez.frontend.checkout_steps.default'))
<checkout-success>
    <div slot-scope="{ order, refreshOrder, hideBilling, shipping, billing, items }" dusk="checkout-success" class="container">
        <x-rapidez-ct::layout class="mt-4 sm:mt-12">
            <x-rapidez-ct::title>
                @lang('Thank you for your order')
            </x-rapidez-ct::title>
        
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
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sections.success.features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
</checkout-success>
