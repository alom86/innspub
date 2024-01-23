<?php

/**
 * Template Name: Journal library page
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

$currentYear = date("Y");
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
                <div class="w-100">
                    <div class="page_content">
                        <!-- page title -->
                        <div class="page_content__title">
                            <h1><?php echo the_title(); ?></h1>
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

                                                <!-- Yearly and Monthly query -->
                                                <?php
                                                $args = array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'post',
                                                    'category_name' => 'JBES',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC'
                                                );

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) :
                                                    $years_months = array();
                                                    while ($query->have_posts()) : $query->the_post();
                                                        $year = get_the_date('Y');
                                                        $month = get_the_date('m');
                                                        $years_months[$year][] = $month;
                                                    endwhile;

                                                    // Loop through years
                                                    foreach ($years_months as $year => $months) :
                                                ?>
                                                        <div class="accordion-item">
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#jbes_<?php echo $year; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="jbes_<?php echo $year; ?>">
                                                                    <?php echo $year; ?>
                                                                </button>
                                                            </h3>
                                                            <div id="jbes_<?php echo $year; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_jbes">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <?php
                                                                        // Loop through months of the current year
                                                                        foreach (array_unique($months) as $month) :
                                                                        ?>
                                                                            <li>
                                                                                <a href="<?php echo get_month_link($year, $month); ?>?category_name=jbes">
                                                                                    <?php
                                                                                    $args_single_post = array(
                                                                                        'post_type' => 'post',
                                                                                        'category_name' => 'JBES',
                                                                                        'year' => $year,
                                                                                        'monthnum' => $month,
                                                                                        'posts_per_page' => 1,
                                                                                        'order' => 'ASC',
                                                                                    );
                                                                                    $single_post_query = new WP_Query($args_single_post);
                                                                                    if ($single_post_query->have_posts()) :
                                                                                        while ($single_post_query->have_posts()) : $single_post_query->the_post();
                                                                                            echo "Volume " . get_field('volume') . " > N. " . get_field('number') . " > " . date('F', mktime(0, 0, 0, $month)) . " Issue";
                                                                                        endwhile;
                                                                                    endif;
                                                                                    wp_reset_postdata();
                                                                                    ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

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

                                                <!-- Yearly and Monthly query -->
                                                <?php
                                                $args = array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'post',
                                                    'category_name' => 'IJB',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC'
                                                );

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) :
                                                    $years_months = array();
                                                    while ($query->have_posts()) : $query->the_post();
                                                        $year = get_the_date('Y');
                                                        $month = get_the_date('m');
                                                        $years_months[$year][] = $month;
                                                    endwhile;

                                                    // Loop through years
                                                    foreach ($years_months as $year => $months) :
                                                ?>
                                                        <div class="accordion-item">
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijb_<?php echo $year; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijb_<?php echo $year; ?>">
                                                                    <?php echo $year; ?>
                                                                </button>
                                                            </h3>
                                                            <div id="ijb_<?php echo $year; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijb">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <?php
                                                                        // Loop through months of the current year
                                                                        foreach (array_unique($months) as $month) :
                                                                        ?>
                                                                            <li>
                                                                                <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijb">
                                                                                    <?php
                                                                                    $args_single_post = array(
                                                                                        'post_type' => 'post',
                                                                                        'category_name' => 'IJB',
                                                                                        'year' => $year,
                                                                                        'monthnum' => $month,
                                                                                        'posts_per_page' => 1,
                                                                                        'order' => 'ASC',
                                                                                    );
                                                                                    $single_post_query = new WP_Query($args_single_post);
                                                                                    if ($single_post_query->have_posts()) :
                                                                                        while ($single_post_query->have_posts()) : $single_post_query->the_post();
                                                                                            echo "Volume " . get_field('volume') . " > SN. " . get_field('number') . " > " . date('F', mktime(0, 0, 0, $month)) . " Issue";
                                                                                        endwhile;
                                                                                    endif;
                                                                                    wp_reset_postdata();
                                                                                    ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

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

                                                <!-- Yearly and Monthly query -->
                                                <?php
                                                $args = array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'post',
                                                    'category_name' => 'IJAAR',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC'
                                                );

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) :
                                                    $years_months = array();
                                                    while ($query->have_posts()) : $query->the_post();
                                                        $year = get_the_date('Y');
                                                        $month = get_the_date('m');
                                                        $years_months[$year][] = $month;
                                                    endwhile;

                                                    // Loop through years
                                                    foreach ($years_months as $year => $months) :
                                                ?>
                                                        <div class="accordion-item">
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijaar_<?php echo $year; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijaar_<?php echo $year; ?>">
                                                                    <?php echo $year; ?>
                                                                </button>
                                                            </h3>
                                                            <div id="ijaar_<?php echo $year; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijaar">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <?php
                                                                        // Loop through months of the current year
                                                                        foreach (array_unique($months) as $month) :
                                                                        ?>
                                                                            <li>
                                                                                <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijaar">
                                                                                    <?php
                                                                                    $args_single_post = array(
                                                                                        'post_type' => 'post',
                                                                                        'category_name' => 'IJAAR',
                                                                                        'year' => $year,
                                                                                        'monthnum' => $month,
                                                                                        'posts_per_page' => 1,
                                                                                        'order' => 'ASC',
                                                                                    );
                                                                                    $single_post_query = new WP_Query($args_single_post);
                                                                                    if ($single_post_query->have_posts()) :
                                                                                        while ($single_post_query->have_posts()) : $single_post_query->the_post();
                                                                                            echo "Volume " . get_field('volume') . " > SN. " . get_field('number') . " > " . date('F', mktime(0, 0, 0, $month)) . " Issue";
                                                                                        endwhile;
                                                                                    endif;
                                                                                    wp_reset_postdata();
                                                                                    ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

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

                                                <!-- Yearly and Monthly query -->
                                                <?php
                                                $args = array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'post',
                                                    'category_name' => 'IJBB',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC'
                                                );

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) :
                                                    $years_months = array();
                                                    while ($query->have_posts()) : $query->the_post();
                                                        $year = get_the_date('Y');
                                                        $month = get_the_date('m');
                                                        $years_months[$year][] = $month;
                                                    endwhile;

                                                    // Loop through years
                                                    foreach ($years_months as $year => $months) :
                                                ?>
                                                        <div class="accordion-item">
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijbb_<?php echo $year; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijbb_<?php echo $year; ?>">
                                                                    <?php echo $year; ?>
                                                                </button>
                                                            </h3>
                                                            <div id="ijbb_<?php echo $year; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijbb">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <?php
                                                                        // Loop through months of the current year
                                                                        foreach (array_unique($months) as $month) :
                                                                        ?>
                                                                            <li>
                                                                                <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijbb">
                                                                                    <?php
                                                                                    $args_single_post = array(
                                                                                        'post_type' => 'post',
                                                                                        'category_name' => 'IJBB',
                                                                                        'year' => $year,
                                                                                        'monthnum' => $month,
                                                                                        'posts_per_page' => 1,
                                                                                        'order' => 'ASC',
                                                                                    );
                                                                                    $single_post_query = new WP_Query($args_single_post);
                                                                                    if ($single_post_query->have_posts()) :
                                                                                        while ($single_post_query->have_posts()) : $single_post_query->the_post();
                                                                                            echo "Volume " . get_field('volume') . " > SN. " . get_field('number') . " > " . date('F', mktime(0, 0, 0, $month)) . " Issue";
                                                                                        endwhile;
                                                                                    endif;
                                                                                    wp_reset_postdata();
                                                                                    ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

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
                                                <!-- Yearly and Monthly query -->
                                                <?php
                                                $args = array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'post',
                                                    'category_name' => 'IJMM',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC'
                                                );

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) :
                                                    $years_months = array();
                                                    while ($query->have_posts()) : $query->the_post();
                                                        $year = get_the_date('Y');
                                                        $month = get_the_date('m');
                                                        $years_months[$year][] = $month;
                                                    endwhile;

                                                    // Loop through years
                                                    foreach ($years_months as $year => $months) :
                                                ?>
                                                        <div class="accordion-item">
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijmm_<?php echo $year; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijmm_<?php echo $year; ?>">
                                                                    <?php echo $year; ?>
                                                                </button>
                                                            </h3>
                                                            <div id="ijmm_<?php echo $year; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijmm">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <?php
                                                                        // Loop through months of the current year
                                                                        foreach (array_unique($months) as $month) :
                                                                        ?>
                                                                            <li>
                                                                                <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijmm">
                                                                                    <?php
                                                                                    $args_single_post = array(
                                                                                        'post_type' => 'post',
                                                                                        'category_name' => 'IJMM',
                                                                                        'year' => $year,
                                                                                        'monthnum' => $month,
                                                                                        'posts_per_page' => 1,
                                                                                        'order' => 'ASC',
                                                                                    );
                                                                                    $single_post_query = new WP_Query($args_single_post);
                                                                                    if ($single_post_query->have_posts()) :
                                                                                        while ($single_post_query->have_posts()) : $single_post_query->the_post();
                                                                                            echo "Volume " . get_field('volume') . " > SN. " . get_field('number') . " > " . date('F', mktime(0, 0, 0, $month)) . " Issue";
                                                                                        endwhile;
                                                                                    endif;
                                                                                    wp_reset_postdata();
                                                                                    ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

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
