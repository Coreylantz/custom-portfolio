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

	window.sr = ScrollReveal();
	sr.reveal('article');
	sr.reveal('.gallery', {duration: 500, delay: 500});
});