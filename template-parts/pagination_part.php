<div class="pagination-container">
    <?php
    $pagination_args = array(
        'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
        'next_text' => '<i class="fa-solid fa-angle-right"></i>',
        'type'      => 'array',
        'first_page_text' => '<i class="fa-solid fa-angles-left"></i>',
        'last_page_text'  => '<i class="fa-solid fa-angles-right"></i>',
        'mid_size'       => 1,
    );

    $pagination_links = paginate_links($pagination_args);

    if ($pagination_links) {
        echo '<nav class="d-flex align-items-center justify-content-center justify-content-sm-between mt-4">';
        echo '<div class="d-none d-sm-inline">';
        echo '<span class="fw-bold">' . esc_html__('Page', 'innspub') . ' ' . get_query_var('paged') . ' ' . esc_html__('of', 'innspub') . ' ' . $wp_query->max_num_pages . '</span>';
        echo '</div>';
        echo '<ul class="pagination">';

        // First page link
        echo '<li class="page-item d-none d-sm-block"><a href="' . esc_url(get_pagenum_link(1)) . '" class="page-link">' . $pagination_args['first_page_text'] . '<span class="sr-only">' . esc_html__('go to first page', 'innspub') . '</span></a></li>';

        foreach ($pagination_links as $link) {
            echo '<li class="page-item">' . $link . '</li>';
        }

        // Last page link
        echo '<li class="page-item d-none d-sm-block"><a href="' . esc_url(get_pagenum_link($wp_query->max_num_pages)) . '" class="page-link">' . $pagination_args['last_page_text'] . '<span class="sr-only">' . esc_html__('go to last page', 'innspub') . '</span></a></li>';

        echo '</ul>';
        echo '</nav>';
    }
    ?>
</div>
