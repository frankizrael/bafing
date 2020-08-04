import '../scss/home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

let pos = 0;
$(window).scroll(function(){
	let mytop = $(window).scrollTop();	
	if (mytop > 20){
		if (pos == 0) {
			$('html, body').stop().animate({scrollTop: $('#soluciones').offset().top - 130}, 800);
			pos = 1;
		}		
	} else {
		//
	}
});


var mySwiperInit = new Swiper('#testimonios_slider .swiper-container', {
    speed: 400,
    pagination: {
        el: '#testimonios_slider .swiper-pagination',
        clickable: true
    },
    loop: true,
    autoplay: {
        delay: 4500
    },
    slidesPerView: 'auto'
});

//autoload

var mySwiperInit = new Swiper('.init .swiper-container', {
    speed: 400,
    pagination: {
        el: '.init .swiper-pagination',
        clickable: true
    },
    loop: true,
    autoplay: {
        delay: 4500
    },
    slidesPerView: 1
});


var mySwiperInit = new Swiper('.clientes .swiper-container', {
    speed: 400,
    pagination: {
        el: '.init .swiper-pagination',
        clickable: true
    },
    loop: true,
    autoplay: {
        delay: 4500
    },
    slidesPerView: 5,
    breakpoints: {
        1600: {
            slidesPerView: 5
        },
        800: {
            slidesPerView: 3
        },
        0: {
            slidesPerView: 1
        }
    }
});

