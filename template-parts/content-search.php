<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

?>

<article class="card_paper">
    <div>
        <h3>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
        <?php the_excerpt(); ?>
    </div>
</article>
