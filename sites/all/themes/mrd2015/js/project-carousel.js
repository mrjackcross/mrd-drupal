// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
		$('#project-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  arrows: false,
		  accessibility: false,
          centerPadding: '1px',
          
		  responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		      breakpoint: 768,
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