<td class="h-24 w-40 !pl-0 max-md:flex max-md:w-1/2">
    <img v-if="item.product.image" class="object-contain" :alt="item.product.name" :src="'/storage/{{ config('rapidez.store') }}/resizes/200/magento' + item.product.image.url.replace(config.media_url, '') + '.webp'">
    <x-rapidez::no-image v-else />
</td>

