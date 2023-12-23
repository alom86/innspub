<?php
/**
 * Template part journal feature card
 * 
 */
?>

<div class="journal_feature mb_60">
    <div class="row g-3 g-md-4 row-cols-1 row-cols-sm-2 mb-3 mb-md-4">

        <?php if (have_rows('journal_icon_title_group', 'option')) : ?>
            <?php $counter = 0; ?>
            <?php while (have_rows('journal_icon_title_group', 'option')) :
                $counter++;
                if ($counter > 2) {
                    break;
                }
                the_row(); ?>

                <div class="col">
                    <div class="card_feature d-xl-flex align-items-xl-center gap-xl-4">
                        <div class="card_feature__icon">
                            <img src="<?php esc_url(the_sub_field('journal_icon')); ?>" alt="<?php esc_html(the_sub_field('journal_icon_title')); ?>">
                        </div>
                        <div>
                            <h3><a href="

                            <?php $counter == 2 ? the_field('journal_editorial_board_button_url') : esc_url(the_sub_field('single_journal_icon_url')); ?>

                            "><?php esc_html(the_sub_field('journal_icon_title')); ?></a></h3>
                            <!-- TODO need dynamic field -->
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <div class="row g-3 g-md-4 row-cols-1 row-cols-sm-2 row-cols-xl-3">

        <?php if (have_rows('journal_icon_title_group', 'option')) : ?>
            <?php $counter = 0; ?>
            <?php while (have_rows('journal_icon_title_group', 'option')) :
                $counter++;
                if ($counter <= 2) {
                    continue;
                }
                the_row(); ?>

                <div class="col">
                    <div class="card_feature">
                        <div class="card_feature__icon">
                            <img src="<?php esc_url(the_sub_field('journal_icon')); ?>" alt="<?php esc_html(the_sub_field('journal_icon_title')); ?>">
                        </div>
                        <div>
                            <h3><a href="<?php esc_url(the_sub_field('single_journal_icon_url')); ?>"><?php esc_html(the_sub_field('journal_icon_title')); ?></a></h3>
                            <!-- TODO need dynamic field -->
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>