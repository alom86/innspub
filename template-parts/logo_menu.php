<?php
// logo menu template part
?>


<!-- Indexed In -->
<div class="accordion-item indexed_in">
    <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#indexed_in" aria-expanded="false" aria-controls="indexed_in">
            Indexed In
        </button>
        <!-- TODO update link -->
        <a href="<?php echo home_url(); ?>/indexed-in" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
    </h3>
    <div id="indexed_in" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
        <div class="accordion-body">

            <?php
            $latest_post = new WP_Query(
                array(
                    'post_type' => 'indexedin',
                    'posts_per_page' => 8,
                    'ignore_sticky_posts' => 1
                )
            );
            if ($latest_post->have_posts()) :
                while ($latest_post->have_posts()) :
                    $latest_post->the_post();
            ?>

                    <div class="card_logo">
                        <a href="
                            <?php if (!empty(the_field('image_url'))) :
                                the_field('image_url');
                            endif;
                            ?>
                        ">
                            <img src="
                                <?php if (!empty(the_field('indexed_in_image'))) :
                                    the_field('indexed_in_image');
                                endif; ?>
                            " alt="<?php the_title(); ?>">
                        </a>
                    </div>

            <?php
                endwhile;
                wp_reset_query();
            endif;
            ?>

        </div>
    </div>
</div>

<!-- Member In -->
<div class="accordion-item indexed_in">
    <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#member_in" aria-expanded="false" aria-controls="member_in">
            Member In
        </button>
        <a href="<?php echo home_url(); ?>/member-in" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
    </h3>
    <div id="member_in" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
        <div class="accordion-body">

            <?php
            $latest_post = new WP_Query(
                array(
                    'post_type' => 'memberin',
                    'posts_per_page' => 8,
                    'ignore_sticky_posts' => 1
                )
            );
            if ($latest_post->have_posts()) :
                while ($latest_post->have_posts()) :
                    $latest_post->the_post();
            ?>

                    <div class="card_logo">
                        <a href="
                            <?php if (!empty(the_field('image_url_1'))) :
                                the_field('image_url_1');
                            endif;
                            ?>
                        ">
                            <img src="
                                <?php if (!empty(the_field('member_image_one'))) :
                                    the_field('member_image_one');
                                endif; ?>
                            " alt="<?php the_title(); ?>">
                        </a>
                    </div>

            <?php
                endwhile;
                wp_reset_query();
            endif;
            ?>

        </div>
    </div>
</div>

<!-- Plagiarism Checker -->
<div class="accordion-item indexed_in">
    <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#plagiarism_checker" aria-expanded="false" aria-controls="plagiarism_checker">
            Plagiarism Checker
        </button>
        <a href="#" class="btn btn_primary btn_more">More <span class="sr-only">read more link button</span></a>
    </h3>
    <div id="plagiarism_checker" class="accordion-collapse collapse" data-bs-parent="#accordionSidebar">
        <div class="accordion-body">
            <!-- TODO dynamic -->


        </div>
    </div>
</div>