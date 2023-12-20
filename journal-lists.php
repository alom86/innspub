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
                                <h1>Editorial Board</h1>
                            </div>
                            <!-- page data -->
                            <div class="page_content__data truncate">
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
