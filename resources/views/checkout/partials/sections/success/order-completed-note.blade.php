<x-rapidez-ct::card.inactive class="!bg-ct-accent/20">
    <x-rapidez-ct::title.lg>
        @lang('We will get to work for you right away')
    </x-rapidez-ct::title.lg>
    <p class="mt-4 text-sm">
        @lang('We will send a confirmation of your order :orderid to :email', ['orderid' => '@{{ order.number }}', 'email' => '@{{ order.email }}'])
    </p>
</x-rapidez-ct::card.inactive>
