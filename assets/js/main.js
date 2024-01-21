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


// feature swiper
const feature = new Swiper('.feature', {
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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

// author swiper
const author = new Swiper('.author', {
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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

// announcements swiper
const announcements = new Swiper('.announcements', {
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
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
      spaceBetween: 24
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
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 1200px
    1400: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24
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
const journal_editor = new Swiper('.journal_editor', {
  autoplay: false,

  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 10,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: false,
      spaceBetween: 24
    },
    // when window width is >= 992px
    // 992: {
    //   slidesPerView: 3,
    //   centeredSlides: false,
    //   spaceBetween: 24
    // },
    // // when window width is >= 1200px
    // 1400: {
    //   slidesPerView: 4,
    //   centeredSlides: false,
    //   spaceBetween: 24
    // }
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

(function ($) {
  'use strict';

  // swipper hover interaction
  $(".swiper").hover(function () {
    (this).swiper.autoplay.start();
  }, function () {
    (this).swiper.autoplay.stop();
  });


  //   Text Truncate
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
            '&nbsp;&nbsp;<a href="" class="moreless more">Read More <span class="sr-only">read more link button</span></a></span></span></div><div class="truncate-text" style="display:none">' +
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


  // journal_description truncate
  $(document).ready(function () {
    (function () {
      var showChar = 260;
      var ellipsestext = "...";

      $(".journal__description").each(function () {
        var content = $(this).html();
        if (content.length > showChar) {
          var c = content.substr(0, showChar);
          var h = content;
          var html =
            '<div class="journal__description-text" style="display:block">' +
            c +
            '<span class="moreellipses">' +
            ellipsestext +
            '&nbsp;&nbsp;<a href="" class="moreless more">Read More <span class="sr-only">read more link button</span></a></span></span></div><div class="journal__description-text" style="display:none">' +
            h +
            '<a href="" class="moreless less">Read less</a></span></div>';

          $(this).html(html);
        }
      });

      $(".moreless").click(function () {
        var thisEl = $(this);
        var cT = thisEl.closest(".journal__description-text");
        var tX = ".journal__description-text";

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


  // media query with jquery
  if ($(window).width() > 767) {
    $(".nav_tabs .nav").removeClass('dropdown-menu');
    $(".nav_tabs .tab_select").removeClass('tab_select');
  }
  if ($(window).width() < 768) {
    // const activeText = $(".nav_tabs .tab_select .nav-link.active").text();
    // $(".nav_tabs .tab_select .btn").text(activeText);

    $(document).on("click", '.dropdown-menu .nav-item .nav-link', function (e) {
      let activeText = $(this).text();
      $(this).parent().parent().parent().find("button[data-bs-toggle='dropdown']").html(activeText);
    });
  }


})(window.jQuery);
