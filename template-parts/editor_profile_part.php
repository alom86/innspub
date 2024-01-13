<?php

/**
 * Template part for displaying editor profile part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

?>


<div class="card profile profile_cheif mb-4">
    <div class="profile_cheif__img_wrap">
        <div class="profile_cheif__img-cheif">
            <img width="510" height="677" src="
                <?php if (!empty(the_field('profile_photo'))) :
                    the_field('profile_photo');
                endif; ?>
                " alt="
                    <?php if (!empty(the_field('name'))) :
                        the_field('name');
                    endif; ?>
                ">
        </div>
        <div class="profile_cheif__img-shap"></div>
        <h3 class="profile_cheif__label">
            <?php if (!empty(the_field('desire_post'))) :
                the_field('desire_post');
            endif; ?>
        </h3>
    </div>

    <div>
        <div class="mb-3">
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
        </div>
        <div class="d-xl-flex gap-4">
            <div class="profile_cheif__info">
                <h4>
                    <?php if (!empty(the_field('last_achieved_degree'))) :
                        the_field('last_achieved_degree');
                    endif; ?>
                </h4>
                <p>
                    <?php the_field('departmentinstitute');
                    echo ', ';
                    the_field('universityinstitute');
                    echo ', ';
                    the_field('full_address');
                    echo ', ';
                    the_field('country');
                    ?>
                </p>
            </div>

            <div class="profile_cheif__contact">
                <h4>Contact Information</h4>
                <div class="item">
                    <div class="item_title">Call <span>:</span></div>
                    <a href="callto:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
                </div>
                <div class="item">
                    <div class="item_title">Email <span>:</span></div>
                    <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
                </div>

                <div class="social">
                    <?php
                    require get_template_directory() . '/template-parts/profile_social_part.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>