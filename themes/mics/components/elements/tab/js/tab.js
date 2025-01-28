/**
 * @file
 * tab related functions

 */

(function ($) {

  //tab active
  function scrollToActive() {
    let $tabMenu = $('.tab-menu');
    let $activeMenu = $tabMenu.find('.active');
    if ($tabMenu.length) {
      if ($(window).width() <= 767) {
        var scrollWidth = 0;
        var prevWidth = 0;
        $activeMenu.prevAll().each(function () {
          prevWidth += $(this).outerWidth(true);
        });
        scrollWidth = prevWidth;
        $tabMenu.animate({ scrollLeft: scrollWidth }, 500);
      }
    }
  }

  $(window).on("load", function () {
    scrollToActive();
  });

})(jQuery);
