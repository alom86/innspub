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

})(window.jQuery);