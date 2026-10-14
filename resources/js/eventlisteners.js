import { useLocalStorage } from '@vueuse/core'
import { addAfterPlaceOrderHandler } from 'Vendor/rapidez/core/resources/js/stores/usePaymentHandlers'
import { user } from 'Vendor/rapidez/core/resources/js/stores/useUser'

const newsletterSubscribe = useLocalStorage('newsletter_subscribe', false)

document.addEventListener('vue:loaded', (event) => {
    event.detail.vue.config.globalProperties.newsletterSubscribe = newsletterSubscribe
})

addAfterPlaceOrderHandler(async function (response) {
    if (!newsletterSubscribe.value) {
        return
    }

    newsletterSubscribe.value = false

    try {
        if (user.value?.is_logged_in) {
            await window.magentoGraphQL(
                'mutation { updateCustomerV2(input: { is_subscribed: true }) { customer { is_subscribed } } }',
                {},
                { headers: {}, notifyOnError: false, redirectOnExpiration: false },
            )
        } else {
            await window.magentoGraphQL(
                'mutation visitor ($email: String!) { subscribeEmailToNewsletter(email: $email) { status } }',
                { email: response?.data?.placeOrder?.orderV2?.email },
                { headers: {}, notifyOnError: false, redirectOnExpiration: false },
            )
        }
    } catch (error) {}
})
