import '../scss/soluciones_principal.scss';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('header').addClass('active2');
$('.accordeon__header').on('click',function(){
	let $this = $(this);
	$('.accordeon__body').removeClass('active');
	$('.accordeon__header').removeClass('active');
	$this.addClass('active');
	$this.closest('.accordeon__item').find('.accordeon__body').addClass('active');
});
$('.accordeon__header').eq(0).trigger('click');

$('.NavChild__item a').on('click', function(event){
	event.preventDefault();
	let $this = $(this);
	let href = $this.attr('href');
	$('html, body').stop().animate({scrollTop: $(href).offset().top - 73}, 800);
});