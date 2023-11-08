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
    duration: 1200
  });

})(window.jQuery);


// announcements swiper
const announcements = new Swiper('.announcements', {
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 15
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 25
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 40
    }
  },


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    slidesPerView: 'auto',
    initialSlide: 1,
    resistanceRatio: 0,
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// global_editor_home swiper
const global_editor_home = new Swiper('.global_editor_home', {
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 15
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 25
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 40
    }
  },


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    slidesPerView: 'auto',
    initialSlide: 1,
    resistanceRatio: 0,
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// global_editor swiper
const global_editor = new Swiper('.global_editor', {
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 15
    },
    // when window width is >= 992px
    // 992: {
    // slidesPerView: 3,
    // centeredSlides: false,
    // spaceBetween: 30
    // },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 25
    }
  },


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    slidesPerView: 'auto',
    initialSlide: 1,
    resistanceRatio: 0,
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// published_issue swiper
const published_issue = new Swiper('.published_issue', {
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 15
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 25
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 40
    }
  },


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    slidesPerView: 'auto',
    initialSlide: 1,
    resistanceRatio: 0,
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
// published_issue swiper
const innspub_journal = new Swiper('.innspub_journal', {
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 15
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 25
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 40
    }
  },


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    slidesPerView: 'auto',
    initialSlide: 1,
    resistanceRatio: 0,
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

//   Text Truncate
// requires jquery
$(document).ready(function () {
  (function () {
    var showChar = 780;
    var ellipsestext = "...";

    $(".truncate").each(function () {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<span class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="" class="moreless more">Read more</a></span></span></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="" class="moreless less">Read less</a></span></div>';

        $(this).html(html);
      }
    });

    $(".moreless").click(function () {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
    /* end iffe */
  })();

  /* end ready */
});
