import { test, expect } from '@playwright/test'
import { BasePage } from '@rapidez/core/tests/playwright/pages/BasePage.js'
import { ProductPage } from '@rapidez/core/tests/playwright/pages/ProductPage.js'
import { CheckoutPage } from './pages/CheckoutPage'
import { AccountPage } from './pages/AccountPage'

test('as guest', BasePage.tags, async ({ page }) => {
    const productPage = new ProductPage(page)
    const checkoutPage = new CheckoutPage(page)

    await productPage.addToCart(process.env.PRODUCT_URL_SIMPLE)
    await checkoutPage.checkout(`wayne+${crypto.randomUUID().substring(0, 24)}@enterprises.com`, false, false, [
        'login',
        'credentials',
        'payment',
        'success',
    ])
})

test('as user', BasePage.tags, async ({ page }) => {
    const productPage = new ProductPage(page)
    const checkoutPage = new CheckoutPage(page)
    const accountPage = new AccountPage(page)

    const email = `wayne+${crypto.randomUUID().substring(0, 24)}@enterprises.com`
    const password = 'IronManSucks.91939'

    // Register
    await productPage.addToCart(process.env.PRODUCT_URL_SIMPLE)
    await checkoutPage.checkout(email, password, true, ['credentials'])

    await accountPage.logout()

    // Login
    await productPage.addToCart(process.env.PRODUCT_URL_SIMPLE)
    await checkoutPage.checkout(email, password)
})
