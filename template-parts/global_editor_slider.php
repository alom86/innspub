<div class="swiper-wrapper">

    <?php

    $args = array(
        'post_type'      => 'editor',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status'    => 'publish',
        'posts_per_page' => 10
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>

            <!-- Slides -->
            <div class="swiper-slide">
                <div class="card profile">
                    <div class="profile__img">
                        <img width="136" height="149" src="
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

                    <span>(
                        <?php if (!empty(the_field('job_title'))) :
                            the_field('job_title');
                        endif; ?>
                        ),
                        <?php if (!empty(the_field('country'))) :
                            the_field('country');
                        endif; ?>.
                    </span>
                    <h3>
                        <?php if (!empty(the_field('interested_journal_name'))) :
                            the_field('interested_journal_name');
                        endif; ?>
                    </h3>
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

<!-- If we need pagination -->
<div class="swiper-pagination d-lg-none"></div>
<!-- If we need navigation buttons -->
<div class="swiper-button-prev d-none d-lg-flex"></div>
<div class="swiper-button-next d-none d-lg-flex"></div>