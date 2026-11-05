@include('rapidez-ct::cart.partials.cart-title')

<x-rapidez-ct::alert v-if="!canOrder.value" class="mt-5">
    <template v-if="cart.value.items.filter(item => !item.is_available || item.errors?.length).length > 1">
        @lang(':count items need your attention before you can check out.', ['count' => '@{{ cart.value.items.filter(item => !item.is_available || item.errors?.length).length }}'])
    </template>
    <template v-else>
        @lang('1 item needs your attention before you can check out.')
    </template>
</x-rapidez-ct::alert>

<x-rapidez-ct::layout class="mt-5">
    @include('rapidez-ct::cart.cart')
    <x-slot:sidebar>
        @include('rapidez-ct::cart.partials.sidebar.sidebar')
    </x-slot:sidebar>
</x-rapidez-ct::layout>
@include('rapidez-ct::cart.partials.crosssells')
