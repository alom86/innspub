<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

get_header();
?>

<!-- Main Content -->
<main class="bg-white">
	<!-- page breadcumb -->
	<?php
	require get_template_directory() . '/template-parts/breadcumb_part.php';
	?>

	<!-- page layout -->
	<section class="section_gap">
		<div class="container">
			<div class="layout_sidebar">
				<!-- sidebar -->
				<?php
				require get_template_directory() . '/template-parts/sidebar_part.php';
				?>

				<!-- page content -->
				<div>
					<div class="page_content">
						<!-- page title -->
						<div class="page_content__title">
							<h1><?php the_title(); ?></h1>
						</div>

						<?php if (have_posts()) : ?>

						<?php
							/* Start the Loop */
							while (have_posts()) :
								the_post();

							require get_template_directory() . '/template-parts/journal_post_content.php';

							endwhile;

							require get_template_directory() . '/template-parts/pagination_part.php';

						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>


					</div>

				</div>
			</div>
		</div>
	</section>

</main>

<?php


get_footer();
