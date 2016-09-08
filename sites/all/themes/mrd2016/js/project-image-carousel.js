// JavaScript Document
(function ($) 
{
	$(document).ready(function(){
	
		slickInit();

	});
	
	$(window).on('resize', function(){
		if ($(window).width() > 768) {
	        if(!$('#project-image-carousel-container').hasClass('slick-initialized') ) {
	        	slickInit();
			}
		}		
	});
	
	function slickInit() {
		$('#project-image-carousel-container').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
          centerMode: true,
          
		  responsive: [
			    {
			      breakpoint: 1200,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
					}
				},
				{
			      breakpoint: 768,
			      settings: "unslick"
				}
			  ]
		});		
	}
	
})(jQuery);