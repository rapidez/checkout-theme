<x-rapidez-ct::title-progress-bar>
    @lang('Payment')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<x-rapidez-ct::button.enhanced
    form="payment"
    type="submit"
    dusk="continue"
>
    @lang('Place order')
</x-rapidez-ct::button.enhanced>
