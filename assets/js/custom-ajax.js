jQuery(document).ready(function ($) {
    $('#journal_filter select').on('change', function () {
        var selectedOption = $(this).val();
        var category_name = $(this).data('category-name');

        console.log(selectedOption, category_name);

        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_article_posts',
                selected_option: selectedOption,
                category_name: category_name,
                page: 1
            },
            success: function (response) {
                $('.show_article_post').html(response);

                $('.pagination .page-item .page-numbers').addClass('page-link');
                $('.pagination .page-item .current').addClass('active');
            },
            error: function () {
                console.log('Error occurred');
            }
        });
    });
});
