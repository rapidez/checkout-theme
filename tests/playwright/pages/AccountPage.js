import { expect } from '@playwright/test'

export class AccountPage {
    constructor(page) {
        this.page = page
    }

    async logout() {
        await this.page.goto('/account')
        await this.page.getByTestId('logout').click()
        await this.page.waitForLoadState('networkidle')
    }
}
