 /* Theme Name: Floaks
   Author: Themesdesign
   Version: 1.0.0
   File Description: Main JS file of the template
*/
 
 // STICKY
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".sticky").addClass("nav-sticky");
    } else {
        $(".sticky").removeClass("nav-sticky");
    }
});

// SmoothLink
$('.navbar-nav a').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 0
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});


// scrollspy
$(".navbar-nav").scrollspy({
    offset:20
});

// Announcement
function blinktext() {
    var f = document.getElementById('announcement');
    setInterval(function() {
        f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
    }, 400);
}

// Swiper
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1.6,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    breakpoints: {
        576: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        1500: {
          slidesPerView: 1,
          spaceBetween: 50,
        },
      }
});

    // Portfolio filter
    $(window).on('load', function() {
      var $container = $('.portfolioContainer');
      var $filter = $('#filter');
      $container.isotope({
          filter: '*',
          layoutMode: 'masonry',
          animationOptions: {
              duration: 750,
              easing: 'linear'
          }
      });
      $filter.find('a').click(function() {
          var selector = $(this).attr('data-filter');
          $filter.find('a').removeClass('active');
          $(this).addClass('active');
          $container.isotope({
              filter: selector,
              animationOptions: {
                  animationDuration: 750,
                  easing: 'linear',
                  queue: false,
              }
          });
          return false;
      });
  });

   // video
   $('.video-play-icon, .video-play-icon-trigger').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });

  // Magnific Popup
  $('.mfp-image').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-fade',
      gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1]
      }
  });

// pricerange
    $("#pricerange1").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });

    $("#pricerange2").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 500,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });

    $("#pricerange3").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 700,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });
    $("#pricerange4").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });

    $("#pricerange5").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 500,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });

    $("#pricerange6").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 1000,
        from: 700,
        to: 800,
        hide_from_to: false,
        prefix: "$"
    });

    // video
$(".player").mb_YTPlayer();

// typed
$(".element").each(function(){
    var $this = $(this);
    $this.typed({
        strings: $this.attr('data-elements').split(','),
        typeSpeed: 100, // typing speed
        backDelay: 3000 // pause before backspacing
    });
});


$('.main-slider').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    controlNav: true,
    autoplay: true,
    animation: "fade"
});

$("input[name='subject']").click(function(){
    if ($('#cntt-attt').is(':checked')) {
        $('#main-question').html("<div class=\"form-group\"><label class=\"heading-form\" for=\"main-question1\">B???n ???? t??m hi???u ng??n ng??? l???p tr??nh ch??a?</label><input type=\"text\" class=\"form-control\" name=\"main-question1\" id=\"main-question1\"></div>");
    }else if($('#cndpt').is(':checked')){
        $('#main-question').html("<div class=\"form-group\"><label class=\"heading-form\" for=\"main-question1\">B???n ???? t???ng h???c l???p tr??nh ch??a?</label><input type=\"text\" class=\"form-control\" name=\"main-question1\" id=\"main-question1\"></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question2\">Ng??nh CN??PT hi???n c?? 2 chuy??n ng??nh l?? Ph??t tri???n ???ng d???ng ??a ph????ng ti???n v?? Thi???t k??? ??a ph????ng ti???n th?? b???n ???? ?????nh h?????ng ???????c g?? theo chuy??n ng??nh n??o ch??a?</label><input type=\"text\" class=\"form-control\" name=\"main-question2\" id=\"main-question2\"></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question3\">B???n c?? k??? n??ng v??? thi???t k???, edit video, ??? kh??ng? N???u c?? h??y d??n ???????ng link s???n ph???m v??o ????y.</label><input type=\"text\" class=\"form-control\" name=\"main-question3\" id=\"main-question3\"></div>");
    }else if($('#ttdpt').is(':checked')){
        $('#main-question').html("<div class=\"form-group\"><label class=\"heading-form\" for=\"main-question1\">B???n bi???t t???i CLB qua ????u?</label><textarea class=\"form-control\" name=\"main-question1\" id=\"main-question1\" cols=\"30\" rows=\"5\"></textarea></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question2\">B???n ???? t???ng tham gia c??c ho???t ?????ng, t??? ch???c n??o ch??a?</label><textarea class=\"form-control\" name=\"main-question2\" id=\"main-question2\" cols=\"30\" rows=\"5\"></textarea></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question3\">B???n c?? s??? th??ch s??ng t???o n???i dung, vi???t l??ch hay thi???t k??? kh??ng? (s???n ph???m n???u c??)</label><textarea class=\"form-control\" name=\"main-question3\" id=\"main-question3\" cols=\"30\" rows=\"5\"></textarea></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question4\">Mong mu???n c???a b???n khi tham gia CLB?</label><textarea class=\"form-control\" name=\"main-question4\" id=\"main-question4\" cols=\"30\" rows=\"5\"></textarea></div><div class=\"form-group\"><label class=\"heading-form\" for=\"main-question5\">N???u tr??? th??nh th??nh vi??n c???a CLB, b???n s??? s???p x???p th???i gian h???c ????? tham gia ?????y ????? v???i CLB ch????</label><input type=\"text\" class=\"form-control\" name=\"main-question5\" id=\"main-question5\"></div>");
    }else{
        $('#main-question').html('')
    }
});