<?php

/**
 * Template part breadcumb
 * 
 */
?>

<div class="breadcrumb_section bg_overlay">
    <!-- bg image -->
    <div class="breadcrumb_section__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/breadcumb_bg.webp" alt="breadcumb_bg">
    </div>

    <div class="container px-3 px-sm-0">
        <nav aria-label="breadcrumb">
            <!-- mobile dropdown -->
            <ol class="breadcrumb d-md-none">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item dropdown">
                    <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                        ...
                    </a>
                    <ul class="dropdown-menu">
                        <li class="parent_page"><a class="dropdown-item active" href="#">Back Page</a></li>
                    </ul>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo get_breadcrumb_title(); ?></li>
            </ol>
            <!-- Large device -->
            <ol class="breadcrumb d-none d-md-flex">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item parent_page"><a href="#"></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo get_breadcrumb_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>

<?php
function get_breadcrumb_title()
{
    if (is_home() || is_front_page()) {
        return 'Home';
    } elseif (is_singular('post')) {
        return get_the_title();
    } elseif (is_singular('page')) {
        return get_the_title();
    } elseif (is_archive()) {
        return get_the_archive_title();
    } elseif (is_tag()) {
        return single_tag_title('>', false);
    } elseif (is_category()) {
        return single_cat_title('>', false);
    } elseif (is_search()) {
        return 'Search Results For: ' . get_search_query();
    } else {
        return 'Unknown';
    }
}
?>
