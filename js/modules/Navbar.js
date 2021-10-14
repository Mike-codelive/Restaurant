const navLinks = document.querySelectorAll('.nav-item')
const ico = '<span class="material-icons-outlined">chevron_right</span>'

function showDropdown(nav, a) {
	a.addEventListener('click', function(e) {

		['show', 'showNavLink'].map(c=> nav.lastChild.classList.toggle(c) )
		// nav.lastChild.classList.toggle('show')
		// nav.lastChild.classList.toggle('showNavLink')
		console.log(nav.lastChild)
		a.classList.toggle('activeLink')
		a.firstElementChild.classList.toggle('rotate-quarter')

	})
}

navLinks.forEach((el) => {

	if (el.childElementCount > 1) {

		const anchor = el.firstChild
		anchor.innerHTML += ico
		if (!(el.parentElement.getAttribute('id') === 'menu-navbar')) {

			showDropdown(el,anchor)
		}
	}
})

