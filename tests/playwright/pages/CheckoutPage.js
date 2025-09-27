import { expect } from '@playwright/test'
import { CheckoutPage as CoreCheckoutPage } from '@rapidez/core/tests/playwright/pages/CheckoutPage.js'

export class CheckoutPage extends CoreCheckoutPage {
    async continue(expectedStep) {
        // With the checkout theme the login and
        // credentials step are on the same page
        if (expectedStep == 'credentials') {
            return
        }

        await super.continue(expectedStep)
    }
}
