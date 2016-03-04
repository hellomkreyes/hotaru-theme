$(function(){
	console.log("It's working");
	$(window).scroll(function() {
		if ($(this).scrollTop() > $('header').height()) {
			$('.main-nav').addClass('main-nav-scrolled');
		} else if ($(this).scrollTop() > $('.sticky-top').height()) {
			$('.main-nav').addClass('main-nav-scrolled');
		} else {
			$('.main-nav').removeClass('main-nav-scrolled');
		}
	});
});