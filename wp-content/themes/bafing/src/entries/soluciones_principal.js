import '../scss/soluciones_principal.scss';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('header').addClass('active2');
$('.accordeon__header').on('click',function(){
	let $this = $(this);
	$this.closest('.accordeon').find('.accordeon__body').removeClass('active');
	$this.closest('.accordeon').find('.accordeon__header').removeClass('active');
	$this.addClass('active');
	$this.closest('.accordeon__item').find('.accordeon__body').addClass('active');
});
for (let a=0;a<$('.accordeon').length;a++){
	$('.accordeon').eq(a).find('.accordeon__header').eq(0).trigger('click');	
}


$('.NavChild__item a').on('click', function(event){
	event.preventDefault();
	let $this = $(this);
	let href = $this.attr('href');
	$('html, body').stop().animate({scrollTop: $(href).offset().top}, 800);
});

$('.ff_template__item a').on('click', function(event){
	event.preventDefault();
	let $this = $(this);
	let href = $this.attr('href');
	$('html, body').stop().animate({scrollTop: $(href).offset().top}, 800);
});

//
let controller = new ScrollMagic.Controller();
let scene_1 = new ScrollMagic.Scene({
triggerElement: "#sec_228"
})
.setClassToggle('.NavChild', 'animation_1')
.addTo(controller);

let scene_2 = new ScrollMagic.Scene({
triggerElement: "#sec_212"
})
.setClassToggle('.NavChild', 'animation_2')
.addTo(controller);

let scene_3 = new ScrollMagic.Scene({
triggerElement: "#sec_230"
})
.setClassToggle('.NavChild', 'animation_3')
.addTo(controller);

let scene_4 = new ScrollMagic.Scene({
triggerElement: "#sec_116"
})
.setClassToggle('.NavChild', 'animation_4')
.addTo(controller);

let scene_5 = new ScrollMagic.Scene({
triggerElement: "#sec_233"
})
.setClassToggle('.NavChild', 'animation_5')
.addTo(controller);
