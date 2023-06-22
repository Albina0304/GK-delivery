//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js


jQuery(document).ready(function ($) {
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
    });
    $('.header-burger').on ('click', function(e) {
        $('.header-wrapper').toggleClass('is-active');
    });
    $('.labor-colons-slider').slick({
        slidesToShow: 4,
        // prevArrow: '<span class="icon-angle-left"></span>',
        // nextArrow: '<span class="icon-angle-right"></span>',
        responsive: [
            {
              breakpoint: 980,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 782,
              settings: {
                slidesToShow: 2,
              }
            },
            {
                breakpoint: 540,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: false,
                }
              }
          ]
      });
});