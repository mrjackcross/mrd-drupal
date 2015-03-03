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
		
		$('#brochure-wrapper').slick({
		  
		  infinite: false,
		  speed: 300,
		  centerMode: false,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  arrows: true,
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
	
	function resizedw(){
    	if ($(window).width() > 768) {
	        if(!$('#brochure-wrapper').hasClass('slick-initialized') ) {
	        	slickInit();
			}
		}
	}
	
})(jQuery);