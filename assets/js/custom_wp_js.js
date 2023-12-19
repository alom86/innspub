(function ($) {

  // $('#header-menu .menu-item-has-children').addClass('dropdown');
  $('#header-menu .menu-item-has-children.dropdown > a')
    .attr("role", "button")
    .attr("data-bs-toggle", "dropdown")
    .attr("aria-expanded", "false");

  $('#header-menu .dropdown-menu > .menu-item').removeClass('nav-item dropdown');
  $('#header-menu .dropdown-menu > .menu-item a').removeClass('nav-link dropdown-toggle');
  $('#header-menu .dropdown-menu > .menu-item a').addClass('dropdown-item');

  $('#header-menu .current-menu-ancestor').addClass('active');
  $('#header-menu .current-menu-item').addClass('active');

  // home nav-tab to select
  if ($(window).width() > 767) {
    $(".nav_tabs .nav").removeClass('dropdown-menu');
    $(".nav_tabs .tab_select").removeClass('tab_select');
  }
  if ($(window).width() < 768){
    $(document).on("click", '.dropdown-menu .nav-item .nav-link', function(e) {
      let activeText = $(this).text();
      $(this).parent().parent().parent().find("button[data-bs-toggle='dropdown']").html(activeText);
    });
  }

  // sidebar active menu
  $("#for_authors-menu .current-menu-item a").addClass('active');
  $("#downloads-menu .current-menu-item a").addClass('active');

  // sidebar_direct_links-menu active
  $('#sidebar_direct_links-menu .current_page_item a').addClass('active');


  // pagination calss add
  $('.pagination .page-item .page-numbers').addClass('page-link');
  $('.pagination .page-item .current').addClass('active');

  // post_references
  $('#post_references p').addClass('reference_item');
  $('#post_references p strong').addClass('reference_item__title');

  // page_content__data
  $('.page_content__data p.text-end').addClass('page_content__nav');

})(window.jQuery);