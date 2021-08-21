let btnCollapse = document.querySelectorAll('p.solutions__collapse-buttons > [data-bs-toggle="collapse"]')
let cardCollapse = document.querySelectorAll('[data-bs-parent="#cards"]')


btnCollapse.forEach((btnC) => {

	btnC.addEventListener('click', (btn) => {
		if (btn.target.getAttribute('aria-expanded') === 'true') {

			btnCollapse.forEach((btnEx) => {
				btnEx.setAttribute('aria-expanded', 'false')
			})

			cardCollapse.forEach((card) => {

				card.classList.remove('openCard')
				if (card.getAttribute('id') === btn.target.getAttribute('aria-controls')) {
					card.classList.add('openCard')
					btn.target.setAttribute('aria-expanded', 'true')
				}
			})
		} else {

			btnCollapse.forEach((btnEx) => {
				btnEx.setAttribute('aria-expanded', 'false')
			})
			btn.target.setAttribute('aria-expanded', 'true')
		}
	})
})