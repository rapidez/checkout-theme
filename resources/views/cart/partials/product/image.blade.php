<td class="h-24 w-40 !pl-0 max-md:flex max-md:w-1/2">
    <img v-if="item.image" class="object-contain" :alt="item.name" :src="'/storage/{{ config('rapidez.store') }}/resizes/200/magento/catalog/product' + item.image + '.webp'">
    <x-rapidez::no-image v-else />
</td>
