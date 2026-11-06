<graphql-mutation
    :query="'mutation ($cart_id: String!, $cart_item_uid: ID) { removeItemFromCart(input: { cart_id: $cart_id, cart_item_uid: $cart_item_uid }) { cart { ...cart } } } ' + config.fragments.cart"
    :variables="{ cart_id: mask.value, cart_item_uid: item.uid }"
    :notify="{ message: item.product.name + ' ' + config.translations.cart.remove }"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    v-slot="{ mutate }"
>
    <button
        v-on:click="mutate"
        class="text-red-700 mt-1 text-xs hover:underline"
        v-bind:class="{'!text-ct-error underline!' : !item.is_available}"
        data-testid="cart-item-remove"
    >
        @lang('Remove')
    </button>
</graphql-mutation>
