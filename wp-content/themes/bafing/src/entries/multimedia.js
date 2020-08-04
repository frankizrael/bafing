import '../scss/multimedia.scss';
$('.single header').addClass('active2');

$('ul.list_etiq li').on('click',function(){
	let $this = $(this);
	let data = $this.find('a').attr('data');
	$('ul.list_etiq li a').removeClass('active');
	$this.find('a').addClass('active');
	$('.noticias__item').hide();
	$(data).show();
});

$('#eventoClick').on('click',function(){	
	$('.video-form').addClass('active');
});