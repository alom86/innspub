<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
	<div class="section_gap">
		<div class="container">
			<div class="layout_sidebar">
				<!-- sidebar -->
				<?php
				require get_template_directory() . '/template-parts/sidebar_part.php';
				?>

				<!-- page content -->
				<article class="w-100">
					<div class="page_content">
						<!-- page title -->
						<div class="page_content__title">
							<h1>Search Results for : <?php echo get_query_var('s') ?></h1>
						</div>
						<!-- page data -->

						<?php
						if (have_posts()) :

							if (is_home() && !is_front_page()) :
						?>

							<?php
							endif;

							/* Start the Loop */
							while (have_posts()) :
								the_post();

								get_template_part( 'template-parts/content', 'search' );

							endwhile;
							?>

						<?php
						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
						
					</div>

				</article>
			</div>
		</div>
	</div>

</main>

<?php


get_footer();
