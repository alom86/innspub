<?php
/**
 * Template Name: FAQs Page
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
                                <h1>Frequently Asked Questions</h1>
                            </div>

                            <!-- all faq -->
                            <div class="accordion striped" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq_1" aria-expanded="true" aria-controls="faq_1">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h2>
                                    <div id="faq_1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_2" aria-expanded="false" aria-controls="faq_2">
                                            Do I have to format my paper according desire journal style for review ?
                                        </button>
                                    </h2>
                                    <div id="faq_2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_3" aria-expanded="false" aria-controls="faq_3">
                                            How do I submit my manuscript to INNSPUB Journals ?
                                        </button>
                                    </h2>
                                    <div id="faq_3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_4" aria-expanded="false" aria-controls="faq_4">
                                            Is copyright agreement form submission necessary for paper submission ?
                                        </button>
                                    </h2>
                                    <div id="faq_4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_5" aria-expanded="false" aria-controls="faq_5">
                                            When I will get the acceptance letter, if my paper is accepted ?
                                        </button>
                                    </h2>
                                    <div id="faq_5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
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
