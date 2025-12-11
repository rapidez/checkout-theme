
<graphql-mutation
    :query="'mutation ($cart_id: String!, $cart_item_id: Int, $quantity: Float) { updateCartItems(input: { cart_id: $cart_id, cart_items: [{ cart_item_id: $cart_item_id, quantity: $quantity }] }) { cart { ...cart } } } ' + config.fragments.cart"
    :variables="{ cart_id: mask.value, cart_item_id: item.id, quantity: item.quantity }"
    :callback="(variables, response) => updateCart(variables, response) && variables.quantity <= 0 ? window.$emit('cart-remove', item) : ''"
    :error-callback="checkResponseForExpiredCart"
    :debounce="500"
    v-slot="{ mutate, variables }"
>
    <form v-on:submit.prevent="mutate" class="max-w-24">
        <x-rapidez::quantity
            v-on:change="mutate"
            v-model.number="variables.quantity"
            v-model="variables.quantity"
            {{-- No "min" here so you're able to remove by lowering to 0 --}}
            ::step="(item.product?.stock_item?.qty_increments ?? 1)"
            ::max="item.product?.stock_item?.max_sale_qty"
        />
    </form>
</graphql-mutation>
