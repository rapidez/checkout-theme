import { test, expect } from "@playwright/test";
import { BasePage } from '../../vendor/rapidez/core/tests/playwright/pages/BasePage'
import { AccountPage } from './pages/AccountPage';
// import { RegisterPage } from '../../vendor/rapidez/account/tests/playwright/pages/RegisterPage';
import { RegisterPage } from './pages/RegisterPage';


test("Register account", async ({ page }) => {
  const registerPage = new RegisterPage(page);

  const email = `wayne+${crypto.randomUUID()}@enterprises.com`;
  const password = "IronManSucks.91939";

  await registerPage.register("Bruce", "Wayne", email, password);

  await expect(page.getByTestId("account-menu")).toContainText("Bruce");
  await new BasePage(page).screenshot('account-registered');
});

test("Logout account", async ({ page }) => {
  const accountPage = new AccountPage(page);
  const registerPage = new RegisterPage(page);

  const email = `wayne+${crypto.randomUUID()}@enterprises.com`;
  const password = "IronManSucks.91939";

  await registerPage.register("Bruce", "Wayne", email, password);

  await accountPage.logout();
  await expect(page).toHaveURL("/login");
  await new BasePage(page).screenshot('account-logged-out');
});

test("wcag", async ({ page }, testInfo) => {
  const registerPage = new RegisterPage(page);

  const email = `wayne+${crypto.randomUUID()}@enterprises.com`;
  const password = "IronManSucks.91939";

  await registerPage.register("Bruce", "Wayne", email, password);

  await new BasePage(page).wcag(testInfo);
});
