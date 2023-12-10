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
                    <?php
                        require get_template_directory() . '/template-parts/sidebar_part.php';
                    ?>

                    <!-- page content -->
                    <div>
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
