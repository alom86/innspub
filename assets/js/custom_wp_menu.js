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



})(window.jQuery);