import '../scss/csirt.scss';
$('.accordeon__header').on('click',function(){
	let $this = $(this);
	$this.closest('.accordeon').find('.accordeon__body').removeClass('active');
	$this.closest('.accordeon').find('.accordeon__header').removeClass('active');
	$this.addClass('active');
	$this.closest('.accordeon__item').find('.accordeon__body').addClass('active');
});
$('.accordeon__header').eq(0).trigger('click');	