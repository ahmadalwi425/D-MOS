describe('Customer Test', () => {
    const uuid = () => Cypress._.random(0, 1e6)
    const id = uuid()
    const testname = `testname${id}`
    it('Ordering', () => {
        cy.visit('/pesan/meja/2M3RB')
        cy.get('input[name=nama_pemesan]').type(testname)
        cy.get('form').submit()
        cy.get('a[data-id=41]').click()
        cy.get('img[data-toggle=modal]').click()
        cy.get('form').submit()
        cy.get('input[data-toggle=modal]').click()
        cy.get('form').submit()
        cy.get('p').should('contain','Silakan tunggu pesanan Anda')
    })
})