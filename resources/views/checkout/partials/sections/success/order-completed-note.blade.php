<x-rapidez-ct::title.lg>
    @lang('We will get to work for you right away')
</x-rapidez-ct::title.lg>
<p class="mt-4 text-sm">
    @lang('We will send a confirmation of your order :orderid to :email', ['orderid' => '@{{ order.number }}', 'email' => '@{{ order.email }}'])
</p>
<p class="flex flex-wrap items-center gap-x-1 mt-4 text-sm">@lang('Your order is currently'): <strong v-blur>@{{ order.status }}</strong> <a class="inline-block" href="#" v-on:click.prevent="(e) => {e.target.classList.add('animate-spin'); refreshOrder().finally(() => e.target.classList.remove('animate-spin'))}"><x-heroicon-o-arrow-path class="size-4" /></a></p>
