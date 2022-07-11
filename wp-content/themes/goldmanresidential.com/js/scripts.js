(function () {
  var app = {
    initAos: function () {
      setTimeout(function () {
        AOS.init();
      }, 1000);
    },

    initNavigation: function () {
      var $nav = jQuery("#nav, #nav2");
      if ($nav.length > 0) $nav.navTabDoubleTap();
    },

    initDetectScroll: function () {
      if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
        jQuery("header.header").addClass("show-fixed");
      } else {
        jQuery("header.header").removeClass("show-fixed");
      }
    },

    initBurgerMenu: function () {
      jQuery(".burger-menu").on("click", function (e) {
        e.preventDefault();
        if (jQuery(this).hasClass("is-open")) {
          jQuery(this).removeClass("is-active");
          jQuery(".bm-view").removeClass("is-open");
          jQuery("body").removeClass("is-open");
        } else {
          jQuery(this).addClass("is-active");
          jQuery(".bm-view").addClass("is-open");
          jQuery("body").addClass("is-open");
        }
      });
      jQuery(".bm-drop, .bm-close").on("click", function (e) {
        e.preventDefault();
        jQuery(".bm-view").removeClass("is-open");
        jQuery(".bm-btn").removeClass("is-active");
        jQuery("body").removeClass("is-open");
      });
    },

    initSlideshow: function () {
      //code here
    },

    initListings: function () {
      //code here

      var sectionSlick = ".listings-slick";
      $(sectionSlick).slick({
        slidesToShow: 3,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-listings img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initQuickSearch: function () {
      //code here
    },

    initProperties: function () {
      //code here

      var sectionSlick = ".properties-slick";
      var asNavsectionSlick = ".properties-slick-body";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        asNavFor: asNavsectionSlick,
      });
      $(asNavsectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        arrows: false,
        asNavFor: sectionSlick,
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-properties img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initNeighborhoods: function () {
      //code here
    },

    initWelcome: function () {
      //code here
    },

    initWork: function () {
      //code here

      var performanceEl = $(".hp-work");
      var speed = 0;
      performanceEl.elementPeek({
        onViewportIn: function (object) {
          if (!performanceEl.hasClass("done-calculation")) {
            object.addClass("done-calculation");
            performanceEl.find(".count").each(function (index, value) {
              speed = 1000;
              var _this = $(this),
                value = _this.text();
              _this.animateNumber({ number: value }, speed);
            });
          }
        },
        peekAmountToTrigger: 0.1,
      });
    },

    initTestimonials: function () {
      //code here

      var sectionSlick = ".testimonials-slick";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: $(".testi-arrow .prev"),
        nextArrow: $(".testi-arrow .next"),
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-testimonials img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initContact: function () {
      //code here
    },

    initSocial: function () {
      //code here
    },
  };

  jQuery(document).ready(function () {
    app.initAos();
    app.initNavigation();

    app.initBurgerMenu();

    app.initSlideshow();

    app.initListings();

    app.initQuickSearch();

    app.initProperties();

    app.initNeighborhoods();

    app.initWelcome();

    app.initWork();

    app.initTestimonials();

    app.initContact();

    app.initSocial();
  });

  jQuery(window).on("scroll", function () {
    app.initDetectScroll();
  });

  jQuery(window).on("load", function () {});

  jQuery(window).on("resize", function () {});
})();
