// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
		$('#project-image-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  
		  slidesToScroll: 1,
		  arrows: true,
		  		  
          centerMode: true,
		  //slidesToShow: 1,
		  variableWidth: true,
          
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: "unslick" 
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
		
	});
	
})(jQuery);