// Start
var portfolio = {};

portfolio.anchorIds = [];



// On the scroll of a section, make the matching Nav a id have a blue background
portfolio.findAnchors = function(){
   // find the a tag's that are children of the nav 
   var anchor = $('nav li').children();
   for (var i = 0; i < anchor.length; i++) {
   		var anchorId = anchor[i];
   		var anchorPoint = $(anchorId).attr('href');
         // An push the ids of the anchor tags into portfolio.anchorIds array
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


		for (var i = 0; i < portfolio.anchorIds.length; i++) {
			var sectionId = portfolio.anchorIds[i];
         // use the anchorID to find the section with the corrisponding ID and find
         // its distance from the top
			var sectionPosition = $(sectionId).offset().top;
         // find the height of the section
			var sectionHeight = $(sectionId).height();
			// if the top of the window falls between the top of a section and the height of the section add the class of sectionActive to the anchor with the href matching sectionID
			if (windowPosition >= sectionPosition && windowPosition < (sectionPosition + sectionHeight)) {
				
				$("nav a[href='" + sectionId + "']").addClass('sectionActive');
			}
			else {
				$("nav a[href='" + sectionId + "']").removeClass('sectionActive');
			}
		}

      // A bug fix if the window is the size of the document
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
   // every 5s change the class of the svg / use attr because svg can't use add/toggleClass
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
   // only call functions in here
   portfolio.rotateLogo();
   portfolio.findAnchors();
   portfolio.windowScroll();
   portfolio.hamburgerNav();
};

$(document).ready(function() {
   portfolio.init();
});