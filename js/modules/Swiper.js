import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper/core'
// import "swiper/swiper.min.css"

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

export let SwiperRev = new SwiperCore('#review__swipe', {

	allowTouchMove: false,
	loop: true,
	speed: 500,
	spaceBetween: 20,
	slidesPerView: "auto",
	navigation: {
		nextEl: '#rev-swipe-btn-next',
		prevEl: '#rev-swipe-btn-prev'
	},

})


function compareClasses(arr1, arr2) {

	let result = false
	const intersection = arr1.filter(element => {
		// return arr2.includes(element)
		if (arr2.includes(element)) {
			result = true
		}
	})
	return result
}



let slideRev = document.querySelectorAll('.review__slider-card')
let slideSwipe = document.querySelectorAll('.review-wrapper .swiper-slide')



SwiperRev.on('slideChangeTransitionEnd', () => {

	slideRev.forEach((rev) => {
		rev.firstElementChild.classList.remove('review__slider-card-show')
	}) 

	slideSwipe.forEach((slide) => {

		if (slide.classList.contains('swiper-slide-active')) {
			const classListSlide = [...slide.classList]

			slideRev.forEach((rev) => {
				const classList = [...rev.classList]
				if (compareClasses(classListSlide, classList)) {
					rev.firstElementChild.classList.add('review__slider-card-show')
				}

			})
		}

	})

})