(function ($) {
    'use strict';

    //=== Sticky
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 15) {
            $('.navbar').removeClass('sticky');
        } else {
            $('.navbar').addClass('sticky');
        }
    });

    //=== Back to top
    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200);
        } else {
            $('.back-to-top').fadeOut(200);
        }
    });
    $('.back-to-top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate(
            {
                scrollTop: 0,
            },
            150,
        );
    });

    //======= Aos Animate js
    AOS.init({
        // easing: 'linear',
        duration: 1200
    });
})(window.jQuery);

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.arrow-next',
        prevEl: '.arrow-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});