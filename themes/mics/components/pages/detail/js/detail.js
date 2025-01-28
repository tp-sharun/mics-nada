/**
 * @file
 * detail page related functions

 */

(function ($) {

  function activeScroll() {
    let $headerHeight = $(window).width() >= 768 ? 55 : 145;
    $('.active-left-panel a').bind('click', function (e) {
      e.preventDefault();
      var target = $(this).attr("href");
      $('html, body').stop().animate({
        scrollTop: $(target).offset().top - $headerHeight
      }, 600, function () {
        location.hash = target;
      });
      return false;
    });
  }

  // $(window).scroll(function () {
  //   var scrollDistance = $(window).scrollTop();
  //   $('.field-section-container .field-section[id]').each(function (i) {
  //     if ($(this).position().top <= scrollDistance) {
  //       $('.active-left-panel a.is-active').removeClass('active');
  //       $('.active-left-panel a').eq(i).addClass('active');
  //     }
  //   });
  // }).scroll();

  function leftActive() {
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const fileName = params.get('file_name');
    if (fileName) {
      $('.study-metadata .nada-list-group-item a[href$="' + fileName + '"]').addClass('active');
    }
  }

  $(window).on("load", function () {
    // activeScroll();
    leftActive();
  });

})(jQuery);
