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
                    <div class="d-none d-lg-block">
                        <aside class="sidebar">
                            <div class="accordion" id="accordionSidebar">
                                <!-- for author -->
                                <div class="accordion-item menu">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#for_author" aria-expanded="true" aria-controls="for_author">
                                            For Authors
                                        </button>
                                    </h3>
                                    <div id="for_author" class="accordion-collapse collapse show" data-bs-parent="#accordionSidebar">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <a class="active" href="#">
                                                        Why choose INNSpub
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Aim and scope
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Rapid publication
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Affiliated journals
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Peer-review process
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Manuscript preparation
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Plagiarism policy
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Special issue track
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        APC information
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- downloads -->
                                <div class="accordion-item menu">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#downloads" aria-expanded="false" aria-controls="downloads">
                                            Downloads
                                        </button>
                                    </h3>
                                    <div id="downloads" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        Cover letter
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Copyright agreement
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Article sample
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Publication certificate
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- links -->
                                <div class="accordion-item menu links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Call for paper
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Paper submission
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Authors service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="archives.html">
                                                Archive
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Become a reviewer
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Propose a special issue
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Get subscription
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Indexed In -->
                                <div class="accordion-item indexed_in">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#indexed_in" aria-expanded="false" aria-controls="indexed_in">
                                            Indexed In
                                        </button>
                                        <a href="indexed-in.html" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
                                    </h3>
                                    <div id="indexed_in" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
                                        <div class="accordion-body">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Member In -->
                                <div class="accordion-item indexed_in">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#member_in" aria-expanded="false" aria-controls="member_in">
                                            Member In
                                        </button>
                                        <a href="#" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
                                    </h3>
                                    <div id="member_in" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
                                        <div class="accordion-body">
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

                                        </div>
                                    </div>
                                </div>

                                <!-- Plagiarism Checker -->
                                <div class="accordion-item indexed_in">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#plagiarism_checker" aria-expanded="false" aria-controls="plagiarism_checker">
                                            Plagiarism Checker
                                        </button>
                                        <a href="#" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
                                    </h3>
                                    <div id="plagiarism_checker" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
                                        <div class="accordion-body">
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

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </aside>
                    </div>

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
