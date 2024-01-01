<?php

/**
 * Category Archive Page
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
                <div class="w-100">
                    <div class="page_content">
                        <!-- page title -->
                        <div class="page_content__title">
                            <h1>
                                <?php if (have_posts()) : ?>

                                    <?php $post = $posts[0];
                                    ?>
                                    <?php if (is_month()) { ?>
                                        Paper for | <?php echo single_cat_title(); ?> |
                                        <?php echo "Volume ";
                                        the_field('volume');
                                        echo " | Number ";
                                        the_field('number');
                                        echo " | "; ?>
                                        <?php the_time('F, Y'); ?>

                                    <?php } elseif (is_category()) { ?>
                                        Current Issue |
                                        <?php single_cat_title(); ?>

                                <?php }
                                endif; ?>
                                
                                <?php if (!have_posts()) {
                                    echo 'Post Not Found';
                                } ?>
                            </h1>
                        </div>

                        <!-- page data -->
                        <div class="current-issue">
                            <?php

                            global $query_string;

                            query_posts($query_string . '&order=DEC');

                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();

                                    require get_template_directory() . '/template-parts/journal_post_content.php';

                                endwhile;

                            endif;
                            ?>

                            <?php

                            ?>

                            <!-- pagination -->
                            <?php
                            require get_template_directory() . '/template-parts/pagination_part.php';
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
