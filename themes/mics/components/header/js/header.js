/**
 * @file
 * Header related

 */

(function ($) {

  function headerSticky() {
    if ($(window).scrollTop() >= 400 && $(window).width() >= 768) {
      $('body').addClass('header-sticky');
    } else {
      $('body').removeClass('header-sticky');
    }
  }

  $(window).on("scroll", function () {
    headerSticky();
  });

  $(window).on("load", function () {
    headerSticky();
  });

})(jQuery);
