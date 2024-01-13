<?php
/**
 * Template part home article card
 * 
 */
?>

<article class="card_paper">
    <div class="card_paper__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
    </div>
    <div>
        <h3 class="text-truncate_2 mt-md-2">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
        <span class="text-truncate_2">
            <?php if (get_field('authors')) {
                echo the_field('authors');
            }; ?>
        </span>
        <div class="card_paper__tags text-truncate_2">
            <?php
            $post_tags = get_the_tags();
            if (!empty($post_tags)) {
                foreach ($post_tags as $post_tag) {
                    echo '<a href="' . get_tag_link($post_tag) . '">' . $post_tag->name . '</a>';
                }
            }
            ?>
        </div>
    </div>
</article>