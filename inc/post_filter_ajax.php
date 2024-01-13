<?php
// jquery enque
function enqueue_custom_scripts()
{
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/assets/js/custom-ajax.js', array('jquery'), '1.0', true);
    wp_localize_script('custom-ajax-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// ajax handler
function filter_article_posts()
{
    // Get the selected option from AJAX
    $selected_option = isset($_POST['selected_option']) ? sanitize_text_field($_POST['selected_option']) : '';

    // Get the category name from AJAX
    $category_name = isset($_POST['category_name']) ? sanitize_text_field($_POST['category_name']) : '';

    // Get the current page number
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'post_type'      => 'post',
        'category_name'  => sanitize_text_field($category_name),
        'post_status'    => 'publish',
        'posts_per_page' => 10,
        'orderby'        => $selected_option,
        'meta_key'       => $selected_option,
        'order'          => 'DESC',
        'paged'          => $paged,
    );

    // Get the filtered articles
    $articles = new WP_Query($args);;

    if ($articles->have_posts()) :
        while ($articles->have_posts()) :
            $articles->the_post();
            require get_template_directory() . '/template-parts/journal_post_content.php';
        endwhile;


        // Pagination
        require get_template_directory() . '/template-parts/pagination_journal_part.php';

    else :
        echo '<p>' . esc_html__('No articles found.', 'innspub') . '</p>';
    endif;

    // Reset post data
    wp_reset_postdata();

    die();
}


add_action('wp_ajax_filter_article_posts', 'filter_article_posts');
add_action('wp_ajax_nopriv_filter_article_posts', 'filter_article_posts');
