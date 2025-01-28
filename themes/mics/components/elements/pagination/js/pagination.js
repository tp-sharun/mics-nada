/**
 * @file
 * pagination related functions

 */
(function ($) {
  function paginationSettings() {
    // struchure change
    var $paginationPages = [];
    var $activePaginationLink = "";
    $(
      ".pagination .page-item:not(.pager__item--first,.pager__item--previous,.pager__item--next,.pager__item--last)"
    ).each(function (i, val) {
      //for adding class to first one
      var $thisClass = i == 0 ? "pagination-link-first-item" : "";
      $(this).addClass($thisClass);
      var $dotClass = $(this).hasClass('disabled') ? 'dot-item' : '';
      // pagination item html
      var $paginationLinkSrc = $(this).find(".page-link").attr("href");
      var $paginationLinkHtml = $(this).find(".page-link").html();
      var $itemAnchorTag =
        "<a class='pagination--dropdown-link grey1' href='" +
        $paginationLinkSrc +
        "'>" +
        $paginationLinkHtml +
        "</a>";
      var $itemHtml =
        "<li class='expanded dropdown pagination--dropdown-menu-item pager__item " + $dotClass + " '>" +
        $itemAnchorTag +
        "</li>";
      $paginationPages.push($itemHtml);

      // if active
      if ($(this).hasClass("is-active")) {
        var $paginationNumber =
          "<div class='pagination--number-line'>" +
          $paginationLinkHtml +
          "</div>";
        var $arrrow = "<div class='pagination--number-arrow'></div>";
        $activePaginationLink =
          "<a href='#' class='dropdown-toggle pagination--number pagination-dropdown-select-link'>" +
          $paginationNumber +
          $arrrow +
          "</a>";
      }
    });

    //for adding dropdown
    if ($paginationPages.length > 0) {
      var $paginationDropDownInner =
        "<ul class='pagination--dropdown-menu'>" +
        $paginationPages.join(" ") +
        "</ul>";
      var $paginationDropDownOuter =
        "<ul class='pagination--dropdown'><li class='pagination--dropdown-menu-outer '>" +
        $activePaginationLink +
        $paginationDropDownInner +
        "</li></ul>";
      $(
        "<li class='pagination--dropdown-outer'>" +
        $paginationDropDownOuter +
        "</li>"
      ).insertBefore(".pagination-link-first-item");
    }

    // if no prev link
    if ($(".pager__item--previous").length == 0) {
      var $prev =
        "<li class='page-item pager__item--previous pagination-btn-wrap'><a href='#' rel='prev' class='page-link pagination-btn-disabled'><span> Previous </span></a></li>";
      $($prev).prependTo(".pagination");
    }

    // if no next link
    if ($(".pager__item--next").length == 0) {
      var $next =
        "<li class='page-item pager__item--next pagination-btn-wrap'><a href='#' rel='next' class='page-link pagination-btn-disabled'><span>Next</span></a></li>";
      $($next).appendTo(".pagination");
    }

    // adding common class to prev/next
    $(".pager__item--previous,.pager__item--next").addClass(
      "pagination-btn-wrap"
    );
  }

  function paginationEvents() {
    //dropdown toggle
    $(document).on("click", ".pagination--number", function (e) {
      e.preventDefault();
      $(this).closest('.pagination--dropdown').toggleClass('opened');
    });
    //dropdown outside click
    $(document).click(function (e) {
      var container = $('.pagination--dropdown');
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass('opened');
      }
    });

  }

  $(document).ready(function () {
    paginationEvents();
  });

  $(window).on("load", function () {
    setTimeout(function () {
      paginationSettings();
    }, 300);
  });
})(jQuery);
