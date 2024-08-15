
<graphql-mutation
    :query="'mutation ($cart_id: String!, $cart_item_id: Int, $quantity: Float) { updateCartItems(input: { cart_id: $cart_id, cart_items: [{ cart_item_id: $cart_item_id, quantity: $quantity }] }) { cart { ' + config.queries.cart + ' } } }'"
    :variables="{ cart_id: mask, cart_item_id: item.id, quantity: item.quantity }"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    v-slot="{ mutate, variables }"
>
    <form v-on:submit.prevent="mutate" class="flex w-20 overflow-hidden border rounded">
        <button
            class="flex-1 bg-ct-inactive-100 transition hover:bg-opacity-80"
            v-on:click.prevent="variables.quantity <= (item.product.stock_item?.min_sale_qty || 1) ? variables.quantity = variables.quantity : variables.quantity = +variables.quantity - (item.product.stock_item?.qty_increments || 1);mutate()"
        >-</button>
        <input
            class="h-10 w-2/5 border-none px-0 text-center text-sm [appearance:textfield] focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
            name="qty"
            type="number"
            {{ $attributes }}
            v-model="variables.quantity"
            v-on:change="mutate"
            v-bind:min="Math.max(item.product.stock_item?.min_sale_qty, item.product.stock_item?.qty_increments) || null"
            v-bind:max="item.product.stock_item?.max_sale_qty"
            v-bind:step="item.qty_increments"
            v-bind:dusk="'qty-'+index"
        />
        <button
            class="flex-1 bg-ct-inactive-100 transition hover:bg-opacity-80"
            v-on:click.prevent="variables.quantity = +variables.quantity + (item.product.stock_item?.qty_increments || 1);mutate()"
        >+</button>
    </form>
</graphql-mutation>
