<?php

register_nav_menus(
    array(
        'header_menu' => esc_html__( 'Header Menu', 'innspub' ),
        'approach_menu' => esc_html__( 'Approach Menu', 'innspub' ),
        'quick_links_menu' => esc_html__( 'Quick Links Menu', 'innspub' ),
    )
);

function add_li_class($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_class', 10, 3);

function add_a_class($attr, $item, $args) {
    if(isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_a_class', 10, 3);

function wpdocs_custom_dropdown_class( $classes ) {
	$classes[] = 'dropdown-menu';

	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' );