<x-rapidez-ct::checkout.partials.prev-button :href="route('cart')">
    @lang('Back to cart')
</x-rapidez-ct::checkout.partials.prev-button>

<x-rapidez-ct::checkout.partials.next-button form="credentials" loader>
    @lang('Next')
</x-rapidez-ct::checkout.partials.next-button>