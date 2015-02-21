// JavaScript Document
(function ($)  {
	
	var doit;
	var navCollapsed = false;
	
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {		
		
		if ($(window).width() > 768) {	
		
			if ( $(window).scrollTop() <= 70) {    
		        $(".navbar").removeClass("navbar-fixed-top top-nav-collapse drop-shadow");
		        $(".main-container").css("paddingTop", "0px");
		        navCollapsed = false;
		    }
			
			clearTimeout(doit);
			doit = setTimeout(scrollStopped, 100);	  
		
		}  

	});
	
	function scrollStopped() {
		
	    if ($(window).scrollTop() > 70) {
	        $(".navbar").addClass("navbar-fixed-top top-nav-collapse drop-shadow");
	        $(".main-container").css("paddingTop", "108px");
	        
	        if (navCollapsed == false) {
		    	$(".navbar").css({top: -40});  
		    	$(".navbar").animate({top: 0}, 300);	
				navCollapsed = true; 
	        }
	        
	        
	    } else {

	    }
		
	}
	
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
	    $('a.page-scroll').bind('click', function(event) {
	        var $anchor = $(this);
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top - 30
	        }, 300, 'swing');
	        event.preventDefault();
	    });
	});
	
})(jQuery);