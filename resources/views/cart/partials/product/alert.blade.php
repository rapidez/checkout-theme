<x-rapidez-ct::alert class="self-start max-xl:absolute max-xl:top-2 max-xl:right-0" v-if="item.qty_backordered">
    <template v-if="item.qty_backordered < item.qty">
        @lang(':count of the requested quantity will be backordered', ['count' => '@{{ item.qty_backordered }}'])
    </template>
    <template v-else>
        @lang('This product will be backordered')
    </template>
</x-rapidez-ct::alert>
<x-rapidez-ct::alert v-if="!item.is_available" class="my-2 max-w-sm">
    @lang('This product is out of stock, remove it to continue your order.')
</x-rapidez-ct::alert>
<template v-else v-for="error in item.errors ?? []">
    <x-rapidez-ct::alert class="my-2 max-w-sm">
        @{{ error.message }}
    </x-rapidez-ct::alert>
</template>
