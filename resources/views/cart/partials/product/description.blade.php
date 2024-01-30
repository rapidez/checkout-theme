<td class="flex max-md:w-1/2 md:table-cell">
    <div class="flex flex-col items-start">
        <a :href="item.url | url">
            <div dusk="cart-item-name">@{{ item.name }}</div>
            <div v-for="(optionValue, option) in item.options">
                @{{ option }}: @{{ optionValue }}
            </div>
            <div v-for="option in cart?.items2?.find((item) => item.item_id == itemId).options.filter((option) => !['info_buyRequest', 'option_ids'].includes(option.code) && option.label)">
                @{{ option.label }}: @{{ option.value.title || option.value }}
            </div>
        </a>
        @include('rapidez-ct::cart.partials.product.remove-button')
    </div>
</td>