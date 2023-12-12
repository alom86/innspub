<?php
/**
 * Template Name: Current Issue Page
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
                    <div >
                        <div class="page_content">
                            <!-- page title -->
                            <div class="page_content__title">
                                <h1>Current Issue IJAAR</h1>
                            </div>

                            <!-- page data -->
                            <div class="current-issue">
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- issue card -->
                                <article class="card-issue">
                                    <div class="card-issue__header">
                                        <div class="card-issue__label">
                                            <span>Open Access</span>
                                            <span class="d-none d-sm-inline">Research Paper</span>
                                        </div>
                                        <div class="card-issue__statistics">
                                            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                                            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                                        </div>
                                    </div>
                                    <div class="card-issue__content">
                                        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                                            <div>
                                                <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html">Anti-cancer activity of Carica papaya leaf ethanolic extract and fractions against selected human cancer cell line</a></h2>
                                                <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                                                <div class="card_paper__tags mt-0">
                                                    <span class="fw-bold">Key Words: </span>
                                                    <a href="#">Anti-cancer</a>
                                                    <a href="#">Carica papaya</a>
                                                    <a href="#">Cytotoxicity</a>
                                                    <a href="#">MTT Assay</a>
                                                    <a href="#">Plant extract</a>
                                                </div>
                                                <div>
                                                    <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                                                </div>
                                                <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <!-- pagination -->
                                <!-- <?php
                                    require get_template_directory() . '/template-parts/pagination_part.php';
                                ?> -->

                                <nav class="d-flex align-items-center justify-content-center justify-content-sm-between mt-4">
                                    <div class="d-none d-sm-inline">
                                        <span class="fw-bold">Page 1 of 69</span>
                                    </div>
                                    <ul class="pagination">
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#"><i class="fa-solid fa-angles-left"></i><span class="sr-only">go to first link</span></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i><span class="sr-only">previous page link</span></a></li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><span class="px-2">...</span></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i><span class="sr-only">next page link</span></a></li>
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i><span class="sr-only">go to last page link</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

<?php


get_footer();
