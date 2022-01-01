describe("Cashier Status Test",() => {
    it('Cashier Status Test Success ',() => {
        cy.visit("/login");
        cy.get("#name").type("cashier").should("have.value","cashier");
        cy.get("#password").type("cashier123").should("have.value","cashier123");
        cy.get("#login").click();
        cy.get("#Dibayar").click();
    })
})