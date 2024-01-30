<x-rapidez-ct::checkout.partials.prev-button v-on:click.prevent="goToStep(1)">
    @lang('Back to credentials')
</x-rapidez-ct::checkout.partials.prev-button>

<x-rapidez-ct::checkout.partials.next-button class="relative" form="payment" type="submit" dusk="continue" loader>
    @lang('Place order')
</x-rapidez-ct::checkout.partials.next-button>