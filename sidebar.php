<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innspub
 */

if ( ! is_active_sidebar( 'sidebar-home' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
</aside><!-- #secondary -->
