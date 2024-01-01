<?php

/**
 * 
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
                <div class="w-100">
                    <div class="page_content">
                        <!-- page title -->
                        <div class="page_content__title">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <!-- page data -->

                        < class="current-issue">

                            <?php

                            $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                                FROM $wpdb->posts
                                LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 11 AND $wpdb->posts.post_status = 'publish' AND
                                $wpdb->posts.post_type = 'post' 
                                GROUP BY YEAR($wpdb->posts.post_date) 
                                ORDER BY $wpdb->posts.post_date DESC LIMIT 1");

                            foreach ($years as $year) :

                            ?>

                                <?php
                                $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
                                    FROM $wpdb->posts 
                                    LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
                                    LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                                    WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = 11 AND $wpdb->posts.post_status = 'publish' AND
                                    $wpdb->posts.post_type = 'post' AND YEAR(post_date) = '" . $year . "'
                                    GROUP BY MONTH($wpdb->posts.post_date) 
                                    ORDER BY $wpdb->posts.post_date DESC LIMIT 1");
                                foreach ($months as $month) :
                                ?>

                                <?php endforeach; ?>

                            <?php endforeach; ?>

                            <?php

                            $args = array(

                                'post_type' => 'post',
                                'category_name' => 'IJB',
                                'posts_per_page' => 10,
                                'paged' => $paged,
                                'order' => 'ASC',
                                'date_query' => array(

                                    'year' => date($year),

                                    'month' => date($month),
                                )
                            );

                            $loop = new WP_Query($args);

                            while ($loop->have_posts()) :
                                $loop->the_post();

                                require get_template_directory() . '/template-parts/journal_post_content.php';

                            endwhile; ?>

                            <?php
                            require get_template_directory() . '/template-parts/pagination_part.php';
                            ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php


get_footer();
