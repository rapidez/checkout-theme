<x-rapidez-ct::title-progressbar>
    @lang('Payment')
</x-rapidez-ct::title-progressbar>

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
