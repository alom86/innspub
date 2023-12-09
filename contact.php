<?php
/**
 * Template Name: Contacts Page
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
                    <div >
                        <div class="page_content">
                            <!-- page title -->
                            <div class="page_content__title">
                                <h1>Representative offices</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="178" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact_feature_img.webp" alt="contact_feature_img">
                                </div>
                                <p>The International Network for Natural Sciences (INNSpub) are multidimensional open-access Journal gateway and Books publisher for the exploration of scientific discoveries and new research in the field of Natural sciences, Biological sciences, Agronomy, Genetics, Microbiology, Biomedicine, Herbal medicine, Traditional medicine & health care and related to other areas. These journals are fast publications intended to communicate with the scientific community quickly. It includes various types of articles such as research articles, review articles, short
                                    communications and other supplementary articles.</p>
                            </div>

                            <!-- contact type -->
                            <div class="page_content__contact_type">
                                <div>
                                    <h2>Electronic Contact</h2>
                                    <p>Lorem ipsum is a placeholder text commonly used to monstrate the visual form of a document</p>
                                    Website: <a href="www.innspub.net">www.innspub.net</a> <br>
                                    Email: <a href="mailto:info@innspub.net"> info@innspub.net</a> <em> (Support)</em>
                                </div>
                                <div>
                                    <h2>Voice Contact</h2>
                                    <p>Lorem ipsum is a placeholder text commonly used to monstrate the visual form of a document</p>
                                    <a href="callto:+8801716992866">+880 1716 992 866</a><em> (Office)</em> <br>
                                    <a href="callto:+8801716992866">+880 1716 992 866</a><em> (WhatsApp)</em>
                                </div>
                            </div>

                            <!-- corporate office -->
                            <div class="page_content__corporate_office">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/bd_flag_shape.webp" alt="bd_flag_shape">
                                <h2>Corporate office</h2>
                                <div class="d-flex flex-column">
                                    <span>Shamokal Research and Developments Network <em>(SRDN)</em></span>
                                    <em>[ International Network for Natural Sciences (INNS Pub.) ]</em>
                                </div>
                                <address><a href="#" target="_blank">House- 22 (Ground Floor),Road- 4, Block-A Monsurabad, <br> Adabor, Dhaka, BANGLADESH</a></address>
                            </div>

                            <!-- corporate offices cards -->
                            <div class="row row-cols-1 g-3 g-md-4 row-cols-md-2 mb-4">
                                <div class="col">
                                    <div class="card-office">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/corporate_office.webp" alt="corporate_office">
                                        <div>
                                            <h2>Corporate Office</h2>
                                            <div class="d-flex flex-column">
                                                <span>Shamokal Research and Developments Network <em>(SRDN)</em></span>
                                                <em>[ International Network for Natural Sciences (INNS Pub.) ]</em>
                                            </div>
                                            <address>Kuala Lumpur, MALAYSIA</address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-office">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/uk_office.webp" alt="uk_office">
                                        <div>
                                            <h2>UK Office <em>(Editorial office)</em></h2>
                                            <div class="d-flex flex-column">
                                                <span>Shamokal Research and Developments Network <em>(SRDN)</em></span>
                                                <em>[ International Network for Natural Sciences (INNS Pub.) ]</em>
                                            </div>
                                            <address>2nd Floor, College House 17,King Edwards Road, Ruislip, London,HA4 7AE, UK</address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-office">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/publisher_office.webp" alt="publisher_office">
                                        <div>
                                            <h2>Management and Publisher Office</h2>
                                            <div class="d-flex flex-column">
                                                <span>International Network for Natural Sciences <em>(INNS Pub)</em></span>
                                            </div>
                                            <address>Holding: B-280 (Ground floor) Kadirgonj, Boalia, Rajshahi, BANGLADESH</address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-office">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/usa_office.webp" alt="usa_office">
                                        <div>
                                            <h2>USA Office</h2>
                                            <div class="d-flex flex-column">
                                                <span>Shamokal Research and Developments Network <em>(SRDN)</em> </span>
                                                <em>[ International Network for Natural Sciences (INNS Pub.) ]</em>
                                            </div>
                                            <address>210 Whitehall Road, Athens, GA 30605, USA</address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-office">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/philippines_office.webp" alt="philippines_office">
                                        <div>
                                            <h2>Correspondent of Philippines</h2>
                                            <div class="d-flex flex-column">
                                                <em>Gilbert C. Magulod Jr., PhD</em>
                                                <span>Knowledge Technology Management Office</span>
                                                <span>University Research Development Office</span>
                                            </div>
                                            <address>Cagayan State University, Tuguegarao City, PHILIPPINES</address>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        </section>

    </main>

<?php


get_footer();
