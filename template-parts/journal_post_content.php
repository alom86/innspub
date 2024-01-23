<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

?>

<!-- issue card -->
<article class="card-issue">
    <div class="card-issue__header">
        <div class="card-issue__label">
            <span>Open Access</span>
            <?php if (get_field('article_types')) {
                echo '<span class="d-none d-sm-inline">';
                the_field('article_types');
                echo '</span>';
            }; ?>
        </div>

        <div class="card-issue__statistics">
            <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (<?php echo get_post_views(get_the_ID()); ?>)</span>
            <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span>
                <?php if (get_field('dc')) {
                    echo '(';
                    the_field('dc');
                    echo ')';
                }; ?>
            </span>
        </div>
    </div>
    <div class="card-issue__content">
        <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
        <div>
            <h2 class="text-truncate_2"><a class="card-issue__title text-decoration-underline d-inline" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="d-flex flex-column gap-2">
                <div class="text-truncate_2">
                    <span class="fw-bold me-1"><i class="fa-solid fa-users"></i> </span>
                    <?php if (get_field('authors')) {
                        echo the_field('authors');
                    }; ?>
                </div>
                
                <div>
                    <span>
                        <?php
                        foreach ((get_the_category()) as $category) {
                            $cat = $category->name;
                            if ($cat == "IJB") {
                                echo "Int. J. Biosci.";
                            } elseif ($cat == "JBES") {
                                echo "J. Bio. Env. Sci.";
                            } elseif ($cat == "IJAAR") {
                                echo "Int. J. Agron. Agri. Res.";
                            } elseif ($cat == "IJBB") {
                                echo "Int. J. Biomol. & Biomed.";
                            } else {
                                echo "Int. J. Micro. Myco.";
                            }
                        }

                        the_field('volume') ?>(
                        <?php the_field('number') ?>),
                        <?php the_field('page_no') ?>,
                        <?php the_field('month') ?>
                        <?php the_field('year') ?>.
                    </span>
                </div>
                <div>
                    <?php if (get_field('doi')) {
                        echo '<span class="fw-bold">DOI: </span>'; ?>
                        <a href="<?php the_field('doi') ?>" class="text-decoration-underline" target="_blank"><?php echo the_field('doi'); ?></a>
                    <?php }; ?>
                </div>

                <div class="d-flex flex-column flex-md-row flex-lg-column flex-xl-row gap-4">
                    <div class="card_paper__tags mt-0 text-truncate_2">
                        <?php
                        $post_tags = get_the_tags();
                        if (!empty($post_tags)) {
                            echo '<span class="fw-bold">Key: </span>';
                            foreach ($post_tags as $post_tag) {
                                echo '<a href="' . get_tag_link($post_tag) . '">' . $post_tag->name . '</a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="btn btn_secondary ms-auto" href="<?php the_permalink() ?>">Details</a>
                </div>
            </div>

        </div>
    </div>
</article>