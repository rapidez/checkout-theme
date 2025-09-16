import { BasePage } from "./BasePage";

export class RegisterPage extends BasePage {
  constructor(page) {
    super(page);
    this.url = "/register";
  }

  async register(firstname, lastname, email, password) {
    await super.goto();
    await this.page.waitForLoadState('domcontentloaded');

    await this.page.waitForTimeout(500);

    await this.page.fill('[name=firstname]', firstname, { force: true })
    await this.page.waitForTimeout(100);
    await this.page.fill('[name=lastname]', lastname, { force: true })
    await this.page.waitForTimeout(100);
    await this.page.fill('[name=email]', email, { force: true })
    await this.page.waitForTimeout(100);
    await this.page.fill('[name=password]', password, { force: true })

    await this.page.getByTestId('register-button').click()
    await this.page.waitForLoadState("networkidle");
  }
}
