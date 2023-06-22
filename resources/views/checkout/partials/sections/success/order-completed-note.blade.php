<x-rapidez-ct::card.inactive class="!bg-ct-accent/20">
    <x-rapidez-ct::title.lg>
        @lang('rapidez-ct::frontend.checkout.success.note.title')
    </x-rapidez-ct::title.lg>
    <p class="mt-4 text-sm">
        @lang('rapidez-ct::frontend.checkout.success.note.confirmation', ['orderid' => '@{{ order.increment_id }}', 'email' => '@{{ order.customer_email }}'])
    </p>
</x-rapidez-ct::card.inactive>
