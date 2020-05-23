// Import styles
import './scss/app.scss';
// Import scripts
import TweenMax from "gsap/TweenMax";
import CSSPlugin from "gsap/CSSPlugin";
import TweenLite from "gsap/TweenLite";
//header
	$(window).scroll(function(){
		let mytop = $(window).scrollTop();	
		if (mytop > 20){
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
	});
//another ios
	var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	if (iOS) {
	 	//
	}
//scroll
	$('.anchor a').on('click', function(event){
      	event.preventDefault();
      	let $this = $(this);
      	let href = $this.attr('href');
      	$('html, body').stop().animate({scrollTop: $(href).offset().top - 130}, 800);
 	});
	
//header animation
	let $slider = $('.slider-i');
	let len = $slider.length;
	let t = 1;
	let ciclo = setInterval( function() {
		if (t < len) {
			let num = 90*parseInt(t);
			let cruw = '-'+num+'px';
			$slider.eq(0).css('margin-top',cruw);
			t++;
		} else {
			t=0;			
		}		        
    }, 2000);    	
//forms input
	$('.modalRight').on('click',function(){
		$('body').addClass('modalactive');
	});
	$('.closeModal').on('click',function(){
		$('body').removeClass('modalactive');
	});
	$('.fixModal .back').on('click',function(){
		$('body').removeClass('modalactive');
	});
	

//preload animation
	$('.nav__mobile').on('click',function(){
		$('header').toggleClass('active3');
		$('.nav__menu').toggleClass('active');
	});

//credits
console.log("ღ Bafing ღ \n Dev con Amor por wampy para DigitalCook");