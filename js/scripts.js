var app = {};
app.headerheight = $('header').height();
app.sectionheight = $('.sticky-top').height();


app.stickyNav = function() {};

app.init = function() {};

$(function(){
	console.log("It's working");
	// $(window).scroll(function() {
	// 	if ($(this).scrollTop() > $('header').height()) {
	// 		$('.main-nav').addClass('main-nav-scrolled');
	// 	} else if ($(this).scrollTop() > $('.sticky-top').height()) {
	// 		$('.main-nav').addClass('main-nav-scrolled');
	// 	} else {
	// 		$('.main-nav').removeClass('main-nav-scrolled');
	// 	}
	// });
});