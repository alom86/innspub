<?php
/**
 * innspub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package innspub
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function innspub_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on innspub, use a find and replace
		* to change 'innspub' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'innspub', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	require get_template_directory() . '/inc/menu_register.php';

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'innspub_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'innspub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function innspub_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'innspub_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'innspub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widget_register.php';


/**
 * Enqueue scripts and styles.
 */
include_once('inc/custom_css_js.php');

// acf register
require get_template_directory() . '/inc/acf_register.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACF Pro
 */

 if ( class_exists('acf') || class_exists('ACF') ) {
    return; // ACF is active, exit further execution
}
		// Define path and URL to the ACF plugin.
		define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
		define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

		// Include the ACF plugin.
		include_once( MY_ACF_PATH . 'acf.php' );

		// Customize the URL setting to fix incorrect asset URLs.
		add_filter('acf/settings/url', 'my_acf_settings_url');
		function my_acf_settings_url( $url ) {
			return MY_ACF_URL;
		}


		function my_acf_json_save_point( $path ) {
			return get_stylesheet_directory() . '/acf-json';
		}
		add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

		function my_acf_json_load_point( $paths ) {
			// Remove the original path (optional).
			unset($paths[0]);
		
			// Append the new path and return it.
			$paths[] = get_stylesheet_directory() . '/acf-json';
		
			return $paths;    
		}
		add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );


		// ACF ends
