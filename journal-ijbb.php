<?php

/**
 * Template Name: Journal IJBB
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

                        <!-- journal details -->
                        <?php
                        $journalq = array(
                            'post_type' => 'journal',
                            'posts_per_page' => 1,
                            'category_name' => 'IJBB',
                            'order' => 'ASC',
                        );
                        $journalp = new WP_Query($journalq);
                        if ($journalp->have_posts()) :
                            $countp = 0;
                            while ($journalp->have_posts()) :
                                $journalp->the_post();
                                global $post; ?>

                                <?php
                                require get_template_directory() . '/template-parts/journal_detail_part.php';
                                ?>

                        <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>

                        <!-- feature cards -->
                        <?php
                        $journalq = array(
                            'post_type' => 'journal',
                            'category_name'  => 'IJBB',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $journalp = new WP_Query($journalq);
                        if ($journalp->have_posts()) :
                            $countp = 0;
                            while ($journalp->have_posts()) :
                                $countp++;
                                $journalp->the_post();
                                global $post; ?>

                                <?php
                                require get_template_directory() . '/template-parts/journal_feature_card.php';
                                ?>

                        <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>


                        <!-- Editor in-Chief -->
                        <?php
                        $args = array(
                            'post_type'      => 'editor',
                            'post_status'    => 'publish',
                            'tax_query'      => array(
                                'relation' => 'AND', // 'AND' if you want posts that belong to both categories
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => 'IJBB'
                                ),
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => 'Editor in-Chief'
                                )
                            )
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>

                                <!-- Your loop content here -->
                                <?php
                                require get_template_directory() . '/template-parts/editor_profile_part.php';
                                ?>

                        <?php }
                            wp_reset_postdata();
                        }
                        ?>



                        <!-- editor slider -->
                        <div class="swiper journal_editor mb_60 slider_maxw">
                            <div class="swiper-wrapper">

                                <?php

                                $args = array(
                                    'post_type'      => 'editor',
                                    'category_name'  => 'IJBB',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 8,
                                    'tax_query'      => array(
                                        'relation' => 'AND', // Ensure posts belong to both 'IJBB' and other specified categories
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'slug',
                                            'terms'    => 'Editor in-Chief',
                                            'operator' => 'NOT IN' // Exclude posts from 'Editor in-Chief'
                                        ),
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'slug',
                                            'terms'    => array('Managing Editor', 'Co-editor', 'Editor'),
                                        )
                                    )
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>

                                        <!-- Your loop content here -->
                                        <div class="swiper-slide">
                                            <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                                <div class="profile__img m-xxl-0 ">
                                                    <img src="
                                                    <?php if (!empty(the_field('profile_photo'))) :
                                                        the_field('profile_photo');
                                                    endif; ?>
                                                    " alt="
                                                    <?php if (!empty(the_field('name'))) :
                                                        the_field('name');
                                                    endif; ?>
                                                    ">
                                                </div>
                                                <div class="d-flex flex-column align-items-xxl-start">
                                                    <a class="profile__name" href="<?php the_permalink(); ?>">
                                                        <?php if (!empty(the_field('name'))) :
                                                            the_field('name');
                                                        endif; ?>
                                                    </a>
                                                    <span class="d-block">(
                                                        <?php if (!empty(the_field('job_title'))) :
                                                            the_field('job_title');
                                                        endif; ?>
                                                        )</span>

                                                    <h4>
                                                        <?php if (!empty(the_field('country'))) :
                                                            the_field('country');
                                                        endif; ?>
                                                    </h4>
                                                    <div class="social ms-xxl-0">
                                                        <?php
                                                        require get_template_directory() . '/template-parts/profile_social_part.php';
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <?php }
                                    wp_reset_postdata();
                                }
                                ?>

                                <!-- slide -->
                                <div class="swiper-slide">
                                    <div class="card profile card_more flex-xxl-row gap-xxl-4 px-xxl-4">
                                        <div class="d-flex flex-column align-items-center justify-content-center gap-3 gap-md-4">
                                            <h4 class="my-0">Click to see all members!</h4>

                                            <?php
                                            $journalq = array(
                                                'post_type' => 'journal',
                                                'category_name'  => 'IJBB',
                                                'posts_per_page' => 1,
                                                'order' => 'ASC',
                                            );
                                            $journalp = new WP_Query($journalq);
                                            if ($journalp->have_posts()) :
                                                $countp = 0;
                                                while ($journalp->have_posts()) :
                                                    $countp++;
                                                    $journalp->the_post();
                                                    global $post; ?>

                                                    <a class="btn btn_primary" href="
                                                    <?php if (!empty(the_field('journal_editorial_board_button_url'))) :
                                                        the_field('journal_editorial_board_button_url');
                                                    endif; ?>
                                                    ">View More <span class="sr-only">read more link button</span></a>

                                            <?php
                                                endwhile;
                                            endif;
                                            wp_reset_query();
                                            ?>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination d-lg-none"></div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev d-none d-lg-flex"></div>
                            <div class="swiper-button-next d-none d-lg-flex"></div>
                        </div>

                        <!-- published papers -->
                        <div class="current-issue">
                            <h2 class="section_title">Published Paper</h2>
                            <div class="page_content__title position-relative justify-content-between gap-3 mb-0 h-auto">
                                <h2><?php the_title(); ?></h2>
                                <div class="filter" id="journal_filter">
                                    <!-- TODO filter pagination -->
                                    <select class="form-select" aria-label="journal_filter" data-category-name="IJBB">
                                        <option value="">Articles</option>
                                        <option value="post_views_count" selected>Most Read</option>
                                        <option value="dc">Most Download</option>
                                    </select>
                                </div>
                            </div>

                            <div class="show_article_post">

                                <?php
                                // Get the ID of the current post
                                $current_post_id = get_the_ID();

                                $paged = get_query_var("paged") ? get_query_var("paged") : 1;

                                $args = array(
                                    'post_type'      => 'post',
                                    'category_name'  => sanitize_text_field('IJBB'),
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10,
                                    'orderby'       => 'post_views_count',
                                    'meta_key'        => 'post_views_count',
                                    'order'          => 'DESC',
                                    'paged'          => $paged,
                                    'post__not_in'   => array($current_post_id)  // Exclude the current post
                                );

                                $articles = new WP_Query($args);

                                if ($articles->have_posts()) :
                                    while ($articles->have_posts()) :
                                        $articles->the_post();
                                        require get_template_directory() . '/template-parts/journal_post_content.php';
                                    endwhile;

                                    // Pagination
                                    require get_template_directory() . '/template-parts/pagination_journal_part.php';

                                endif;

                                // Reset post data
                                wp_reset_postdata();

                                ?>

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
