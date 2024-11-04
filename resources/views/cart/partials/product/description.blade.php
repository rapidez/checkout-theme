<td class="flex max-md:w-1/2 md:table-cell">
    @include('rapidez-ct::cart.partials.product.alert')
    <div class="flex flex-col items-start">
        <a :href="item.product.url_key + item.product.url_suffix | url">
            <div dusk="cart-item-name">@{{ item.product.name }}</div>
            <div v-for="option in item.configurable_options">
                @{{ option.option_label }}: @{{ option.value_label }}
            </div>
            <div v-for="option in item.customizable_options">
                @{{ option.label }}: @{{ option.values[0].label || option.values[0].value }}
            </div>
            <span class="text-red-600 block" v-if="!canOrderCartItem(item)">
                @lang('This product it out of stock, remove it to continue your order.')
            </span>
            <div v-for="option in config.cart_attributes">
                <template v-if="item.product.attribute_values?.[option] && typeof item.product.attribute_values[option] === 'object'">
                    @{{ option }}: <span v-html="item.product.attribute_values[option]?.join(', ')"></span>
                </template>
            </div>
        </a>
        @include('rapidez-ct::cart.partials.product.remove-button')
    </div>
</td>
