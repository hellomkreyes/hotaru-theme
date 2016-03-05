//GLOBAL OBJECT FOR SHITS AND GIGGLES
var app = {};

//VARIABLES FOR THE STICKY NAV
app.navheight = $('nav').height(); 
//stores height of nav
console.log(app.navheight);
app.headerheight = $('header').height();
console.log(app.headerheight);
//stores height of header hero image section
app.sectionheight = $('.sticky-top').height(); 
console.log(app.sectionheight);
//stores height of hero image section in about, contact & entry pages

//THIS IS THE EVENT TRIGGER ON SCROLL
app.init = function() {
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > app.headerheight) {
			$('nav').addClass('scroll');
			$('nav').css('padding', '20px 50px');
		// } else if ($(this).scrollTop() > app.sectionheight) {
		// 	$('nav').addClass('scroll');
		// 	$('nav').css('padding', '20px');
		} else if ($(this).scrollTop() === 0) {
			$('nav').removeClass('scroll');
			$('nav').css('padding', '50px 50px 20px');
		}
	});
};

//DOC READY AND INIT FUNCTION
$(function(){
	console.log("It's working");
	console.log("fuuuuuuuck yeah.")
	app.init();
});