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
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'sidebar_direct_links_menu',
                        'menu_id'        => 'sidebar_direct_links-menu',
                        'container'      => '',
                        'menu_class'     => '',
                        'li_class'   => '',
                        'a_class'    => '',
                    )
                );
                ?>
            </div>

            <!-- logo_menu -->
            <?php
                require get_template_directory() . '/template-parts/logo_menu.php';
            ?>

        </div>
    </aside>
</div>