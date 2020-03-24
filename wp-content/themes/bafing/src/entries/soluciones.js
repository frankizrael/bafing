import '../scss/soluciones.scss';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('.fixedMenu a').eq(0).addClass('active');

$('.fixedMenu a').on('click',function(){
	let $this = $(this);
    let href = $this.attr('href');
    $('html, body').stop().animate({scrollTop: $(href).offset().top - 150}, 800);
});

//scroll by wampy
let controller = new ScrollMagic.Controller();
let scene_1 = new ScrollMagic.Scene({
triggerElement: "#acerca"
})
.setClassToggle('.fixedMenu', 'action')
.addTo(controller);

let scene_2 = new ScrollMagic.Scene({
triggerElement: "#servicios"
})
.setClassToggle('.fixedMenu', 'link_2')
.addTo(controller);

let scene_3 = new ScrollMagic.Scene({
triggerElement: "#experiencia"
})
.setClassToggle('.fixedMenu', 'link_3')
.addTo(controller);

let scene_4 = new ScrollMagic.Scene({
triggerElement: "#clientes"
})
.setClassToggle('.fixedMenu', 'link_4')
.addTo(controller);

let scene_partners = new ScrollMagic.Scene({
triggerElement: "#partners"
})
.setClassToggle('.fixedMenu', 'link_5')
.addTo(controller);


let scene_5 = new ScrollMagic.Scene({
triggerElement: "#noticias"
})
.setClassToggle('.fixedMenu', 'link_6')
.addTo(controller);