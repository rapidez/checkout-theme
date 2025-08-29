import { BasePage } from "./BasePage";

export class RegisterPage extends BasePage {
  constructor(page) {
    super(page);
    this.url = "/register";
  }

  async register(firstname, lastname, email, password) {
    await super.goto();
    await this.page.fill('[name=firstname]', firstname)
    await this.page.fill('[name=lastname]', lastname)
    await this.page.fill('[name=email]', email)
    await this.page.fill('[name=password]', password)

    await this.page.getByTestId('register-button').click()
    await this.page.waitForLoadState("networkidle");
  }
}
