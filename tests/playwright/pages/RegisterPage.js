import { BasePage } from "./BasePage";

export class RegisterPage extends BasePage {
  constructor(page) {
    super(page);
    this.url = "/register";
  }

  firstnameInput() {
    return this.page.getByTestId("firstname-input");
  }

  lastnameInput() {
    return this.page.getByTestId("lastname-input");
  }

  emailInput() {
    return this.page.getByTestId("email-input");
  }

  passwordInput() {
    return this.page.getByTestId("password-input");
  }

  registerButton() {
    return this.page.getByTestId("register-button");
  }

  async fillFirstname(firstname) {
    await this.firstnameInput().fill(firstname);
  }

  async fillLastname(lastname) {
    await this.lastnameInput().fill(lastname);
  }

  async fillEmail(email) {
    await this.emailInput().fill(email);
  }

  async fillPassword(password) {
    await this.passwordInput().fill(password);
  }

  async clickRegisterButton() {
    await this.registerButton().click();
  }

  async register(firstname, lastname, email, password) {
    await super.goto();
    await this.fillFirstname(firstname);
    await this.fillLastname(lastname);
    await this.fillEmail(email);
    await this.fillPassword(password);

    await this.clickRegisterButton();
    await this.page.waitForLoadState("networkidle");
  }
}
