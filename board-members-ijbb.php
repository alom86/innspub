<?php

/**
 * Template Name: Board Members IJBB
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


                        <!-- Co-Editor -->
                        <div class="page_content__editor">
                            <div class="title">
                                <h2>Co-Editor</h2>
                            </div>
                            <div class="row g-4 row-cols-1 row-cols-sm-2">

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
                                            'terms'    => array('Co-editor'),
                                        )
                                    )
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>

                                        <!-- Your loop content here -->
                                        <div class="col">
                                            <!-- big wide card -->
                                            <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                                <div class="profile__img m-xxl-0 ">
                                                    <img width="160" height="160" src="
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

                                                    <h3>
                                                        <?php if (!empty(the_field('country'))) :
                                                            the_field('country');
                                                        endif; ?>
                                                    </h3>
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

                            </div>
                        </div>


                        <!-- Managing Editor -->
                        <div class="page_content__editor">
                            <div class="title">
                                <h2>Managing Editor</h2>
                            </div>

                            <div class="row g-4 row-cols-1 row-cols-sm-2">

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
                                            'terms'    => array('Managing Editor'),
                                        )
                                    )
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>

                                        <!-- Your loop content here -->
                                        <div class="col">
                                            <!-- big wide card -->
                                            <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                                <div class="profile__img m-xxl-0 ">
                                                    <img width="160" height="160" src="
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

                                                    <h3>
                                                        <?php if (!empty(the_field('country'))) :
                                                            the_field('country');
                                                        endif; ?>
                                                    </h3>
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

                            </div>
                        </div>

                        <!-- Editor / Reviewer -->
                        <div class="page_content__editor">
                            <div class="title">
                                <h2>Editor / Reviewer</h2>
                            </div>

                            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-3">

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
                                            'terms'    => array('Editor'),
                                        )
                                    )
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>

                                        <!-- Your loop content here -->
                                        <div class="col">
                                            <div class="card profile">
                                                <div class="profile__img">
                                                    <img width="160" height="160" src="
                                                    <?php if (!empty(the_field('profile_photo'))) :
                                                        the_field('profile_photo');
                                                    endif; ?>
                                                    " alt="
                                                    <?php if (!empty(the_field('name'))) :
                                                        the_field('name');
                                                    endif; ?>
                                                    ">
                                                </div>
                                                <a class="profile__name" href="<?php the_permalink(); ?>">
                                                    <?php if (!empty(the_field('name'))) :
                                                        the_field('name');
                                                    endif; ?>
                                                </a>
                                                <span>(Associate Professor)</span>

                                                <h3>Canada</h3>
                                                <div class="social">
                                                    <?php
                                                    require get_template_directory() . '/template-parts/profile_social_part.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                <?php }
                                    wp_reset_postdata();
                                }
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
