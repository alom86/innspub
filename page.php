<?php
/**
 * Template Name: Single Page
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
        <div class="section_gap">
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
                    <article>
                        <div class="page_content">
                            <!-- page title -->
                            <div class="page_content__title">
                                <h1>Why choose INNSpub</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data">
                                <div class="page_content__img bg_overlay">
                                    <img width="886" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/single_page_feature_image.webp" alt="single_page_feature_image">
                                </div>
                                <p>The International Network for Natural Sciences (INNSpub) is a reputed research journal Publisher and publishes papers professionally from 2010 to date. INNSpub is dedicated to publishing scholarly research papers and books globally and believes in sharing new scientific knowledge with scientific scholars in the field of Natural sciences, Biology, Medicine and Agriculture. All our publications are available on an online platform that concurrently belongs to many Societies, libraries, Universities and Research Institutes all over the world.</p>

                                <h2>Highlight features:</h2>
                                <ul>
                                    <li>Open access: All papers will be published as peer-reviewed open access</li>
                                    <li>Rapid publication: Papers will appear online just after acceptance (within 6 to 7 days)</li>
                                    <li>Fast and constructive peer review: INNSpub aim to complete the review within 4 days</li>
                                    <li>Continuous publication model, which allows immediate citation of articles</li>
                                    <li>High visibility: Papers will appear in different promotional media and reputed databases</li>
                                    <li>High levels of author service and support</li>
                                </ul>

                                <h2>Why Choose INNSpub:</h2>
                                <p>International Network for Natural Sciences is the leading publisher for innovative solutions to scientists' information needs and independently publishes high-quality peer-reviewed Research and Review articles, as well as Short communications, Project reports and Books for the Environmental and Biological research communities. INNSpub uses advanced technologies, innovative formats and first-class editing to provide timely and more informative production for researchers in the public and private sectors, Government agencies, Educators, experts and the general
                                    public.</p>

                                <h2><em>Publishing with the INNSpub family provides an author with a wide range of benefits:</em></h2>
                                <ul>
                                    <li>Widest introduction to Global community INNSpub strives to promote your research to a wide audience. The scientific community and the common people can have unlimited access to all published content in 'INNSpub' journals for fully free as soon as it is published on the webpage. These journals' broad readership gives authors the opportunity to convey the importance of their work to the wider science community in addition to specialists in their field. This way, an author will be famous to the Globe for his/her innovative and creative research work.</li>
                                    <li>Online manuscript submission INNSpub facilitates its authors with a state-of-the-art manuscript submission and processing system. The system provides authors, editors and publishing staff to conveniently go through all steps of manuscript processing online. Every step is recorded and status will show clear and the system will be monitored by trained editorial staff, available for user support on an immediate basis.</li>
                                    <li>Faster processing time Modern times demand that processing times are minimized so that authors are able to publish their work quickly. INNSpub has introduced an open access system enabling authors to get their work published rapidly as per their desire. For journals with paid access, the processing times will match international standards ensuring the timely publication of quality manuscripts.</li>
                                    <li>High standard review process All INNSpub Open Access journals provide a high standard of peer review, selecting original research which is high quality and relevant for its discipline. Each journal is editorially independent with its own Editor-in-Chief and Editorial Board which lead journal strategy and take publication decisions on all submissions.</li>
                                    <li>Minimum processing charges INNSpub offers to the authors the minimum rates to get their articles published online as quickly as they prefer. Authors now do not have to wait for long publishing cues and get their work published as per their desired time frame. All manuscripts are expedited through a peer-review procedure ensuring publication of only high-quality publications.</li>
                                    <li>Maximum indexing system INNSpub possesses a marketing team with hands-on experience in promoting science publications including scholarly journals and books. Building up relationships with indexing and archiving websites will ensure the maximum dispersion of published literature. Citations for high-quality papers will be ensured through indexing in agencies. Those are included in the leading abstracting and indexing services, including ISI, Medline and Scopus. Extensive reference linking via services such as Crossruff, and DOI (Digital Object Identifier)
                                        numbers, provide seamless online linking between articles and databases.</li>
                                </ul>

                                <!-- page_content__nav -->
                                <div class="page_content__nav">
                                    <a class="active" href="#">Home</a>
                                    <a href="#">Journals</a>
                                    <a href="#">Submission</a>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>

    </main>

<?php


get_footer();
