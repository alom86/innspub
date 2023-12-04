<?php
/**
 * Template Name: Journals List Page
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
                        <li class="breadcrumb-item active" aria-current="page">Editorial Board</li>
                    </ol>
                    <!-- Large device -->
                    <ol class="breadcrumb d-none d-md-flex">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Journals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editorial Board</li>
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
                                <h1>Editorial Board</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/single_page_feature_image.webp" alt="single_page_feature_image">
                                </div>

                                <p>Welcome to the INNSpub theoretical research tutorial page. These online tutorial reviews will help you to gain core concepts on innovative research and presentation as well as the research conduct, Research paper writing, and academic publication process through some of the steps involved in research, presentation, and publication. This tutorial guides you to improve your ability to research setup carried out research and write better research papers with our collection of interactive tutorials. Each module has an introduction and steps to follow to master
                                    the elements of research.</p>
                                <p>Welcome to the INNSpub theoretical research tutorial page. These online tutorial reviews will help you to gain core concepts on innovative research and presentation as well as the research conduct, Research paper writing, and academic publication process through some of the steps involved in research, presentation, and publication. This tutorial guides you to improve your ability to research setup carried out research and write better research papers with our collection of interactive tutorials. Each module has an introduction and steps to follow to master
                                    the elements of research.</p>
                                <p>Welcome to the INNSpub theoretical research tutorial page. These online tutorial reviews will help you to gain core concepts on innovative research and presentation as well as the research conduct, Research paper writing, and academic publication process through some of the steps involved in research, presentation, and publication. This tutorial guides you to improve your ability to research setup carried out research and write better research papers with our collection of interactive tutorials. Each module has an introduction and steps to follow to master
                                    the elements of research.</p>
                            </div>

                            <div class="page_content__editor">
                                <div class="row g-4 row-cols-1">
                                    <!-- IJB -->
                                    <div class="col">
                                        <div class="card journal">
                                            <div class="journal__img">
                                                <img width="515" height="691" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijb.webp" alt="ijb">
                                            </div>
                                            <div>
                                                <h2>International Journal of Biosciences (IJB)</h2>
                                                <p>International Journal of Biosciences is a globally known ISI journal with high impact factor & cross-reference indexed journal that publishes high-quality original research papers together with review articles and short communication on Biology and related to Biology.</p>

                                                <div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Short Name <span>:</span></div>
                                                        <span class="data_col__data">IJB</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Frequency <span>:</span></div>
                                                        <span class="data_col__data">12 in a year</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2220-6655 (Print)</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2222-5234 (Online)</span>
                                                    </div>

                                                    <div class="data_col mt-2">
                                                        <div class="data_col__title">
                                                            <button class="btn btn_link" type="button"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="journal__links">
                                                    <div class="d-flex gap-3">
                                                        <a href="#">Instruction</a>
                                                        <a href="journal.html">Journal</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                        <a class="btn btn_primary" href="#">Editorial Board</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- IJAAR -->
                                    <div class="col">
                                        <div class="card journal">
                                            <div class="journal__img">
                                                <img width="515" height="691" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijaar.webp" alt="ijaar">
                                            </div>
                                            <div>
                                                <h2>International Journal of Agronomy and Agricultural Research (IJAAR)</h2>
                                                <p>International Journal of Biosciences is a globally known ISI journal with high impact factor & cross-reference indexed journal that publishes high-quality original research papers together with review articles and short communication on Biology and related to Biology.</p>

                                                <div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Short Name <span>:</span></div>
                                                        <span class="data_col__data">IJAAR</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Frequency <span>:</span></div>
                                                        <span class="data_col__data">12 in a year</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2220-6655 (Print)</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2222-5234 (Online)</span>
                                                    </div>

                                                    <div class="data_col mt-2">
                                                        <div class="data_col__title">
                                                            <button class="btn btn_link" type="button"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="journal__links">
                                                    <div class="d-flex gap-3">
                                                        <a href="#">Instruction</a>
                                                        <a href="journal.html">Journal</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                        <a class="btn btn_primary" href="#">Editorial Board</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- IJBB -->
                                    <div class="col">
                                        <div class="card journal">
                                            <div class="journal__img">
                                                <img width="515" height="691" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijbb.webp" alt="ijbb">
                                            </div>
                                            <div>
                                                <h2>International Journal of Biomolecules and Biomedicine (IJBB)</h2>
                                                <p>International Journal of Biosciences is a globally known ISI journal with high impact factor & cross-reference indexed journal that publishes high-quality original research papers together with review articles and short communication on Biology and related to Biology.</p>

                                                <div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Short Name <span>:</span></div>
                                                        <span class="data_col__data">IJBB</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Frequency <span>:</span></div>
                                                        <span class="data_col__data">12 in a year</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2220-6655 (Print)</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2222-5234 (Online)</span>
                                                    </div>

                                                    <div class="data_col mt-2">
                                                        <div class="data_col__title">
                                                            <button class="btn btn_link" type="button"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="journal__links">
                                                    <div class="d-flex gap-3">
                                                        <a href="#">Instruction</a>
                                                        <a href="journal.html">Journal</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                        <a class="btn btn_primary" href="#">Editorial Board</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- IJMM -->
                                    <div class="col">
                                        <div class="card journal">
                                            <div class="journal__img">
                                                <img width="515" height="691" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/ijmm.webp" alt="ijmm">
                                            </div>
                                            <div>
                                                <h2>International journal of Microbiology and Mycology (IJMM)</h2>
                                                <p>International Journal of Biosciences is a globally known ISI journal with high impact factor & cross-reference indexed journal that publishes high-quality original research papers together with review articles and short communication on Biology and related to Biology.</p>

                                                <div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Short Name <span>:</span></div>
                                                        <span class="data_col__data">IJMM</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Frequency <span>:</span></div>
                                                        <span class="data_col__data">12 in a year</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2220-6655 (Print)</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2222-5234 (Online)</span>
                                                    </div>

                                                    <div class="data_col mt-2">
                                                        <div class="data_col__title">
                                                            <button class="btn btn_link" type="button"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="journal__links">
                                                    <div class="d-flex gap-3">
                                                        <a href="#">Instruction</a>
                                                        <a href="journal.html">Journal</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                        <a class="btn btn_primary" href="#">Editorial Board</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- JBES -->
                                    <div class="col">
                                        <div class="card journal">
                                            <div class="journal__img">
                                                <img width="515" height="691" src="<?php echo get_template_directory_uri(); ?>/assets/images/archives/jbes.webp" alt="jbes">
                                            </div>
                                            <div>
                                                <h2>Journal of Biodiversity and Environmental Sciences (JBES)</h2>
                                                <p>International Journal of Biosciences is a globally known ISI journal with high impact factor & cross-reference indexed journal that publishes high-quality original research papers together with review articles and short communication on Biology and related to Biology.</p>

                                                <div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Short Name <span>:</span></div>
                                                        <span class="data_col__data">JBES</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">Frequency <span>:</span></div>
                                                        <span class="data_col__data">12 in a year</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2220-6655 (Print)</span>
                                                    </div>
                                                    <div class="data_col">
                                                        <div class="data_col__title">ISSN <span>:</span></div>
                                                        <span class="data_col__data">2222-5234 (Online)</span>
                                                    </div>

                                                    <div class="data_col mt-2">
                                                        <div class="data_col__title">
                                                            <button class="btn btn_link" type="button"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="journal__links">
                                                    <div class="d-flex gap-3">
                                                        <a href="#">Instruction</a>
                                                        <a href="journal.html">Journal</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                        <a class="btn btn_primary" href="#">Editorial Board</a>
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
