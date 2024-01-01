<?php
/**
 * 
 * 
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
                                <h1><?php the_title(); ?></h1>
                            </div>

                            <!-- page data -->
                            <div class="current-issue">
                                <!-- archive data -->
                                <?php
                                    require get_template_directory() . '/template-parts/archive_content.php';
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
