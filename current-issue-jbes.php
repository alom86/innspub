<?php

/**
 * Template Name: Current Issue JBES
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
                require get_template_directory() . '/template-parts/sidebar_part.php';
                ?>

                <!-- page content -->
                <div>
                    <div class="page_content">
                        <!-- page title -->
                        <div class="page_content__title">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <!-- page data -->

                        <div class="current-issue">

                            <?php

                            $args = array(
                                'posts_per_page' => 1,
                                'category_name' => 'JBES',
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'order' => 'DESC',
                            );

                            $latest_post = new WP_Query($args);

                            if ($latest_post->have_posts()) :
                                while ($latest_post->have_posts()) : $latest_post->the_post();
                                    $latest_year = get_the_date('Y');
                                    $latest_month = get_the_date('m');
                                endwhile;
                            endif;

                            wp_reset_postdata(); // Reset the post data to the main query.

                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'JBES',
                                'posts_per_page' => 10,
                                'order' => 'ASC',
                                'paged' => $paged,
                                'date_query' => array(
                                    'year' => $latest_year,
                                    'month' => $latest_month,
                                ),
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) :
                                while ($loop->have_posts()) :
                                    $loop->the_post();
                                    require get_template_directory() . '/template-parts/journal_post_content.php';
                                endwhile;

                                // Pagination
                                require get_template_directory() . '/template-parts/pagination_current_issue.php';

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
