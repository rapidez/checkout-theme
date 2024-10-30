@php($checkoutSteps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code')) ?: config('rapidez.frontend.checkout_steps.default'))

<div class="flex flex-wrap justify-between items-baseline">
    <x-rapidez-ct::title tag="h1">
        @lang('Cart')
    </x-rapidez-ct::title>
    <div class="flex wrap">
        <div>
            @lang('Step :step out of :total', [
                'step' => 1,
                'total' => count($checkoutSteps),
            ])
        </div>
    </div>
</div>
