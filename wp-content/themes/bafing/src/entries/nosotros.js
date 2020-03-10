import '../scss/nosotros.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('.list_item .header').on('click',function(){
	let $this = $(this);
	$('.list_item').removeClass('active');
	$this.closest('.list_item').addClass('active');
});
$('.list_item').eq(0).find('.header').trigger('click');