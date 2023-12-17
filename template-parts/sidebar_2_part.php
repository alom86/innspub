<?php

/**
 * Template part sidebar_2
 * 
 */

?>

<div class="d-none d-lg-block">
    <aside class="sidebar">
        <div class="accordion" id="accordionSidebar">
            <!-- Most Popular -->
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#most_popular" aria-expanded="true" aria-controls="most_popular">
                        Most Popular
                    </button>
                </h3>
                <div id="most_popular" class="accordion-collapse collapse show" data-bs-parent="#accordionSidebar">
                    <div class="accordion-body">
                        <div class="card_sidebar">
                            <h4>
                                <a href="#">Level of awareness and practices on solid waste</a>
                            </h4>
                            <div class="card_sidebar__meta">
                                <span class="card_sidebar__label">JBES</span>
                                <span class="card_sidebar__date">January 1, 2019</span>
                            </div>
                        </div>
                        <div class="card_sidebar">
                            <h4>
                                <a href="#">Pineapple juice supplementation activates thyroid gland and attenuates</a>
                            </h4>
                            <div class="card_sidebar__meta">
                                <span class="card_sidebar__label">IJBB</span>
                                <span class="card_sidebar__date">January 1, 2019</span>
                            </div>
                        </div>
                        <div class="card_sidebar">
                            <h4>
                                <a href="#">Seedling size and cotyledon retention have important influences</a>
                            </h4>
                            <div class="card_sidebar__meta">
                                <span class="card_sidebar__label">IJAAR</span>
                                <span class="card_sidebar__date">January 1, 2019</span>
                            </div>
                        </div>
                        <div class="card_sidebar">
                            <h4>
                                <a href="#">Pakistan food safety challenges</a>
                            </h4>
                            <div class="card_sidebar__meta">
                                <span class="card_sidebar__label">IJMM</span>
                                <span class="card_sidebar__date">January 1, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- logo_menu -->
            <?php
                require get_template_directory() . '/template-parts/logo_menu.php';
            ?>

        </div>

    </aside>
</div>