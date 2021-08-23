import SwiperCore, { Autoplay } from 'swiper/core'

SwiperCore.use([Autoplay])

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