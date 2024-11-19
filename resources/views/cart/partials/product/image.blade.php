<td class="h-24 w-32 !pl-0 max-md:flex max-md:w-1/2">
    <img
        v-if="item.product.image"
        class="object-contain"
        :alt="item.product.name"
        :src="resizedPath(item.product.image.url + '.webp', '200')"
    />
    <x-rapidez::no-image v-else />
</td>

