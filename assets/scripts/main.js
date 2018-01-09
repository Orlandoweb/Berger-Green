/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {
  var winXS = false, winSM = false, winMD = false, winLG = false;

  function sage_initWindows() {
    // window size
    if ($(window).width() <= 767) {
      winXS = true;
    } else if ($(window).width() >= 768 && $(window).width() <= 991) {
      winSM = true;
    } else if ($(window).width() >= 992 && $(window).width() <= 1199) {
      winMD = true;
    } else if ($(window).width() >= 1200) {
      winLG = true;
    }
  }

  function sage_stickyheader() {
    $(window).scroll(function () {
      if ( $(this).scrollTop() > 200 && !$('header').hasClass('sticky') ) {
        $('header').addClass('sticky');
      } else if ( $(this).scrollTop() <= 200 ) {
        $('header').removeClass('sticky');
      }
    });
  }

  function sage_navbartoggler() {
    $('.navbar-toggler').click(function () {
      if($('header').hasClass('navbar-opened')) {
        $('header').removeClass('navbar-opened');
      } else {
        $('header').addClass('navbar-opened');
      }
    });
  }

  function sage_init() {
    $("a[href*='#']").mPageScroll2id();
    sage_stickyheader();
    sage_navbartoggler();
  }

  function sage_slider() {
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 210,
      itemMargin: 10,
      directionNav: false,
      controlNav: false,
      move: 1,
    });
  }

  function sage_preloader() {
    $('body').imagesLoaded(function() {
      $('body').addClass('loaded');
    });
    setTimeout(function() {
      $('body').addClass('loaded');
    }, 5000);
  }

  function sage_switch_videos() {
    $('.video_and_content__row__vidoes__col').click(function () {
      var videosrc = $(this).find('iframe').attr('src');
      $('.video-display').attr('src',videosrc);
    });
  }

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        sage_initWindows();
        sage_init();
        sage_slider();
        sage_preloader();
        sage_switch_videos();
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS

      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
