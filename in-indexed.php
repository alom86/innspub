<?php

/**
 * Template Name: In Indexed Page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

get_header();
?>

<!-- Main Content -->
<main class="bg-white">
    <!-- page breadcumb -->
    <?php
    require get_template_directory() . '/template-parts/breadcumb_part.php';
    ?>

    <!-- page layout -->
    <section class="section_gap">
        <div class="container">
            <div class="layout_sidebar">
                <!-- sidebar -->
                <?php
                require get_template_directory() . '/template-parts/sidebar_2_part.php';
                ?>

                <!-- page content -->
                <div class="w-100">
                    <div class="page_content">
                        <!-- page title -->
                        <div class="page_content__title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <!-- page data -->
                        <div class="page_content__indexed_in">

                            <?php
                            $latest_post = new WP_Query(
                                array(
                                    'post_type' => 'indexedin',
                                    'posts_per_page' => 10,
                                    'ignore_sticky_posts' => 1
                                )
                            );
                            if ($latest_post->have_posts()) :
                                while ($latest_post->have_posts()) :
                                    $latest_post->the_post();
                            ?>

                            <div class="card_logo">
                                <a href="<?php if (!empty(the_field('image_url'))) :
                                    the_field('image_url');
                                endif; ?>">
                                    <img src="<?php if (!empty(the_field('indexed_in_image'))) :
                                    the_field('indexed_in_image');
                                endif; ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>

                            <div class="card_logo">
                                <a href="<?php if (!empty(the_field('image_urltwo'))) :
                                    the_field('image_urltwo');
                                endif; ?>">
                                    <img src="<?php if (!empty(the_field('indexed_in_image_two_'))) :
                                    the_field('indexed_in_image_two_');
                                endif; ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>

                            <div class="card_logo">
                                <a href="<?php if (!empty(the_field('image_url_three'))) :
                                    the_field('image_url_three');
                                endif; ?>">
                                    <img src="<?php if (!empty(the_field('indexed_in_image_three'))) :
                                    the_field('indexed_in_image_three');
                                endif; ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>

                            <?php
                                endwhile;
                                wp_reset_query();
                            endif;
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php


get_footer();
