<?php
/**
 * Template Name: Indexed-in Page
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
                                <h1>Indexed In</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__indexed_in">
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/zotero.webp" alt="zotero"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/oaji.webp" alt="oaji"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/ScienceOpenLogo.webp" alt="ScienceOpenLogo"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/SCILIT.webp" alt="SCILIT"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/Refworks.webp" alt="Refworks"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/OSF.webp" alt="OSF"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/logo_wcmasthead_en.webp" alt="logo_wcmasthead_en"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/Journal-Factor.webp" alt="Journal-Factor"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/zotero.webp" alt="zotero"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/oaji.webp" alt="oaji"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/ScienceOpenLogo.webp" alt="ScienceOpenLogo"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/SCILIT.webp" alt="SCILIT"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/Refworks.webp" alt="Refworks"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/OSF.webp" alt="OSF"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/logo_wcmasthead_en.webp" alt="logo_wcmasthead_en"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/Journal-Factor.webp" alt="Journal-Factor"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/ScienceOpenLogo.webp" alt="ScienceOpenLogo"></a>
                                </div>
                                <div class="card_logo">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indexed/Refworks.webp" alt="Refworks"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

<?php


get_footer();
