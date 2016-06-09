$(function(){


	// On the scroll of a section, make the matching Nav id have a blue background
   var anchor = $('nav li').children();
   var anchorIds = [];
   for (var i = 0; i < anchor.length; i++) {
   		var anchorId = anchor[i];
   		var anchorPoint = $(anchorId).attr('href');
   		anchorIds.push(anchorPoint);
   }
   		// console.log(anchorIds);


   	$(window).scroll(function(){
   		// Get the distance of the window from the top of the page
   		var windowPosition = $(window).scrollTop() + 60;
   		// Get the height of the screen
   		var windowHeight = $(window).height() + 60;
   		var docHeight = $(document).height();



   		for (var i = 0; i < anchorIds.length; i++) {
   			var sectionId = anchorIds[i];
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

});