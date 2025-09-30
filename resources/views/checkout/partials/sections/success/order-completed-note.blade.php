<x-rapidez-ct::title.lg>
    @lang('We will get to work for you right away')
</x-rapidez-ct::title.lg>
<p class="mt-4 text-sm">
    @lang('We will send a confirmation of your order :orderid to :email', ['orderid' => '@{{ order.number }}', 'email' => '@{{ order.email }}'])
</p>

<template v-if="needsLogin">
    <p class="mt-4 text-sm">@lang('Please log in to view the status of your order')</p>
</template>
<template v-else>
    <p class="mt-4 text-sm">@lang('Your order is currently'): <span class="font-bold" v-blur>@{{ order.status }}</span> <a class="inline-block" href="#" v-on:click.prevent="(e) => {e.target.classList.add('animate-spin'); refreshOrder().finally(() => e.target.classList.remove('animate-spin'))}"><x-heroicon-o-arrow-path class="size-4" /></a></p>
</template>
