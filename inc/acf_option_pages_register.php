<?php
// ACF option pages function
// Register ACF option pages
function register_acf_options_pages() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' => 'Footer Settings',
            'menu_title' => 'Footer Settings',
            'menu_slug' => 'footer-settings',
            'capability' => 'manage_options',
            'parent_slug' => 'theme_options_slug', 
            'position' => 10,
            'icon_url' => 'dashicons-admin-settings'
        ));

        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Options',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Home Banner Settings',
            'menu_title'	=> 'Home Banner Section',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Home About Settings',
            'menu_title'	=> 'Home About Section',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Home Choose Settings',
            'menu_title'	=> 'Home Choose Settings',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Counter Up Settings',
            'menu_title'	=> 'Home Counterup Settings',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Options',
            'menu_title'	=> 'Theme Footer Settings',
            'parent_slug'	=> 'theme-general-settings',
        ));
        // acf_add_options_sub_page(array(
        //     'page_title' 	=> 'Affiliate Options',
        //     'menu_title'	=> 'Affiliate Page Settings',
        //     'parent_slug'	=> 'theme-general-settings',
        // ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Single Journal Options',
            'menu_title'	=> 'Single Journal Settings',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Sidebar Page Links',
            'menu_title'	=> 'Sidebar Page Links',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Contact Page Options',
            'menu_title'	=> 'Contact Page Settings',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        // acf_add_options_sub_page(array(
        //     'page_title' 	=> 'Header Top Options',
        //     'menu_title'	=> 'Header Top Right Settings',
        //     'parent_slug'	=> 'theme-general-settings',
        // ));
    }
}
add_action('acf/init', 'register_acf_options_pages');

