import { defineAsyncComponent } from 'vue'

document.addEventListener('vue:loaded', (event) => {
    const vue = event.detail.vue
    vue.component('checkout-success-addresses', defineAsyncComponent(() => import('./components/CheckoutSuccessAddresses.vue')))
    vue.component('address-card', defineAsyncComponent(() => import('./components/AddressCard.vue')))
})