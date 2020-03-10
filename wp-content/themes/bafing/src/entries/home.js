import '../scss/home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

var mySwiperInit = new Swiper('#testimonios_slider .swiper-container', {
    speed: 400,
    pagination: {
        el: '#testimonios_slider .swiper-pagination',
        clickable: true
    },
    loop: true,
    autoplay: 2500,
    slidesPerView: 'auto'
});