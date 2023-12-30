<?php

/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

get_header();
?>

<!-- Main Content -->
<main>
    <!-- Banner section -->
    <h1 class="sr-only"><?php bloginfo('name'); ?> | INNS Pubs.</h1>
    <section class="banner d-xl-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-end">
            <div class="banner__content">
                <div class="banner__content_item issue" data-aos="fade-up">
                    <span class="banner__content_amount">
                        <?php 
                            $issue_value = get_field('issue_value', 'option'); // Fetch the ACF value

                            if ($issue_value): // If ACF field has a value
                            ?>
                                <?php echo $issue_value; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                60
                            <?php endif;
                        ?>
                        +
                    </span>
                    <h2 class="banner__content_title">
                        <?php 
                            $issue_title = get_field('issue_title', 'option'); // Fetch the ACF value

                            if ($issue_title): // If ACF field has a value
                            ?>
                                <?php echo $issue_title; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                Issue Released
                            <?php endif;
                        ?>
                    </h2>
                </div>
                <div class="banner__content_item involve" data-aos="fade-up">
                    <span class="banner__content_amount">
                        <?php 
                            $involve_value = get_field('involve_value', 'option'); // Fetch the ACF value

                            if ($involve_value): // If ACF field has a value
                            ?>
                                <?php echo $involve_value; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                40
                            <?php endif;
                        ?>
                        +
                    </span>
                    <h2 class="banner__content_title">
                        <?php 
                            $involve_title = get_field('involve_title', 'option'); // Fetch the ACF value

                            if ($involve_title): // If ACF field has a value
                            ?>
                                <?php echo $involve_title; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                Involve Universities
                            <?php endif;
                        ?>
                    </h2>
                </div>
                <div class="banner__content_item global" data-aos="fade-up">
                    <span class="banner__content_amount">
                        <?php 
                            $global_reviewer_value = get_field('global_reviewer_value', 'option'); // Fetch the ACF value

                            if ($global_reviewer_value): // If ACF field has a value
                            ?>
                                <?php echo $global_reviewer_value; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                100
                            <?php endif;
                        ?>
                        +
                    </span>
                    <h2 class="banner__content_title">
                        <?php 
                            $reviewer_title = get_field('reviewer_title', 'option'); // Fetch the ACF value

                            if ($reviewer_title): // If ACF field has a value
                            ?>
                                <?php echo $reviewer_title; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                Global Reviewer
                            <?php endif;
                        ?>
                    </h2>
                </div>
                <div class="banner__content_item happy" data-aos="fade-up">
                    <span class="banner__content_amount">
                        <?php 
                            $authors_value = get_field('authors_value', 'option'); // Fetch the ACF value

                            if ($authors_value): // If ACF field has a value
                            ?>
                                <?php echo $authors_value; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                60
                            <?php endif;
                        ?>
                        +
                    </span>
                    <h2 class="banner__content_title">
                        <?php 
                            $authors_title = get_field('authors_title', 'option'); // Fetch the ACF value

                            if ($authors_title): // If ACF field has a value
                            ?>
                                <?php echo $authors_title; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                Happy Authors
                            <?php endif;
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>


    <!-- About section -->
    <section class="about section_gap">
        <div class="container position-relative">
            <div class="row g-5 row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="about__content">
                        <h2><?php esc_html(the_field('habout_title', 'option')); ?></h2>
                        <p><?php esc_html(the_field('habout_content', 'option')); ?></p>
                    </div>
                    <div class="about__content">
                        <h2>
                            <?php 
                                $unique_features_title = get_field('unique_features_title', 'option'); // Fetch the ACF value

                                if ($unique_features_title): // If ACF field has a value
                                ?>
                                    <?php echo $unique_features_title; ?>
                                <?php else: // If ACF field is empty or doesn't have a value
                                ?>
                                    Unique features
                                <?php endif;
                            ?>
                        </h2>
                        <?php 
                            $unique_features_list = get_field('unique_features_list', 'option'); // Fetch the ACF value

                            if ($unique_features_list): // If ACF field has a value
                            ?>
                                <?php echo $unique_features_list; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                            <ul>
                                <li>Fast-track peer-reviewed by international experts</li>
                                <li>Continuous and Fast nature publications</li>
                                <li>Open access for facilitating with a higher number of citations</li>
                                <li>Covered by renowned abstracting and indexing services</li>
                                <li>All IJB articles are assigned to CrossRef DOI number</li>
                            </ul>
                            <?php endif;
                        ?>
                        
                    </div>
                    <a class="btn btn_primary" href="<?php esc_url(the_field('habout_btnurl', 'option')); ?>"><?php esc_html(the_field('habout_btn', 'option')); ?></a>
                </div>

                <div class="col">
                    <div class="about__content">
                        <h2><?php esc_html(the_field('faqs_title', 'option')); ?></h2>

                        <div class="accordion accordion_home" id="accordionFAQ">

                            <?php if (have_rows('faqu_group', 'option')) : ?>
                                <?php $fcounts = 0;
                                while (have_rows('faqu_group', 'option')) : the_row();
                                    $fcounts++; ?>

                                    <div class="accordion-item">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button <?php echo $fcounts == 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq_<?php echo  esc_attr($fcounts); ?>" aria-expanded="<?php echo $fcounts == 1 ? 'true' : 'false' ?>" aria-controls="faq_<?php echo  esc_attr($fcounts); ?>">
                                                <?php if (!empty(the_sub_field('faqs_questin'))) : esc_html(the_sub_field('faqs_questin'));
                                                endif; ?>
                                            </button>
                                        </h3>
                                        <div id="faq_<?php echo  esc_attr($fcounts); ?>" class="accordion-collapse collapse <?php echo $fcounts == 1 ? 'show' : '' ?>" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <?php if (!empty(the_sub_field('faqs_answer'))) : esc_html(the_sub_field('faqs_answer'));
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                    if ($fcounts == 6) {
                                        break;
                                    }
                                endwhile;
                                ?>
                            <?php endif; ?>

                        </div>
                    </div>

                    <a class="btn btn_secondary" href="<?php esc_html(the_field('faqs_more_button_url', 'option')); ?>"><?php esc_html_e('View More', 'innspub'); ?><span class="sr-only">read more link button</span></a>
                </div>
            </div>
            <img class="about__bg_shap" src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/about_bg.webp" alt="about_bg">
        </div>
    </section>


    <!-- Feature & author -->
    <section class="section_gap">
        <div class="container">
            <!-- feature -->
            <div class="feature">
                <h2>Features</h2>
                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-4">
                    
                    <?php
                    $authorss         = new WP_Query(array(
                        'post_type' => 'feature',
                        'posts_per_page' => 4,
                        'orderby'        => 'DESC'
                    ));
                    while ($authorss->have_posts()) :
                        $authorss->the_post();
                    ?>

                        <div class="col">
                            <div class="card">
                                <div class="card__icon">
                                    <!-- <i class="fa-solid fa-globe"></i> -->
                                    <?php the_post_thumbnail(); ?>
                                    <img src="<?php esc_url(the_field('delivery_hover_icon')); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <a class="btn btn_secondary" href="<?php if (!empty('delivery_button_url')) : esc_url(the_field('delivery_button_url')); endif; ?>"><?php if (!empty('delivery_button_text')) : esc_url(the_field('delivery_button_text')); endif; ?></a>
                            </div>
                        </div>
                    
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                    
                
                </div>
            </div>

            <!-- author -->
            <div class="author">
                <h2>For authors</h2>
                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-4">

                    <?php
                    $authorss         = new WP_Query(array(
                        'post_type' => 'authors',
                        'posts_per_page' => 4,
                        'orderby'        => 'DESC'
                    ));
                    while ($authorss->have_posts()) :
                        $authorss->the_post();
                    ?>
                        <div class="col">
                            <div class="card">
                                <div class="card__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <ul>
                                    <?php if (!empty('author_text_one')) : ?>
                                        <li><?php esc_html(the_field('author_text_one')); ?></li>
                                    <?php endif; ?>
                                    <?php if (!empty('author_text_two')) : ?>
                                        <li><?php esc_html(the_field('author_text_two')); ?></li>
                                    <?php endif; ?>
                                    <?php if (!empty('author_text_three')) : ?>
                                        <li><?php esc_html(the_field('author_text_three')); ?></li>
                                    <?php endif; ?>
                                </ul>

                                <a class="btn btn_secondary" href="<?php if (!empty(the_field('button_url'))) : the_field('button_url'); endif;  ?>"><?php if (!empty(the_field('button_text'))) : the_field('button_text'); endif;  ?></a>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </div>
    </section>


    <!-- Why choose us -->
    <section class="why_choose">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="why_choose__cards mb-4">

                        <?php if (have_rows('about_left', 'option')) : ?>
                            <?php while (have_rows('about_left', 'option')) : the_row(); ?>
                                <div class="why_choose__card">
                                    <div class="why_choose__icon">
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                    </div>
                                    <div class="why_choose__text">
                                        <h3><?php the_sub_field('about_left_title'); ?></h3>
                                        <span><?php the_sub_field('about_left_numbers'); ?>+</span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col">
                    <h2><?php the_field('choose_section_right', 'option'); ?></h2>
                    <ul>

                        <?php if (have_rows('choose_right_group_content', 'option')) : ?>
                            <?php while (have_rows('choose_right_group_content', 'option')) : the_row(); ?>
                                <li><?php the_sub_field('choose_text_1'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Announcements & Global Editors -->
    <section class="section_gap bg-white px-0">
        <!-- Announcements Slider -->
        <div class="container position-relative mb-5">
            <div class="swiper announcements">
                <h2 class="ps-3 ps-sm-0">Announcements</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    $authorss         = new WP_Query(array(
                        'post_type' => 'announcement',
                        'posts_per_page' => 4,
                        'orderby'        => 'DESC'
                    ));
                    while ($authorss->have_posts()) :
                        $authorss->the_post();
                    ?>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <ul>
                                <?php if (!empty('first_announcement')) : ?>
                                    <li><?php esc_html(the_field('first_announcement')); ?></li>
                                <?php endif; ?>
                                <?php if (!empty('second_announcement')) : ?>
                                    <li><?php esc_html(the_field('second_announcement')); ?></li>
                                <?php endif; ?>
                                <?php if (!empty('third_announcement')) : ?>
                                    <li><?php esc_html(the_field('third_announcement')); ?></li>
                                <?php endif; ?>
                            </ul>

                            <a class="btn btn_secondary" href="<?php if (!empty(the_field('announce_button_url'))) : the_field('announce_button_url'); endif;  ?>"><?php if (!empty(the_field('announce_button_text'))) : the_field('announce_button_text'); endif;  ?></a>
                        </div>
                    </div>
                    
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination d-lg-none"></div>
                <!-- navigation buttons -->
                <div class="swiper-button-prev d-none d-lg-flex"></div>
                <div class="swiper-button-next d-none d-lg-flex"></div>
            </div>

        </div>

        <!-- Global Editors Slider -->
        <div class="container position-relative">
            <div class="swiper global_editor_home">
                <h2 class="ps-3 ps-sm-0">Global Editors</h2>
                <!-- Additional required wrapper -->

                <?php
                require get_template_directory() . '/template-parts/global_editor_slider.php';
                ?>

            </div>

        </div>
    </section>


    <!-- We have -->
    <section class="we_have section_gap">
        <div class="container">
            <div class="row g-4 g-md-5 flex-lg-row-reverse row-cols-1 row-cols-lg-2">
                <div class="col d-lg-flex align-items-center">
                    <img width="720" height="315" src="
                        <?php 
                            $counter_up_image = get_field('counter_up_image', 'option'); // Fetch the ACF value

                            if ($counter_up_image): // If ACF field has a value
                            ?>
                                <?php echo $counter_up_image; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                <?php echo get_template_directory_uri(); ?>/assets/images/we_have/we_have_bg_image.webp
                            <?php endif;
                        ?>
                    " alt="we_have_bg_image">

                </div>
                <div class="col">
                    <h2>
                        <?php 
                            $counter_up_main_title = get_field('counter_up_main_title', 'option'); // Fetch the ACF value

                            if ($counter_up_main_title): // If ACF field has a value
                            ?>
                                <?php echo $counter_up_main_title; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                A title that engages the visitors
                            <?php endif;
                        ?>
                    </h2>
                    <p>
                        <?php 
                            $counter_up_description = get_field('counter_up_description', 'option'); // Fetch the ACF value

                            if ($counter_up_description): // If ACF field has a value
                            ?>
                                <?php echo $counter_up_description; ?>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                Is a sales copy really omnipotent? Is there a universal formula for writing copy that will definitely lead to a sale?
                            <?php endif;
                        ?>
                    </p>
                    <div class="we_have__cards">

                        <?php if (have_rows('counter_up', 'option')) : ?>
                            <?php while (have_rows('counter_up', 'option')) : the_row(); ?>
                                <div class="we_have__card">
                                    <span><?php the_sub_field('counter_up_number'); ?>+</span>
                                    <h3><?php the_sub_field('counter_up_title'); ?></h3>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Latest Papers -->
    <section class="section_gap">
        <div class="container">
            <div class="layout_sidebar">
                <!-- sidebar -->
                <?php
                require get_template_directory() . '/template-parts/sidebar_2_part.php';
                ?>

                <!-- Latest Papers Tabs -->
                <div class="w-100">
                    <h2>Latest Papers</h2>

                    <div class="nav_tabs">
                        <div class="tab_select">
                            <button class="btn d-md-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                IJAAR Publication
                            </button>
                            <ul class="nav nav-tabs dropdown-menu" id="publicationTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="ijaar-tab" data-bs-toggle="tab" data-bs-target="#ijaar-tab-pane" type="button" role="tab" aria-controls="ijaar-tab-pane" aria-selected="true">IJAAR Publication</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ijbb-tab" data-bs-toggle="tab" data-bs-target="#ijbb-tab-pane" type="button" role="tab" aria-controls="ijbb-tab-pane" aria-selected="false">IJBB Publication</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ijb-tab" data-bs-toggle="tab" data-bs-target="#ijb-tab-pane" type="button" role="tab" aria-controls="ijb-tab-pane" aria-selected="false">IJB Publication</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ijmm-tab" data-bs-toggle="tab" data-bs-target="#ijmm-tab-pane" type="button" role="tab" aria-controls="ijmm-tab-pane" aria-selected="false">IJMM Publication</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="jbes-tab" data-bs-toggle="tab" data-bs-target="#jbes-tab-pane" type="button" role="tab" aria-controls="jbes-tab-pane" aria-selected="false">JBES Publication</button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="publicationTabContent">
                            <!-- IJAAR Publication -->
                            <div class="tab-pane fade show active" id="ijaar-tab-pane" role="tabpanel" aria-labelledby="ijaar-tab" tabindex="0">

                                <?php
                                $journalq = array(
                                    'post_type' => 'post',
                                    'category_name'  => 'IJAAR',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>

                                        <!-- item -->
                                        <?php
                                        require get_template_directory() . '/template-parts/home_article_card.php';
                                        ?>

                                <?php
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- IJBB Publication -->
                            <div class="tab-pane fade" id="ijbb-tab-pane" role="tabpanel" aria-labelledby="ijbb-tab" tabindex="0">

                                <?php
                                $journalq = array(
                                    'post_type' => 'post',
                                    'category_name'  => 'IJBB',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>

                                        <!-- item -->
                                        <?php
                                        require get_template_directory() . '/template-parts/home_article_card.php';
                                        ?>

                                <?php
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- IJB Publication -->
                            <div class="tab-pane fade" id="ijb-tab-pane" role="tabpanel" aria-labelledby="ijb-tab" tabindex="0">

                                <?php
                                $journalq = array(
                                    'post_type' => 'post',
                                    'category_name'  => 'IJB',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>

                                        <!-- item -->
                                        <?php
                                        require get_template_directory() . '/template-parts/home_article_card.php';
                                        ?>

                                <?php
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- IJMM Publication -->
                            <div class="tab-pane fade" id="ijmm-tab-pane" role="tabpanel" aria-labelledby="ijmm-tab" tabindex="0">

                                <?php
                                $journalq = array(
                                    'post_type' => 'post',
                                    'category_name'  => 'IJMM',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>

                                        <!-- item -->
                                        <?php
                                        require get_template_directory() . '/template-parts/home_article_card.php';
                                        ?>

                                <?php
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- JBES Publication -->
                            <div class="tab-pane fade" id="jbes-tab-pane" role="tabpanel" aria-labelledby="jbes-tab" tabindex="0">

                                <?php
                                $journalq = array(
                                    'post_type' => 'post',
                                    'category_name'  => 'JBES',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 10
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>

                                        <!-- item -->
                                        <?php
                                        require get_template_directory() . '/template-parts/home_article_card.php';
                                        ?>

                                <?php
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Published issue & INNSPUB JOURNALS slide -->
    <section class="section_gap bg-white px-0">
        <!-- TODO dynamic Published issue Slider -->
        <div class="container position-relative mb-5">
            <div class="swiper published_issue">
                <h2 class="ps-3 ps-sm-0">Published issue</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes.webp" alt="jbes">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">JBES-Number 2 Vol.18 2021</a>
                                <span>Category: JBES</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/ijaar.webp" alt="ijaar">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: IJAAR</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/ijaar_2.webp" alt="ijaar_2">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: IJAAR</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes_2.webp" alt="jbes_2">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: JBES</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes_2.webp" alt="jbes_2">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: JBES</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination d-lg-none"></div>
                <!-- navigation buttons -->
                <div class="swiper-button-prev d-none d-lg-flex"></div>
                <div class="swiper-button-next d-none d-lg-flex"></div>
            </div>

        </div>

        <!-- TODO dyn INNSPUB JOURNALS Slider -->
        <div class="container position-relative">
            <div class="swiper innspub_journal">
                <h2 class="ps-3 ps-sm-0">INNSPUB journals</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijbb.webp" alt="ijbb">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">JBES-Number 2 Vol.18 2021</a>
                                <span>Category: ijbb</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijb.webp" alt="ijb">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: ijb</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/jbes.webp" alt="jbes">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: jbes</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijaar.webp" alt="ijaar">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: ijaar</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card_secondary">
                            <div class="card__journal">
                                <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijaar.webp" alt="ijaar">
                            </div>

                            <div class="card__journal_name">
                                <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                <span>Category: ijaar</span>
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

        </div>
    </section>


</main>

<?php
get_footer();
