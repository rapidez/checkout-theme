<section>
    <x-rapidez-ct::title.lg>
        @lang('We will get to work for you right away')
    </x-rapidez-ct::title.lg>
    <p class="mt-4 text-sm">
        @lang('We will send a confirmation of your order :orderid to :email', ['orderid' => '@{{ order.increment_id }}', 'email' => '@{{ order.customer_email }}'])
    </p>
</section>
