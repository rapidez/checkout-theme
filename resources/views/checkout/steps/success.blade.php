@php($checkoutSteps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code')) ?: config('rapidez.frontend.checkout_steps.default'))
<checkout-success v-slot="{ order, refreshOrder, hideBilling, shipping, billing, items, needsLogin }">
    <div data-testid="checkout-success" class="container" v-cloak>
        <x-rapidez-ct::layout class="mt-4 sm:mt-12">
            <x-rapidez-ct::title tag="h1" class="mb-4">
                @lang('Thank you for your order')
            </x-rapidez-ct::title>

            <x-rapidez-ct::sections>
                <x-rapidez-ct::card.inactive class="!bg-primary/20" data-testid="masked">
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
                @if (config('rapidez.checkout-theme.checkout.success.register'))
                    <x-rapidez-ct::card.inactive>
                        @include('rapidez-ct::checkout.partials.sections.success.create-account')
                    </x-rapidez-ct::card.inactive>
                @endif
            </x-rapidez-ct::sections>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sections.success.features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
</checkout-success>
