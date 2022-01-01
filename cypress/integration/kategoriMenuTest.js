describe("Ketegori Menu Test",() => {
	it('Add Data ',() => {
		cy.visit("/login");
		cy.get("#name").type("waiter").should("have.value","waiter");
		cy.get("#password").type("waiter123").should("have.value","waiter123");
		cy.get("#login").click();
		cy.get('#menuGroup').click();
		cy.get('#jenisMenuOption').click();
		cy.get('#addJenisMenu').click();
		cy.get('#nama_jenis').type("dessert").should("have.value","dessert");
		cy.get('#submit').click();

	});

	it('Edit Data ',() => {
		cy.visit("/login");
		cy.get("#name").type("waiter").should("have.value","waiter");
		cy.get("#password").type("waiter123").should("have.value","waiter123");
		cy.get("#login").click();
		cy.get('#menuGroup').click();
		cy.get('#jenisMenuOption').click();
		cy.get('#edit4').click();
		cy.get('#nama_jenis').clear();
		cy.get('#nama_jenis').type("beverages").should("have.value","beverages");
		cy.get('#submit').click();

	});

	it('Delete Data ',() => {
		cy.visit("/login");
		cy.get("#name").type("waiter").should("have.value","waiter");
		cy.get("#password").type("waiter123").should("have.value","waiter123");
		cy.get("#login").click();
		cy.get('#menuGroup').click();
		cy.get('#jenisMenuOption').click();
		cy.get('#delete22').click();
		// cy.get('#alert').contains('Success');

	});
})