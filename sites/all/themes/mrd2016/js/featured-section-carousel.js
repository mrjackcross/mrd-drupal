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
		$('#hero-image').slick({
		  infinite: true,
		  speed: 300,
		  swipeToSlide: false,
      swipe: false,
		  slidesToScroll: 1,
		  arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 4000,
      centerMode: false,
		  slidesToShow: 1
		});

    var heroTextWrapper = $('.hero-image-text-wrapper');
    //heroTextWrapper.css('marginTop', '-' + heroTextWrapper.height()/2 + 'px');


	}

	function resizedw(){
    	if ($(window).width() > 768) {
	        if(!$('#hero-image').hasClass('slick-initialized') ) {
	        	slickInit();
			}
		}
	}

})(jQuery);
