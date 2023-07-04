//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js
jQuery(document).ready(function ($) {
  $('#burger-nav').click(function(){
      $(this).toggleClass('open');
  });
  $('.header-burger').on ('click', function(e) {
      $('.header-wrapper').toggleClass('is-active');
  });
  $('.colons-slider').slick({
      infinite: false,
      slidesToShow: 4,
      responsive: [
          {
            breakpoint: 1044,
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
              }
            }
        ]
  });
  $('.form-wrapper input').on('focus input', function(e) {
    $(this).parents('.form-wrapper').find('.label').css('display','none')
  })
  $('.form-wrapper input').on('blur', function(e) {
    if(!$(this).val()) {
      $(this).parents('.form-wrapper').find('.label').css('display','block')
    }
  })
  $('.form-wrapper .label').on('click', function(e) {
    $(this).parents('.form-wrapper').find('input').focus();
  })
  $('.form-application .wpcf7').on('wpcf7mailsent', function() {
    $('#confirmation').modal('toggle');
    $(this).find('.form-wrapper .label').css('display','block')
    setTimeout(function() {
      $('#confirmation').modal('toggle');
    }, 2000)
  })
  $('html').bind('mouseleave', function() {
    $('#modal-out').modal('show')
    $('html').unbind('mouseleave');
  })
  $('.section-button .btn').on('click', function() {
    $('#modal-out').modal('hide');
  })

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("scroll").style.display = "block";
    } else {
      document.getElementById("scroll").style.display = "none";
    }
  }
  $('#scroll').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1);
  });
});