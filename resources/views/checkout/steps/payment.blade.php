<div class="flex justify-between items-baseline">
    <x-rapidez-ct::title>
        @lang('Payment')
    </x-rapidez-ct::title>
    <x-rapidez-ct::progress-bar />
</div>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<x-rapidez-ct::button.enhanced form="payment" type="submit" dusk="continue">
    @lang('Place order')
</x-rapidez-ct::button.enhanced>

