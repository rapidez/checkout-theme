Vue.component('checkout-address', () => import('./components/CheckoutAddress.vue'))
Vue.component('checkout-success-addresses', () => import('./components/CheckoutSuccessAddresses.vue'))
Vue.component('address-card', () => import('./components/AddressCard.vue'))
Vue.component('remove-multiple-from-cart', () => import('./components/RemoveMultipleFromCart.vue'))

Vue.mixin({
    computed: {
        billingAndShippingAreTheSame() {
            if (this.$root.checkout.shipping_address?.customer_address_id) {
                this.$root.checkout.hide_billing = this.$root.checkout.shipping_address?.customer_address_id == this.$root.checkout.billing_address?.customer_address_id
            }

            return this.$root.checkout.hide_billing
        }
    }
})
