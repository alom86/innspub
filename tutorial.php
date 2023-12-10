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
                                <h1>Tutorial on Theoretical Research</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="178" src="<?php echo get_template_directory_uri(); ?>/assets/images/tutorial_page_feature_image.webp" alt="tutorial_page_feature_image">
                                </div>

                                <div class="page_content__bg d-none d-md-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tutorial_page_bg.webp" alt="tutorial_page_bg">
                                </div>

                                <p>Welcome to the INNSpub theoretical research tutorial page. These online tutorial reviews will help you to gain core concepts on innovative research and presentation as well as the research conduct, Research paper writing, and academic publication process through some of the steps involved in research, presentation, and publication. This tutorial guides you to improve your ability to research setup carried out research and write better research papers with our collection of interactive tutorials. Each module has an introduction and steps to follow to master the elements of research.</p>

                                <h2>01. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li><a href="#">About scientific research</a></li>
                                    <li><a href="#">Types of scientific research</a></li>
                                    <li><a href="#">Research topic selection</a></li>
                                    <li><a href="#">Hypotheses testing</a></li>
                                    <li><a href="#">Standards of a quality research</a></li>
                                    <li><a href="#">How to set up a research</a></li>
                                </ul>

                                <h2>02. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li>About scientific research</li>
                                    <li>Types of scientific research</li>
                                    <li>Research topic selection</li>
                                    <li>Hypotheses testing</li>
                                    <li>Standards of a quality research</li>
                                    <li>How to set up a research</li>
                                </ul>

                                <h2>03. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li>About scientific research</li>
                                    <li>Types of scientific research</li>
                                    <li>Research topic selection</li>
                                    <li>Hypotheses testing</li>
                                    <li>Standards of a quality research</li>
                                    <li>How to set up a research</li>
                                </ul>

                                <h2>04. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li>About scientific research</li>
                                    <li>Types of scientific research</li>
                                    <li>Research topic selection</li>
                                    <li>Hypotheses testing</li>
                                    <li>Standards of a quality research</li>
                                    <li>How to set up a research</li>
                                </ul>

                                <h2>05. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li>About scientific research</li>
                                    <li>Types of scientific research</li>
                                    <li>Research topic selection</li>
                                    <li>Hypotheses testing</li>
                                    <li>Standards of a quality research</li>
                                    <li>How to set up a research</li>
                                </ul>

                                <h2>06. Thesis preparation-Dissertation/Thesis preparation</h2>
                                <ul>
                                    <li>About scientific research</li>
                                    <li>Types of scientific research</li>
                                    <li>Research topic selection</li>
                                    <li>Hypotheses testing</li>
                                    <li>Standards of a quality research</li>
                                    <li>How to set up a research</li>
                                </ul>

                                <h2>More links</h2>
                                <ul>
                                    <li><a href="#">English grammar editing service</a></li>
                                    <li><a href="#">Call for papers</a></li>
                                </ul>

                                <!-- page_content__nav -->
                                <div class="page_content__nav">
                                    <a class="active" href="#">Home</a>
                                    <a href="#">Journals</a>
                                    <a href="#">Submission</a>
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
