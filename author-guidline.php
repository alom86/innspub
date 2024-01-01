<?php

/**
 * Template Name: Author guidline
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
                        <div class="page_content__data">
                            <div class="page_content__img bg_overlay">
                                <img width="886" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/single_page_feature_image.webp" alt="single_page_feature_image">
                            </div>

                            <div class="truncate">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div class="page_content__editor">
                            <div class="row g-4 row-cols-1">

                                <?php
                                $journalq = array(
                                    'post_type' => 'journal',
                                    'posts_per_page' => 5,
                                    'order' => 'ASC',
                                );
                                $journalp = new WP_Query($journalq);
                                if ($journalp->have_posts()) :
                                    $countp = 0;
                                    while ($journalp->have_posts()) :
                                        $countp++;
                                        $journalp->the_post();
                                        global $post; ?>
                                        <div class="col">
                                            <div class="card journal">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="journal__img">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div>
                                                    <h2><?php the_title(); ?></h2>
                                                    <p>
                                                        <?php if (!empty(the_field('journal_content_area'))) :
                                                            the_field('journal_content_area');
                                                        endif; ?>
                                                    </p>

                                                    <div>
                                                        <div class="data_col">
                                                            <div class="data_col__title">Short Name <span>:</span></div>
                                                            <span class="data_col__data">
                                                                <?php if (!empty(the_field('short_name_text'))) :
                                                                    the_field('short_name_text');
                                                                endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="data_col">
                                                            <div class="data_col__title">Frequency <span>:</span></div>
                                                            <span class="data_col__data">
                                                                <?php if (!empty(the_field('issues'))) :
                                                                    the_field('issues');
                                                                endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="data_col">
                                                            <div class="data_col__title">ISSN <span>:</span></div>
                                                            <span class="data_col__data">
                                                                <?php if (!empty(the_field('issn_print'))) :
                                                                    the_field('issn_print');
                                                                endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="data_col">
                                                            <div class="data_col__title">ISSN <span>:</span></div>
                                                            <span class="data_col__data">
                                                                <?php if (!empty(the_field('issn_online'))) :
                                                                    the_field('issn_online');
                                                                endif; ?>
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="data_col mt-2">
                                                            <div class="data_col__title">
                                                                <button class="btn btn_link" type="button" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $countp ?>"><i class="fa-solid fa-circle-info"></i>Scope</button>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modal_<?php echo $countp ?>" tabindex="-1" aria-labelledby="modal_<?php echo $countp ?>Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">Scope</h3>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <span>
                                                                            <?php if (!empty(the_field('modal_content'))) :
                                                                                the_field('modal_content');
                                                                            endif; ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn_primary" href="
                                                                            <?php if (!empty(the_field('modal_url'))) :
                                                                                esc_url(the_field('modal_url'));
                                                                            endif; ?>
                                                                        ">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="journal__links">
                                                        <div class="d-flex gap-3">
                                                            <a href="
                                                                <?php if (!empty(the_field('journal_editorial_board_button_url'))) :
                                                                    the_field('journal_editorial_board_button_url');
                                                                endif; ?>
                                                            ">Editorial Board</a>
                                                            <a href="
                                                                <?php if (!empty(the_field('journalmain_btnurl'))) :
                                                                    the_field('journalmain_btnurl');
                                                                endif; ?>
                                                            ">Journal</a>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-center mt-4 mt-sm-0">
                                                            <a class="btn btn_primary" href="
                                                                <?php if (!empty(the_field('instructionbtn_url'))) :
                                                                    the_field('instructionbtn_url');
                                                                endif; ?>
                                                            ">Instruction</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
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

</main>

<?php


get_footer();
