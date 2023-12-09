<?php
/**
 * Template Name: INNSPub Archive
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
                                <h1>Archives</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__archives nav_tabs">
                                <!-- tabs -->
                                <ul class="nav nav-tabs d-none d-md-flex" id="archivesTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn_img active" id="jbes-tab" data-bs-toggle="tab" data-bs-target="#jbes-tab-pane" type="button" role="tab" aria-controls="jbes-tab-pane" aria-selected="true">
                                            <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/jbes.webp" alt="jbes">
                                            <span>Journal of Biodiversity and Environmental Sciences (JBES)</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn_img" id="ijb-tab" data-bs-toggle="tab" data-bs-target="#ijb-tab-pane" type="button" role="tab" aria-controls="ijb-tab-pane" aria-selected="false">
                                            <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijb.webp" alt="ijb">
                                            <span>International Journal of Biosciences (IJB)</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn_img" id="ijaar-tab" data-bs-toggle="tab" data-bs-target="#ijaar-tab-pane" type="button" role="tab" aria-controls="ijaar-tab-pane" aria-selected="false">
                                            <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijaar.webp" alt="ijaar">
                                            <span>International Journal of Agronomy and Agricultural Research (IJAAR)</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn_img" id="ijbb-tab" data-bs-toggle="tab" data-bs-target="#ijbb-tab-pane" type="button" role="tab" aria-controls="ijbb-tab-pane" aria-selected="false">
                                            <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijbb.webp" alt="ijbb">
                                            <span>International Journal of Biomolecules and Biomedicine (IJBB)</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn_img" id="ijmm-tab" data-bs-toggle="tab" data-bs-target="#ijmm-tab-pane" type="button" role="tab" aria-controls="ijmm-tab-pane" aria-selected="false">
                                            <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijmm.webp" alt="ijmm">
                                            <span>International journal of Microbiology and Mycology (IJMM)</span>
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content accordion mt-md-0" id="archivesTabContent">
                                    <!-- jbes -->
                                    <div class="tab-pane fade show active accordion-item" id="jbes-tab-pane" role="tabpanel" aria-labelledby="jbes-tab" tabindex="0">
                                        <h2 class="accordion-header" id="heading_jbes">
                                            <button class="accordion-button btn_img" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_jbes" aria-expanded="true" aria-controls="collapse_jbes">
                                                <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/jbes.webp" alt="jbes">
                                                <span>Journal of Biodiversity and Environmental Sciences (JBES)</span>
                                            </button>
                                        </h2>
                                        <div id="collapse_jbes" class="accordion-collapse collapse show  d-md-block" aria-labelledby="heading_jbes" data-bs-parent="#archivesTabContent">
                                            <div class="accordion-body">
                                                <div class="accordion year_accordion" id="accordion_jbes">
                                                    <!-- year 2023 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#jbes_23" aria-expanded="true" aria-controls="jbes_23">
                                                                2023
                                                            </button>
                                                        </h3>
                                                        <div id="jbes_23" class="accordion-collapse collapse show" data-bs-parent="#accordion_jbes">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a class="active" href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 22 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jbes_22" aria-expanded="true" aria-controls="jbes_22">
                                                                2022
                                                            </button>
                                                        </h3>
                                                        <div id="jbes_22" class="accordion-collapse collapse" data-bs-parent="#accordion_jbes">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 2021 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jbes_21" aria-expanded="true" aria-controls="jbes_21">
                                                                2021
                                                            </button>
                                                        </h3>
                                                        <div id="jbes_21" class="accordion-collapse collapse" data-bs-parent="#accordion_jbes">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ijb -->
                                    <div class="tab-pane fade accordion-item" id="ijb-tab-pane" role="tabpanel" aria-labelledby="ijb-tab" tabindex="0">
                                        <h2 class="accordion-header" id="heading_ijb">
                                            <button class="accordion-button btn_img collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_ijb" aria-expanded="false" aria-controls="collapse_ijb">
                                                <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijb.webp" alt="ijb">
                                                <span>International Journal of Biosciences (IJB)</span>
                                            </button>
                                        </h2>
                                        <div id="collapse_ijb" class="accordion-collapse collapse d-md-block" aria-labelledby="heading_ijb" data-bs-parent="#archivesTabContent">
                                            <div class="accordion-body">
                                                <div class="accordion year_accordion" id="accordion_ijb">
                                                    <!-- year 2023 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ijb_23" aria-expanded="true" aria-controls="ijb_23">
                                                                2023
                                                            </button>
                                                        </h3>
                                                        <div id="ijb_23" class="accordion-collapse collapse show" data-bs-parent="#accordion_ijb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a class="active" href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 22 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijb_22" aria-expanded="true" aria-controls="ijb_22">
                                                                2022
                                                            </button>
                                                        </h3>
                                                        <div id="ijb_22" class="accordion-collapse collapse" data-bs-parent="#accordion_ijb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 2021 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijb_21" aria-expanded="true" aria-controls="ijb_21">
                                                                2021
                                                            </button>
                                                        </h3>
                                                        <div id="ijb_21" class="accordion-collapse collapse" data-bs-parent="#accordion_ijb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ijaar -->
                                    <div class="tab-pane fade accordion-item" id="ijaar-tab-pane" role="tabpanel" aria-labelledby="ijaar-tab" tabindex="0">
                                        <h2 class="accordion-header" id="heading_ijaar">
                                            <button class="accordion-button btn_img collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_ijaar" aria-expanded="false" aria-controls="collapse_ijaar">
                                                <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijaar.webp" alt="ijaar">
                                                <span>International Journal of Agronomy and Agricultural Research (IJAAR)</span>
                                            </button>
                                        </h2>
                                        <div id="collapse_ijaar" class="accordion-collapse collapse d-md-block" aria-labelledby="heading_ijaar" data-bs-parent="#archivesTabContent">
                                            <div class="accordion-body">
                                                <div class="accordion year_accordion" id="accordion_ijaar">
                                                    <!-- year 2023 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ijaar_23" aria-expanded="true" aria-controls="ijaar_23">
                                                                2023
                                                            </button>
                                                        </h3>
                                                        <div id="ijaar_23" class="accordion-collapse collapse show" data-bs-parent="#accordion_ijaar">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a class="active" href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 22 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijaar_22" aria-expanded="true" aria-controls="ijaar_22">
                                                                2022
                                                            </button>
                                                        </h3>
                                                        <div id="ijaar_22" class="accordion-collapse collapse" data-bs-parent="#accordion_ijaar">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 2021 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijaar_21" aria-expanded="true" aria-controls="ijaar_21">
                                                                2021
                                                            </button>
                                                        </h3>
                                                        <div id="ijaar_21" class="accordion-collapse collapse" data-bs-parent="#accordion_ijaar">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ijbb -->
                                    <div class="tab-pane fade accordion-item" id="ijbb-tab-pane" role="tabpanel" aria-labelledby="ijbb-tab" tabindex="0">
                                        <h2 class="accordion-header" id="heading_ijbb">
                                            <button class="accordion-button btn_img collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_ijbb" aria-expanded="false" aria-controls="collapse_ijbb">
                                                <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijbb.webp" alt="ijbb">
                                                <span>International Journal of Biomolecules and Biomedicine (IJBB)</span>
                                            </button>
                                        </h2>
                                        <div id="collapse_ijbb" class="accordion-collapse collapse d-md-block" aria-labelledby="heading_ijbb" data-bs-parent="#archivesTabContent">
                                            <div class="accordion-body">
                                                <div class="accordion year_accordion" id="accordion_ijbb">
                                                    <!-- year 2023 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ijbb_23" aria-expanded="true" aria-controls="ijbb_23">
                                                                2023
                                                            </button>
                                                        </h3>
                                                        <div id="ijbb_23" class="accordion-collapse collapse show" data-bs-parent="#accordion_ijbb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a class="active" href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 22 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijbb_22" aria-expanded="true" aria-controls="ijbb_22">
                                                                2022
                                                            </button>
                                                        </h3>
                                                        <div id="ijbb_22" class="accordion-collapse collapse" data-bs-parent="#accordion_ijbb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 2021 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijbb_21" aria-expanded="true" aria-controls="ijbb_21">
                                                                2021
                                                            </button>
                                                        </h3>
                                                        <div id="ijbb_21" class="accordion-collapse collapse" data-bs-parent="#accordion_ijbb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade accordion-item" id="ijmm-tab-pane" role="tabpanel" aria-labelledby="ijmm-tab" tabindex="0">
                                        <h2 class="accordion-header" id="heading_ijmm">
                                            <button class="accordion-button btn_img collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_ijmm" aria-expanded="false" aria-controls="collapse_ijmm">
                                                <img width="120" height="161" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijmm.webp" alt="ijmm">
                                                <span>International journal of Microbiology and Mycology (IJMM)</span>
                                            </button>
                                        </h2>
                                        <div id="collapse_ijmm" class="accordion-collapse collapse d-md-block" aria-labelledby="heading_ijmm" data-bs-parent="#archivesTabContent">
                                            <div class="accordion-body">
                                                <div class="accordion year_accordion" id="accordion_ijmm">
                                                    <!-- year 2023 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ijmm_23" aria-expanded="true" aria-controls="ijmm_23">
                                                                2023
                                                            </button>
                                                        </h3>
                                                        <div id="ijmm_23" class="accordion-collapse collapse show" data-bs-parent="#accordion_ijmm">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a class="active" href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 22 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijmm_22" aria-expanded="true" aria-controls="ijmm_22">
                                                                2022
                                                            </button>
                                                        </h3>
                                                        <div id="ijmm_22" class="accordion-collapse collapse" data-bs-parent="#accordion_ijmm">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- year 2021 -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ijmm_21" aria-expanded="true" aria-controls="ijmm_21">
                                                                2021
                                                            </button>
                                                        </h3>
                                                        <div id="ijmm_21" class="accordion-collapse collapse" data-bs-parent="#accordion_ijmm">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                    <li><a href="#">Volume 22 > SN. 1 > January Issue</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
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
