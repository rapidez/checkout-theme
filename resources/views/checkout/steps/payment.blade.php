<x-rapidez-ct::title-progress-bar href="#" v-on:click.prevent="goToStep(1)">
    @lang('Payment')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    <x-rapidez-ct::card.inactive>
        @include('rapidez-ct::checkout.partials.sections.payment')
    </x-rapidez-ct::card.inactive>
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline v-on:click.prevent="goToStep(1)">
        @lang('Back to credentials')
    </x-rapidez-ct::button.outline>

    <x-rapidez-ct::button.accent class="relative" form="payment" type="submit" dusk="continue" loader>
        @lang('Place order')
    </x-rapidez-ct::button.accent>
</x-rapidez-ct::toolbar>
