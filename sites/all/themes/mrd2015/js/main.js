// JavaScript Document
(function ($) 
{
	
	//Window resize timeout function 
	var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
	    clearTimeout (timer);
	    timer = setTimeout(callback, ms);
	  };
	})();
	
	
	function initGoogleMap() {
		//remove width and height attributes from google map iFrame
		var map = $('#google-map');
		map.removeAttr('width').removeAttr('height');		
	}
	
	function resizeGoogleMap() {
		//set map height to (map width / 1.5)
		var map = $('#google-map');
		map.height( map.width()/1.75 );		
	}

	function resizeTestimonialBanner() {
	
		//set testimonial height to featured project banner height
		var featuredProjectBanner = $('#featured-project-banner img');
		var testimonialBanner = $('#testimonial-image');
		var testimonialText = $('.testimonial-text-wrapper'),
			cw = testimonialText.width(),
			ch = testimonialText.height(),
			hh = (ch/2)+20;
			
		testimonialText.css({'top' : '50%' , 'margin-top' : '-' + hh + 'px' });
		
		featuredProjectBanner.one("load", function() {
			testimonialBanner.height( featuredProjectBanner.height() );
		}).each(function() {
			if(this.complete) $(this).load();
		});	
			
	}
		
	function scrollorama() {
		var scrollorama = $.scrollorama({ blocks:'.scrollblock', enablePin:false });
		
		scrollorama.onBlockChange(function() {
		    var scrollPos = $(document).scrollTop();	
		    window.location.hash = scrollorama.settings.blocks.eq( scrollorama.blockIndex ).attr('id');
		    $(document).scrollTop(scrollPos);
		});
	}
	
	$(document).ready(function(){

		initGoogleMap();
		resizeGoogleMap();
		resizeTestimonialBanner();
		scrollorama();
		
		$("#sliding-popup").addClass("drop-shadow");
		$(".popup-content").addClass("container");
		
		$(".contextual-links-trigger").click(function() {
			
			history.pushState("", document.title, window.location.pathname);
						
		});
		
		console.log("appending...");
		$(".slick-prev, .slick-next").appendTo($("#carousel-controls-wrapper"));

			
		
    });
    
    //Close menu on click
    $(document).on('click','.navbar-collapse.in',function(e) {
	    if( $(e.target).is('a') ) {
	        $(this).collapse('hide');
	    }
	});
    
    
    $(window).resize(function() {
	    delay(function(){
	    	resizeGoogleMap();
			resizeTestimonialBanner();
	    }, 100);
	});

      
})(jQuery);