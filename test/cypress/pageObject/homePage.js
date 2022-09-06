export const homePage = {
  TXT_PORTFOLIO: "//a[@title='Read More'][normalize-space()='Portfolio']",

  clickPortfolio() {
    cy.xpath(this.TXT_PORTFOLIO).click();
    return this;
  }
};