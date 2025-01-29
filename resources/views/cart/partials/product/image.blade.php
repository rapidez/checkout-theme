<td class="h-24 w-32 !pl-0 max-md:flex max-md:w-1/2">
    <img
        v-if="item.configured_variant?.image"
        class="object-contain"
        :alt="item.product.name"
        :src="resizedPath(item.configured_variant.image.url + '.webp', '200')"
    />
    <img
        v-else-if="item.product.image"
        v-bind:class="{'opacity-20' : !item.is_available}"
        class="object-contain"
        :alt="item.product.name"
        :src="resizedPath(item.product.image.url + '.webp', '200')"
    />
    <x-rapidez::no-image v-else />
</td>
