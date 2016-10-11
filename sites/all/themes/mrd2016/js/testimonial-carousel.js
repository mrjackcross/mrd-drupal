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
		$('#testimonials-container').slick({
		  infinite: true,
		  speed: 300,
		  swipeToSlide: true,
		  slidesToScroll: 1,
      prevArrow: $('#testimonial-prev'),
      nextArrow: $('#testimonial-next'),
      dots: true,
      autoplay: true,
      autoplaySpeed: 4000,

      centerMode: false,
		  slidesToShow: 1,

		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
            arrows: false
		      }
		    }
		  ]
		});
	}

	function resizedw(){
    	if ($(window).width() > 768) {
	        if(!$('#testimonials-container').hasClass('slick-initialized') ) {
	        	slickInit();
			}
		}
	}

})(jQuery);
