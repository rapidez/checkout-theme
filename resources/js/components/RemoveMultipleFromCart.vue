<script>
import { cart } from 'Vendor/rapidez/core/resources/js/stores/useCart.js'
import { mask } from 'Vendor/rapidez/core/resources/js/stores/useMask.js'

export default {
    render() {
        return this.$scopedSlots.default(this)
    },

    methods: {
        async remove() {
            await Promise.all(this.outOfStockItems.map(async (item) => {
                let response = await window.magentoGraphQL(
                    `mutation ($cart_id: String!, $cart_item_id: Int) { removeItemFromCart(input: { cart_id: $cart_id, cart_item_id: $cart_item_id }) { cart { ` + config.queries.cart + ` } } }`,
                    {
                        cart_id: mask.value,
                        cart_item_id: item.id,
                    },
                )

                this.updateCart({}, response)
            }))
        }
    },

    computed: {
        outOfStockItems() {
            return cart.value.items.filter((item) => !this.$root.canOrderCartItem(item))
        }
    }
}
</script>