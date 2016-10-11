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
    $('#project-grid-container').slick({
      rows: 3,
      slidesPerRow: 3,
      speed: 300,
      swipeToSlide: true,
      slidesToScroll: 9,
      arrows: false,
      dots: true,
      infinite: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesPerRow: 2,
            slidesToScroll: 6
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    // var gridItem = $('.project-grid-item-wrapper');
    // var maxHeight = gridItem.height();
    //
    // gridItem.each(function() {
    //
    //   console.log($(this).height());
    //
    //   if($(this).height() > maxHeight) {
    //     maxHeight = $(this).height();
    //     console.log($(this).height());
    //   }
    // });
    //
    // gridItem.height(maxHeight);

  }

  function resizedw(){
    if ($(window).width() > 768) {
      if(!$('#project-grid-container').hasClass('slick-initialized') ) {
        slickInit();
      }
    }
  }

})(jQuery);
