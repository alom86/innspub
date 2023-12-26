<?php

/**
 * Template Name: FAQs Page
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
                            <h1>
                                <?php if (!empty(the_field('faqs_title', 'option'))) :
                                    esc_html(the_field('faqs_title', 'option'));
                                endif; ?>
                            </h1>
                        </div>

                        <!-- all faq -->
                        <div class="accordion striped" id="accordionFAQ">

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
                                // if ($fcounts == 5) {
                                //     break;
                                // }
                                endwhile;
                                ?>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php


get_footer();
