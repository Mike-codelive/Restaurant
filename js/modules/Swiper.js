import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper/core'

SwiperCore.use([Autoplay, Pagination, Navigation])

export let Swiper = new SwiperCore('#car__swipe', {

	autoplay: {
		delay: 1000,
	},
	speed: 1000,
	loop: true,

	breakpoints: {
    // when window width is >= 320px
    320: {
    	slidesPerView: 2,
    	spaceBetween: 60
    },
    // when window width is >= 480px
    480: {
    	slidesPerView: 3,
    	spaceBetween: 70
    },
    // when window width is >= 640px
    640: {
    	slidesPerView: 4,
    	spaceBetween: 80
    },
    992: {
    	slidesPerView: 5,
    	spaceBetween: 90
    }
}

})

export let SwiperRev = new SwiperCore('#reviews__swipe', {

	// autoplay: {
	// 	delay: 1000,
	// },
	allowTouchMove: false,
	loop: true,
	speed: 500,
	spaceBetween: 30,
	slidesPerView: "auto",
	navigation: {
		nextEl: '#swipe-rev-btn-next',
		prevEl: '#swipe-rev-btn-prev'
	},
	// slideActiveClass: 'any'

})

let arr1 = [1,2,3]
let arr2 = ['a','b',3]


function squared(arr1, arr2) {

	let result = false
	const intersection = arr1.filter(element => {
		// return arr2.includes(element)
		if (arr2.includes(element)) {
			result = true
		}
	})
	return result
}

squared(arr1, arr2)

const compareClasses = (a,b) => {
	a.forEach((elA, i) => {
		b.forEach((elB, i) => {
			if (elA === elB) {
				console.log(elA, elB)
				
			}
		})
	})
}

// var newSwip = document.querySelector('#reviews__swipe').SwiperCore;

let slideRev = document.querySelectorAll('.reviews__slide-card')
let slideSwipe = document.querySelectorAll('.reviews-wrapper .swiper-slide')



SwiperRev.on('slideChangeTransitionEnd', () => {
	// console.log('hit!')

	slideRev.forEach((rev) => {
		rev.firstElementChild.classList.remove('reviews__slide-card-show')
		// console.log(rev.firstElementChild.classList)
	}) 

	// slideRev.forEach((rev) => {
	// 	slideSwipe.forEach((slide) => {

	// 		const classList = [...rev.classList]
	// 		const classListSlide = [...slide.classList]
	// 		// console.log(typeof classList, classList)
	// 		// console.log(Object.values(rev.classList))
	// 		if (slide.classList.contains('swiper-slide-active') && squared(classList, classListSlide) && ) {
	// 			console.log('hit')
	// 			rev.firstElementChild.classList.add('reviews__slide-card-show')
	// 		}

	// 	})
	// })

	slideSwipe.forEach((slide) => {

			// console.log(typeof classList, classList)
			// console.log(Object.values(rev.classList))
			if (slide.classList.contains('swiper-slide-active')) {
				const classListSlide = [...slide.classList]

				slideRev.forEach((rev) => {
					const classList = [...rev.classList]
					if (squared(classListSlide, classList)) {
						rev.firstElementChild.classList.add('reviews__slide-card-show')
						// console.log('hit')
					}
					
				})
			}

		})


})