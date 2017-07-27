
$(document).ready(function () {
	setTimeout(function(){
		$('.main-banner .slider-control').addClass('show-title');
	},100);
	setTimeout(function(){
		$('.fade-in.one').animate({opacity: 1}, 1000)
	},600);

	setTimeout(function(){
		$('.fade-in.two').animate({opacity: 1}, 1000)
	},1400);

	setTimeout(function(){
		$('.fade-in.three').animate({opacity: 1}, 1000)
	},2200);

	setTimeout(function(){
		$('.page-wrapper .topLine').addClass('slideDown');
	}, 400);
	setTimeout(function(){
		$('.page-wrapper .topLine').addClass('active');
	}, 800);

	$('.button-menu').click(function(){
		$(this).toggleClass("active");
		$('.inner-menu').toggleClass("active");
		$('.side-content').toggleClass("active");
	});
});
