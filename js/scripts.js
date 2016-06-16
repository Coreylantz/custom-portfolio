// Start
var portfolio = {};

portfolio.anchorIds = [];


   // On the scroll of a section, make the matching Nav a id have a blue background

   // find the a tag's that are children of the nav 
portfolio.findAnchors = function(){
   var anchor = $('nav li').children();
   for (var i = 0; i < anchor.length; i++) {
   		var anchorId = anchor[i];
   		var anchorPoint = $(anchorId).attr('href');
   		portfolio.anchorIds.push(anchorPoint);
   };
};

portfolio.windowScroll = function(){
   $(window).scroll(function(){
		// Get the distance of the window from the top of the page adjusted for nav height
		var windowPosition = $(window).scrollTop() + 60;
		// Get the height of the screen adjusted for nav height
		var windowHeight = $(window).height() + 60;
      // Get the height of the total document
		var docHeight = $(document).height();


      // 
		for (var i = 0; i < portfolio.anchorIds.length; i++) {
			var sectionId = portfolio.anchorIds[i];
			var sectionPosition = $(sectionId).offset().top;
			var sectionHeight = $(sectionId).height();
				// console.log(sectionHeight);
			if (windowPosition >= sectionPosition && windowPosition < (sectionPosition + sectionHeight)) {
				// console.log('this is working!');
				$("nav a[href='" + sectionId + "']").addClass('sectionActive');
			}
			else {
				$("nav a[href='" + sectionId + "']").removeClass('sectionActive');
			}
		}

		if (windowPosition + windowHeight === docHeight){
			if (!$('nav li:last-child a').hasClass('sectionActive')) {
				var anchorActiveCurrent = $('sectionActive').attr('href');
				$("a[href='" + anchorActiveCurrent + "']").removeClass('sectionActive');
				$('nav li:last-child a').addClass('sectionActive');
			}
		}
	});
};




   // Hamburger Nav
portfolio.hamburgerNav = function(){
   $('.hamburger').on('click', function(){
      $(this).toggleClass('active');
      $('.menu').toggleClass('show');
      if ($('.menu').css('background') != null) {
         $('.menu').css('background', 'rgba(51, 51, 51, 0.8)');
      }
      else {
         $('.menu').css('background', 'none');
      }
   });
};


      // rotate logo function
portfolio.rotateLogo = function() {
   setInterval(function() {
      if ($('#logo').attr('class') === 'logo' ) {
         $("#logo").attr('class', 'logo rotate');
      }
      else {
         $("#logo").attr('class', 'logo');
      }
   }, 5000);
};

// INIT and DOCUMENT READY BELOW
portfolio.init = function() {
   // Keep this clean, only call functions in here
   portfolio.rotateLogo();
   portfolio.findAnchors();
   portfolio.windowScroll();
   portfolio.hamburgerNav();
};

$(document).ready(function() {
   portfolio.init();
});