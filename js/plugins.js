//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
$(function(){
	$('header a').smoothScroll({
		speed: 200,
		offset: -60
	});

	$('nav a').smoothScroll({
		speed: 200,
		offset: -60
	});
});