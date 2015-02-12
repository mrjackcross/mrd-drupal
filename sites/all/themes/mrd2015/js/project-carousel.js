// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
		$('#project-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  
		  slidesToScroll: 1,
		  arrows: false,
		  accessibility: false,
		  
          centerMode: true,
		  centerPadding: '60px',
		  slidesToShow: 2,
          
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

	});

})(jQuery);