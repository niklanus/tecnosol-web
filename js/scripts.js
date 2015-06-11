var viewportWidth = null;
var viewportHeight = null;
var navbarHeight = null;

$(document).ready(function() {
	$(window).on("resize", function(){
		viewportWidth = $(window).width();
		viewportHeight = $(window).height();
		navbarHeight = $('#navbar').height();
	}).resize();

	$('.js-nav-trigger').click(function(){
		$('body').toggleClass('nav-mobile-open');
	});

	$('.js-dropdown').dropit({
		action: 'mouseenter'
	});
});