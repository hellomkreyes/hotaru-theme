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
// app.fade = 35;
//measure for parallax fade
// app.heroHeight = $('.hero-content').height();
//calculation for parallax fade point
// app.fadePoint = (app.fade / 100) * app.heroHeight - $('header .wrapper').height();

//INIT FUNCTION WITH EVENT TRIGGERS
app.init = function() {
//EVENT LISTENER FOR ALTERNATING NAV ON SCROLL
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > app.headerheight) {
			$('nav').addClass('scroll');
			$('nav').css('padding', '20px 50px');
			$('.footer-button-container').show();
		} else if ($(this).scrollTop() === 0) {
			$('nav').removeClass('scroll');
			$('nav').css('padding', '50px 50px 20px');
			$('.footer-button-container').hide();
		}
		//parallax effect THAT I CANT FIGURE OUT
		// $('.hero-content').css({
  //     		'transform': 'translate(0px, ' + $(this).scrollTop() * 1.5 + 'px)'
  //   	});
		// if ($(this).scrollTop() > app.fadePoint) {
		// 	$('.hero-content').fadeOut();
		// } else if ($(this).scrollTop() < app.fadePoint) {
		// 	$('.hero-content').fadeIn();
		// }
	});
//EVENT LISTENER FOR HAMBURGER NAV & CHANGING BG
	$('.menu-btn').on('click', function(event) {
		event.preventDefault;
		$('.bar').toggleClass('animate');
		$('.mobile-nav-container').slideToggle();
		$('.mobile-nav').toggleClass('mobile-bg');
	});
//GET RID OF INLINE STYLES IN TAG-CLOUD WIDGET
	$('.tagcloud a').attr('style', '');
};

//DOC READY AND INIT FUNCTION
$(function(){
	console.log("It's working");
	console.log("fuuuuuuuck yeah.")
	app.init();
});