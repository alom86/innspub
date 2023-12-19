<?php
/**
 * Template Name: Tutorial Page
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
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="178" src="<?php echo get_template_directory_uri(); ?>/assets/images/tutorial_page_feature_image.webp" alt="tutorial_page_feature_image">
                                </div>

                                <div class="page_content__bg d-none d-md-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tutorial_page_bg.webp" alt="tutorial_page_bg">
                                </div>

                                <?php the_content(); ?>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

<?php


get_footer();
