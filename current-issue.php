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
        <div class="breadcrumb_section bg_overlay">
            <!-- bg image -->
            <div class="breadcrumb_section__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/breadcumb_bg.webp" alt="breadcumb_bg">
            </div>

            <div class="container px-3 px-sm-0">
                <nav aria-label="breadcrumb">
                    <!-- mobile dropdown -->
                    <ol class="breadcrumb d-md-none">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item dropdown">
                            <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                ...
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="#">Back Page</a></li>
                                <li><a class="dropdown-item" href="#">Back Page 2</a></li>
                                <li><a class="dropdown-item" href="#">Back Page 3</a></li>
                            </ul>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Current Issue IJAAR</li>
                    </ol>
                    <!-- Large device -->
                    <ol class="breadcrumb d-none d-md-flex">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Archives</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Current Issue IJAAR</li>
                    </ol>
                </nav>
            </div>
        </div>

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
