<?php
// theme style and js call
function innspub_css_js()
{
    // default css
    wp_enqueue_style('style', get_stylesheet_uri());
    // bootstrap css
    wp_register_style('bootstrap_style', get_template_directory_uri() . '/assets/vendors/bootstrap-5.3.0/css/bootstrap.min.css', array(), '5.3.0');
    wp_enqueue_style('bootstrap_style');
    // aos css
    wp_register_style('aos_style', get_template_directory_uri() . '/assets/vendors/aos/aos.css', array(), '2.3.1');
    wp_enqueue_style('aos_style');
    // swiper css
    wp_register_style('swiper_style', get_template_directory_uri() . '/assets/vendors/swiper-10.3.1/swiper-bundle.min.css', array(), '2.3.1');
    wp_enqueue_style('swiper_style');
    // icon
    wp_register_style('fontawesome_icon', get_template_directory_uri() . '/assets/icons/fontawesome-6.3.0/css/all.min.css', array(), '6.3.0');
    wp_enqueue_style('fontawesome_icon');
    // theme css
    wp_register_style('main_style', get_template_directory_uri() . "/assets/css/style.css", filemtime(get_template_directory() . "/assets/css/style.css"), '1.0.0', 'all');
    wp_enqueue_style('main_style');

    // default jquery
    wp_enqueue_script('jquery');
    // bootstrap_js
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/assets/vendors/bootstrap-5.3.0/js/bootstrap.bundle.min.js", array(), "5.3.0", 'true');
    // aos_js
    wp_enqueue_script('aos_js', get_template_directory_uri() . "/assets/vendors/aos/aos.js", array(), "2.3.1", 'true');
    // swiper_js
    wp_enqueue_script('swiper_js', get_template_directory_uri() . "/assets/vendors/swiper-10.3.1/swiper-bundle.min.js", array(), "10.3.1", 'true');
    // wp_menu js
    wp_enqueue_script('custom_wp_menu_js', get_template_directory_uri() . "/assets/js/custom_wp_menu.js", array(), "1.0.0", 'true');
    // main js
    wp_enqueue_script('main_js', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0.0", 'true');

    // from _theme
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action("wp_enqueue_scripts", 'innspub_css_js');