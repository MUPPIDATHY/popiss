
$(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
            enabled:true
        },

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});
 // $("#x").click(function () {
 //        $(".showw").fadeOut();
 //    });
    $('.hero__categories__all').on('click', function(){
        $('.hero__categories ul').slideToggle(400);
    });


});
(function ($) {
    'use strict';
    $('.single-slide').owlCarousel({
    
            autoplay: true,
            loop: true,
            items:1,
            margin: 0,
            stagePadding: 0,
            nav: true,
            dots: true,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 1
                },
                1000:{
                    items: 1
                }
            }
        });
    $('.single-slider').owlCarousel({
            animateOut: 'fadeOut',
        animateIn: 'fadeIn',
            autoplay: true,
            loop: true,
            items:1,
            margin: 0,
            stagePadding: 0,
            nav: true,
            dots: true,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 1
                },
                1000:{
                    items: 1
                }
            }
        });

    if ($.fn.owlCarousel) {
        // Hero Slider Active Code
        $(".features-slides").owlCarousel({
            
            autoplay: true,
            loop: true,
            items:1,
            margin: 0,
            stagePadding: 0,
            nav: true,
            dots: true,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 5
                }
            }
        });
    }

    // Search Active Code
    $('#search-btn, #closeBtn').on('click', function () {
        $('body').toggleClass('search-form-on');
    });
    
    // matchHeight Active Code
    if ($.fn.matchHeight) {
        $('.equal-height').matchHeight();
    }
    
    // ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="pe-7s-angle-up" aria-hidden="true"></i>'
        });
    }

    // onePageNav Active Code
    if ($.fn.onePageNav) {
        $('#listingNav').onePageNav({
            currentClass: 'active',
            scrollSpeed: 2000,
            easing: 'easeOutQuad'
        });
    }

    // PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // wow Active Code
    if ($.fn.init) {
        new WOW().init();
    }

    var $window = $(window);

    // Sticky Active JS
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('body').addClass('sticky');
        } else {
            $('body').removeClass('sticky');
        }
    });

    // Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

   

})(jQuery);
