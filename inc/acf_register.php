<?php

// Register ACF option pages
// function register_acf_options_pages() {
//     if( function_exists('acf_add_options_page') ) {
//         acf_add_options_page(array(
//             'page_title' => 'Footer Settings',
//             'menu_title' => 'Footer Settings',
//             'menu_slug' => 'footer-settings',
//             'capability' => 'manage_options',
//             'parent_slug' => 'theme_options_slug', 
//             'position' => 10,
//             'icon_url' => 'dashicons-admin-settings'
//         ));

        
//     }
// }
// add_action('acf/init', 'register_acf_options_pages');

// Create the main menu and submenus
function theme_options_page() {
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'theme_options_slug',
        'theme_options_callback',
        'dashicons-admin-generic',
        60
    );

    // Submenus linked to ACF option pages
    add_submenu_page(
        'theme_options_slug',
        'Header Settings',
        'Header Settings',
        'manage_options',
        'acf-options-header-settings', 
        '__return_null' 
    );
    add_submenu_page(
        'theme_options_slug',
        'Footer Settings',
        'Footer Settings',
        'manage_options',
        'acf-options-footer-settings', 
        '__return_null' 
    );
    add_submenu_page(
        'theme_options_slug',
        'Social Settings',
        'Social Settings',
        'manage_options',
        'acf-options-social-settings', 
        '__return_null' 
    );
}
add_action('admin_menu', 'theme_options_page');