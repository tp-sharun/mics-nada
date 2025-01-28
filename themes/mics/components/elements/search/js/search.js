/**
 * @file
 * drupal search related functions

 */

(function ($) {

  function searchBar() {

    // $(document).on("keypress", ".search-input input", function (e) {
    //   if (e.keyCode === 13) {
    //     e.preventDefault();
    //     $(".search-button").trigger("click");
    //   }
    // });

    //clear search
    $(document).on("click", ".input-clear-icon", function (e) {
      $(this).closest('.search-block').removeClass('has-value');
      $(this).next('input').val('');
      $(this).closest('.search-block').find('.search-button').trigger("click");
    });
    //on load
    showClearBtn();

    //on type
    $('.search-block').on('input', function () {
      console.log('in')
      showClearBtn();
    });

  }

  //input value clear button
  function showClearBtn() {
    console.log($('.search-bar').val())
    if ($('.search-bar').val() !== '') {
      $('.search-block').addClass('has-value');
    } else {
      $('.search-block').removeClass('has-value');
    }
  }

  $(window).on("load", function () {
    setTimeout(function () {
      searchBar();
    }, 500);

  });

})(jQuery);
