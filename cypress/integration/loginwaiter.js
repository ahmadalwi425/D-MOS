describe("Login Waiter Test",() => {
    it('Login Waiter Success ',() => {
        cy.visit("/login");
        cy.get("#name").type("waiter").should("have.value","waiter");
        cy.get("#password").type("waiter123").should("have.value","waiter123");
        cy.get("#login").click();
    })

    it('Login Cashier Success ',() => {
        cy.visit("/login");
        cy.get("#name").type("cashier").should("have.value","cashier");
        cy.get("#password").type("cashier123").should("have.value","cashier123");
        cy.get("#login").click();
    })
})