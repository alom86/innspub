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

use function PHPSTORM_META\type;

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

                                                <!-- Yearly query -->
                                                <?php
                                                // TODO change 14 category id on live
                                                $currentYear = date('Y');

                                                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                                FROM $wpdb->posts
                                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 14 AND $wpdb->posts.post_status = 'publish' AND
                                                $wpdb->posts.post_type = 'post' 
                                                GROUP BY YEAR($wpdb->posts.post_date) 
                                                ORDER BY $wpdb->posts.post_date DESC");

                                                $count = 0;

                                                foreach ($years as $year) :
                                                    $count++;
                                                ?>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#jbes_<?php echo $count; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="jbes_<?php echo $count; ?>">
                                                                <?php echo $year ?>
                                                            </button>
                                                        </h3>
                                                        <div id="jbes_<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_jbes">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                    // TODO change 14 category id on live
                                                                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
																		FROM $wpdb->posts 
																		LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
																		LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
																		WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 14 AND $wpdb->posts.post_status = 'publish' AND
																		$wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
																		GROUP BY MONTH($wpdb->posts.post_date) 
																		ORDER BY $wpdb->posts.post_date");
                                                                    foreach ($months as $month) :
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo get_month_link($year, $month); ?>?category_name=jbes">
                                                                                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'post',
                                                                                    'category_name' => 'JBES',
                                                                                    'post_status' => 'publish',
                                                                                    'year' => $year,
                                                                                    'monthnum' => $month,
                                                                                    'posts_per_page' => 1
                                                                                );
                                                                                query_posts($args);
                                                                                ?>
                                                                                <?php while (have_posts()) :
                                                                                    the_post(); ?>
                                                                                    <?php echo "Volume ";
                                                                                    the_field('volume');
                                                                                    echo " > SN. ";
                                                                                    the_field('number');
                                                                                    echo " > " . date('F', mktime(0, 0, 0, $month)) . " Issue"; ?>
                                                                                <?php endwhile; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

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
                                                <!-- Yearly query -->
                                                <?php
                                                // TODO change 11 category id on live
                                                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                                FROM $wpdb->posts
                                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 11 AND $wpdb->posts.post_status = 'publish' AND
                                                $wpdb->posts.post_type = 'post' 
                                                GROUP BY YEAR($wpdb->posts.post_date) 
                                                ORDER BY $wpdb->posts.post_date DESC");

                                                $count = 0;

                                                foreach ($years as $year) :
                                                    $count++;
                                                ?>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijb_<?php echo $count; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijb_<?php echo $count; ?>">
                                                                <?php echo $year ?>
                                                            </button>
                                                        </h3>
                                                        <div id="ijb_<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                    // TODO change 11 category id on live
                                                                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
																		FROM $wpdb->posts 
																		LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
																		LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
																		WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 11 AND $wpdb->posts.post_status = 'publish' AND
																		$wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
																		GROUP BY MONTH($wpdb->posts.post_date) 
																		ORDER BY $wpdb->posts.post_date");
                                                                    foreach ($months as $month) :
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijb">
                                                                                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'post',
                                                                                    'category_name' => 'IJB',
                                                                                    'post_status' => 'publish',
                                                                                    'year' => $year,
                                                                                    'monthnum' => $month,
                                                                                    'posts_per_page' => 1
                                                                                );
                                                                                query_posts($args);
                                                                                ?>
                                                                                <?php while (have_posts()) :
                                                                                    the_post(); ?>
                                                                                    <?php echo "Volume ";
                                                                                    the_field('volume');
                                                                                    echo " > SN. ";
                                                                                    the_field('number');
                                                                                    echo " > " . date('F', mktime(0, 0, 0, $month)) . " Issue"; ?>
                                                                                <?php endwhile; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

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
                                                <!-- Yearly query -->
                                                <?php
                                                // TODO change 10 category id on live
                                                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                                FROM $wpdb->posts
                                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 10 AND $wpdb->posts.post_status = 'publish' AND
                                                $wpdb->posts.post_type = 'post' 
                                                GROUP BY YEAR($wpdb->posts.post_date) 
                                                ORDER BY $wpdb->posts.post_date DESC");

                                                $count = 0;

                                                foreach ($years as $year) :
                                                    $count++;
                                                ?>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijaar_<?php echo $count; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijaar_<?php echo $count; ?>">
                                                                <?php echo $year ?>
                                                            </button>
                                                        </h3>
                                                        <div id="ijaar_<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijaar">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                    // TODO change 10 category id on live
                                                                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
																		FROM $wpdb->posts 
																		LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
																		LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
																		WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 10 AND $wpdb->posts.post_status = 'publish' AND
																		$wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
																		GROUP BY MONTH($wpdb->posts.post_date) 
																		ORDER BY $wpdb->posts.post_date");
                                                                    foreach ($months as $month) :
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijaar">
                                                                                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'post',
                                                                                    'category_name' => 'IJAAR',
                                                                                    'post_status' => 'publish',
                                                                                    'year' => $year,
                                                                                    'monthnum' => $month,
                                                                                    'posts_per_page' => 1
                                                                                );
                                                                                query_posts($args);
                                                                                ?>
                                                                                <?php while (have_posts()) :
                                                                                    the_post(); ?>
                                                                                    <?php echo "Volume ";
                                                                                    the_field('volume');
                                                                                    echo " > SN. ";
                                                                                    the_field('number');
                                                                                    echo " > " . date('F', mktime(0, 0, 0, $month)) . " Issue"; ?>
                                                                                <?php endwhile; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

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
                                                <!-- Yearly query -->
                                                <?php
                                                // TODO change 12 category id on live
                                                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                                FROM $wpdb->posts
                                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 12 AND $wpdb->posts.post_status = 'publish' AND
                                                $wpdb->posts.post_type = 'post' 
                                                GROUP BY YEAR($wpdb->posts.post_date) 
                                                ORDER BY $wpdb->posts.post_date DESC");

                                                $count = 0;

                                                foreach ($years as $year) :
                                                    $count++;
                                                ?>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijbb_<?php echo $count; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijbb_<?php echo $count; ?>">
                                                                <?php echo $year ?>
                                                            </button>
                                                        </h3>
                                                        <div id="ijbb_<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijbb">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                    // TODO change 10 category id on live
                                                                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
																		FROM $wpdb->posts 
																		LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
																		LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
																		WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 10 AND $wpdb->posts.post_status = 'publish' AND
																		$wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
																		GROUP BY MONTH($wpdb->posts.post_date) 
																		ORDER BY $wpdb->posts.post_date");
                                                                    foreach ($months as $month) :
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijbb">
                                                                                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'post',
                                                                                    'category_name' => 'IJBB',
                                                                                    'post_status' => 'publish',
                                                                                    'year' => $year,
                                                                                    'monthnum' => $month,
                                                                                    'posts_per_page' => 1
                                                                                );
                                                                                query_posts($args);
                                                                                ?>
                                                                                <?php while (have_posts()) :
                                                                                    the_post(); ?>
                                                                                    <?php echo "Volume ";
                                                                                    the_field('volume');
                                                                                    echo " > SN. ";
                                                                                    the_field('number');
                                                                                    echo " > " . date('F', mktime(0, 0, 0, $month)) . " Issue"; ?>
                                                                                <?php endwhile; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

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
                                                <!-- Yearly query -->
                                                <?php
                                                // TODO change 13 category id on live
                                                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                                FROM $wpdb->posts
                                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 13 AND $wpdb->posts.post_status = 'publish' AND
                                                $wpdb->posts.post_type = 'post' 
                                                GROUP BY YEAR($wpdb->posts.post_date) 
                                                ORDER BY $wpdb->posts.post_date DESC");

                                                $count = 0;

                                                foreach ($years as $year) :
                                                    $count++;
                                                ?>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <button class="accordion-button <?php echo $year == $currentYear ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#ijmm_<?php echo $count; ?>" aria-expanded="<?php echo $year == $currentYear ? 'true' : 'false' ?>" aria-controls="ijmm_<?php echo $count; ?>">
                                                                <?php echo $year ?>
                                                            </button>
                                                        </h3>
                                                        <div id="ijmm_<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $year == $currentYear ? 'show' : '' ?>" data-bs-parent="#accordion_ijmm">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                    // TODO change 13 category id on live
                                                                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
																		FROM $wpdb->posts 
																		LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
																		LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
																		WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 13 AND $wpdb->posts.post_status = 'publish' AND
																		$wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
																		GROUP BY MONTH($wpdb->posts.post_date) 
																		ORDER BY $wpdb->posts.post_date");
                                                                    foreach ($months as $month) :
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo get_month_link($year, $month); ?>?category_name=ijmm">
                                                                                <?php
                                                                                $args = array(
                                                                                    'post_type' => 'post',
                                                                                    'category_name' => 'IJMM',
                                                                                    'post_status' => 'publish',
                                                                                    'year' => $year,
                                                                                    'monthnum' => $month,
                                                                                    'posts_per_page' => 1
                                                                                );
                                                                                query_posts($args);
                                                                                ?>
                                                                                <?php while (have_posts()) :
                                                                                    the_post(); ?>
                                                                                    <?php echo "Volume ";
                                                                                    the_field('volume');
                                                                                    echo " > SN. ";
                                                                                    the_field('number');
                                                                                    echo " > " . date('F', mktime(0, 0, 0, $month)) . " Issue"; ?>
                                                                                <?php endwhile; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

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
