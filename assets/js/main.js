$('a[href="#"][data-top!=true]').click(function(e){
//prevent # links from moving to top
e.preventDefault();
});
smoothScroll.init({
	offset: 0
});
if($('.popup-link').length > 0){
	$('.popup-link').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});
}
$(document).ready(function() {
	var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight();

	$(window).on('scroll', function () {
		var cur_pos = $(this).scrollTop();

		sections.each(function() {
			var top = $(this).offset().top - nav_height,
			bottom = top + $(this).outerHeight();

			if (cur_pos >= top && cur_pos <= bottom) {
				nav.find('a').removeClass('active');
				sections.removeClass('active');

				$(this).addClass('active');
				nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
			}
		});
	});
});
$(document).ready(function() {
	$( ".menu-toggle" ).click(function() {
		$( ".menu" ).slideToggle( "", function(){});
	});
});
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});
$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(350).css({'overflow':'visible'});
});
var wow = new WOW(
{
	boxClass:     'wow',      // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset:       100,          // distance to the element when triggering the animation (default is 0)
	mobile:       true,       // trigger animations on mobile devices (default is true)
	live:         true,       // act on asynchronously loaded content (default is true)
	callback:     function(box) {
	  // the callback is fired every time an animation is started
	  // the argument that is passed in is the DOM node being animated
	},
	scrollContainer: null // optional scroll container selector, otherwise use window
});
wow.init();

$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 100) {
		$(".navbar-inverse").addClass("navbar-scroll");
	}
	else {
		$(".navbar-inverse").removeClass("navbar-scroll");
	}
});