<?php
/**
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
        <div class="section_gap">
            <div class="container">
                <div class="layout_sidebar">
                    <!-- sidebar -->
                    <?php
                        require get_template_directory() . '/template-parts/sidebar_part.php';
                    ?>

                    <!-- page content -->
                    <article>
                        <div class="page_content">
                            <!-- page title -->
                            <div class="page_content__title">
                                <h1><?php echo the_title(); ?></h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/single_page_feature_image.webp" alt="single_page_feature_image">
                                </div>
                                
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>

    </main>

<?php


get_footer();
