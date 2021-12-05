describe("Login Waiter Test",() => {
    it('Login Waiter Success ',() => {
        cy.visit("/login");
        cy.get("#name").type("waiter").should("have.value","waiter");
        cy.get("#password").type("waiter123").should("have.value","waiter123");
        cy.get("#login").click();
    })
})