// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
		$('#project-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  
		  slidesToScroll: 1,
		  arrows: true,
		  		  
          centerMode: true,
		  slidesToShow: 3,
		  initialSlide: 1,
		  
          
		  responsive: [
		  	{
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
		
	});
	
})(jQuery);