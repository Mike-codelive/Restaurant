let btnCollapse = document.querySelectorAll('p.solutions__collapse-buttons > [data-bs-toggle="collapse"]')
let cardCollapse = document.querySelectorAll('[data-bs-parent="#cards"]')
let prodIco = document.querySelectorAll('.prod__first-icons > div')
let icoMaxWidth = 0


switchIcoClass = (operator) => {

	prodIco.forEach((ico) => {
		if (operator === 'remove') {
			ico.classList.remove('prod__icon-lg');

		} else if (operator === 'add') {
			ico.classList.add('prod__icon-lg');
		}
	})
}

getIcoMaxWidth = () => {
	if (icoMaxWidth <= 0) {

		switchIcoClass('remove')
		prodIco.forEach((ico) => {
			const icoWidth = ico.offsetWidth + 3
			icoMaxWidth = icoWidth > icoMaxWidth ? icoWidth.toString() : icoMaxWidth.toString()
		})
		switchIcoClass('add')
	}
	return icoMaxWidth
}


prodIco.forEach((ico) => {
	ico.style.width = `${getIcoMaxWidth()}px`;
})


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
