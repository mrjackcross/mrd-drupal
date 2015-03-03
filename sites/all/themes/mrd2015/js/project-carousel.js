// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
	
		slickInit();


		//Window resize timeout function 
		var doit;
		window.onresize = function(){
		  clearTimeout(doit);
		  doit = setTimeout(resizedw, 100);
		};
			
	});
	
	function slickInit() {
		$('#project-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  
		  slidesToScroll: 1,
		  arrows: true,
		  		  
          centerMode: true,
		  slidesToShow: 4,
		  initialSlide: 1,
		  
          
		  responsive: [
		  	{
		      breakpoint: 1800,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		  	{
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
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
	}
	
	function resizedw(){
    	if ($(window).width() > 768) {
	        if(!$('#project-carousel-container').hasClass('slick-initialized') ) {
	        	slickInit();
			}
		}
	}
	
})(jQuery);