<td class="flex max-md:w-1/2 md:table-cell">
    <div class="flex flex-col items-start">
        <div>
            <a :href="window.url(item.product.url_key + item.product.url_suffix)" data-testid="cart-item-name">@{{ item.product.name }}</a>
            <div v-for="option in item.configurable_options">
                @{{ option.option_label }}: @{{ option.value_label }}
            </div>
            <div v-for="option in item.customizable_options">
                @{{ option.label }}: @{{ option.values[0].label || option.values[0].value }}
            </div>
            @include('rapidez-ct::cart.partials.product.alert')
            <div v-for="option in config.cart_attributes">
                <template v-if="item.product.attribute_values?.[option] && typeof item.product.attribute_values[option] === 'object'">
                    @{{ option }}: <span v-html="item.product.attribute_values[option]?.join(', ')"></span>
                </template>
            </div>
        </div>
        @include('rapidez-ct::cart.partials.product.remove-button')
    </div>
</td>
