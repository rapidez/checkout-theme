<x-rapidez-ct::title-progress-bar
    href="#"
    v-on:click.prevent="goToStep(1)"
>
    @lang('Payment')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline v-on:click.prevent="goToStep(1)">
        @lang('Back to credentials')
    </x-rapidez-ct::button.outline>
    <x-rapidez-ct::button.enhanced
        form="payment"
        type="submit"
        dusk="continue"
    >
        @lang('Place order')
    </x-rapidez-ct::button.enhanced>
</x-rapidez-ct::toolbar>
