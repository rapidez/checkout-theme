@php($checkoutSteps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code')) ?: config('rapidez.frontend.checkout_steps.default'))
<checkout-success>
    <div slot-scope="{ order, refreshOrder, hideBilling, shipping, billing, items }" dusk="checkout-success" class="container">
        <x-rapidez-ct::layout class="mt-4 sm:mt-12">
            <x-rapidez-ct::title>
                @lang('Thank you for your order')
            </x-rapidez-ct::title>
        
            <x-rapidez-ct::sections>
                <x-rapidez-ct::card.inactive class="!bg-primary/20">
                @include('rapidez-ct::checkout.partials.sections.success.order-completed-note')
            </x-rapidez-ct::card.inactive>
            </x-rapidez-ct::sections>

            <x-rapidez-ct::sections>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::checkout.partials.sections.success.order-info')
                </x-rapidez-ct::card.inactive>

                @include('rapidez-ct::checkout.partials.sections.success.products')

                @if (Rapidez::config('newsletter/general/active', 1))
                    <x-rapidez-ct::card.inactive>
                        @include('rapidez-ct::checkout.partials.sections.success.newsletter')
                    </x-rapidez-ct::card.inactive>
                @endif
                <x-rapidez-ct::card.inactive>
                    @if (config('rapidez.checkout-theme.checkout.success.register'))
                        @include('rapidez-ct::checkout.partials.sections.success.create-account')
                    @endif
                </x-rapidez-ct::card.inactive>
            </x-rapidez-ct::sections>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sections.success.features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
</checkout-success>
