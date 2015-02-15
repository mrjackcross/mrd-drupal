// JavaScript Document
(function ($) 
{
	
	//Window resize timeout function 
	var doit;
	window.onresize = function(){
	  clearTimeout(doit);
	  doit = setTimeout(resizedw, 100);
	};
	
	
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
	
	function addDropShadows() {
	
		var dropShadowDiv = '<div class="banner-image-drop-shadow drop-shadow"></div>'
		var featuredProjectBanner = $('#featured-project-banner img');
		var projectCarousel = $('#project-carousel-container .project-carousel-item-wrapper:last-of-type img');
		var testimonialImage = $('#testimonial-image');
		
		featuredProjectBanner.one("load", function() {

			$('body').append( $(dropShadowDiv).css( {
				'top' : featuredProjectBanner.offset().top - 20, 
				'left' : featuredProjectBanner.offset().left, 
				'width' :  featuredProjectBanner.width(), 
				'height' : featuredProjectBanner.height()
			}));
			
		}).each(function() {
			if(this.complete) $(this).load();
		});
		
		projectCarousel.one("load", function() {

			$('body').append( $(dropShadowDiv).css( {
				'top' : projectCarousel.offset().top - 20, 
				'left' : $('#project-carousel-container').offset().left, 
				'width' :  $('#project-carousel-container').width(), 
				'height' : projectCarousel.height()
			}));
			
		}).each(function() {
			if(this.complete) $(this).load();
		});	
		
		 featuredProjectBanner.one("load", function() {

			$('body').append( $(dropShadowDiv).css( {
				'top' : testimonialImage.offset().top - 20, 
				'left' : testimonialImage.offset().left, 
				'width' :  testimonialImage.width(), 
				'height' : testimonialImage.height()
			}));
			
		}).each(function() {
			if(this.complete) $(this).load();
		});	
					
	}	
	
	
	$(document).ready(function(){

		initGoogleMap();
		resizeGoogleMap();
		resizeTestimonialBanner();
		//addDropShadows();
		
		$('#project-carousel-container').height( $('#project-carousel-container img').height() );
		
    });
    
    function resizedw(){
    
    	resizeGoogleMap();
    	resizeTestimonialBanner();
    	
    	$('#project-carousel-container').height( $('#project-carousel-container img').height() );
    	
    	
	}
      
})(jQuery);