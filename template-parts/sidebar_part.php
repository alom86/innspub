<?php
/**
 * Template part sidebar
 * 
 */

?>

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
                                            <!-- for author menu -->
                                            <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'for_authors_menu',
                                                        'menu_id'        => 'for_authors-menu',
                                                        'container'      => '',
                                                        'menu_class'     => '',
                                                        'li_class'   => '',
                                                        'a_class'    => '',
                                                    )
                                                );
                                            ?>
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

                                            <!-- Downloads Menu -->
                                            <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'downloads_menu',
                                                        'menu_id'        => 'downloads-menu',
                                                        'container'      => '',
                                                        'menu_class'     => '',
                                                        'li_class'   => '',
                                                        'a_class'    => '',
                                                    )
                                                );
                                            ?>
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
                                        <!-- TODO update link -->
                                        <a href="https://innspub.dev/indexed-in" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
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