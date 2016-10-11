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
    $('#project-detail-grid-container').slick({
      rows: 100,
      slidesPerRow: 3,
      speed: 300,
      swipeToSlide: false,
      slidesToScroll: 9,
      arrows: false,
      dots: false,
      infinite: false
    });


  }

  function resizedw(){
    if ($(window).width() > 768) {
      if(!$('#project-detail-grid-container').hasClass('slick-initialized') ) {
        slickInit();
      }
    }
  }

})(jQuery);
