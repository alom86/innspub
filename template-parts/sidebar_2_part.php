<?php

/**
 * Template part sidebar_2
 * 
 */

?>

<div class="d-none d-lg-block">
    <aside class="sidebar">
        <div class="accordion" id="accordionSidebar">
            <!-- TODO dynamic Most Popular -->
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#most_popular" aria-expanded="true" aria-controls="most_popular">
                        Most Popular
                    </button>
                </h3>
                <div id="most_popular" class="accordion-collapse collapse show" data-bs-parent="#accordionSidebar">
                    <div class="accordion-body">

                        <?php
                        // Specify the category slugs
                        $category_slugs = array('ijaar', 'ijbb', 'ijb', 'ijmm', 'jbes');

                        foreach ($category_slugs as $category_slug) {
                            // Set up query arguments to fetch the most popular post in the current category
                            $args = array(
                                'category_name' => $category_slug,
                                'posts_per_page' => 1, // Fetch only one post per category
                                'meta_key' => 'post_views_count',
                                'orderby' => 'meta_value_num',
                                'order' => 'DESC'
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    // Display your post content here
                        ?>
                                    <div class="card_sidebar">
                                        <h4>
                                            <a href="<?php the_permalink() ?>">
                                                <?php
                                                $title = get_the_title();
                                                $p_title = wp_trim_words($title, 10, ' ');
                                                echo $p_title;
                                                ?>
                                            </a>
                                        </h4>
                                        <div class="card_sidebar__meta">
                                            <span class="card_sidebar__label">
                                                <?php
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    $category_link = get_category_link($categories[0]->term_id);
                                                    echo '<a class="text-white" href="' . esc_url($category_link) . '">' . esc_html($categories[0]->name) . '</a>';
                                                }
                                                ?>
                                            </span>
                                            <span class="card_sidebar__date"><?php echo get_the_date('F j, Y') ?></span>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); // Reset post data for the next category
                        }
                        ?>






                    </div>
                </div>
            </div>

            <!-- logo_menu -->
            <?php
            require get_template_directory() . '/template-parts/logo_menu.php';
            ?>

        </div>

    </aside>
</div>