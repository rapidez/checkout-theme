import { expect } from '@playwright/test'

export class RegisterPage {
    constructor(page) {
        this.page = page
    }

    async register() {
        const email = `wayne+${crypto.randomUUID()}@enterprises.com`;
        const password = 'IronManSucks.91939';

        await this.page.goto('/register')
        await this.page.waitForTimeout(700)
        await this.page.fill('[name=firstname]', 'Bruce')
        await this.page.fill('[name=lastname]', 'Wayne')
        await this.page.fill('[name=email]', email)
        await this.page.fill('[name=password]', password)

        await this.page.getByTestId('continue').click()
        await this.page.waitForLoadState('networkidle')
        await this.page.waitForURL('/account')
        await expect(this.page.getByTestId('account-content')).toBeVisible()
    }
}
