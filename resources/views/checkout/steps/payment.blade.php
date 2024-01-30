<x-rapidez-ct::section-title href="#" v-on:click.prevent="goToStep(1)">
    @lang('Payment')
</x-rapidez-ct::section-title>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    @include('rapidez-ct::checkout.partials.buttons.payment')
</x-rapidez-ct::toolbar>
