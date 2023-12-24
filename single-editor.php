<?php

/**
 * The template for displaying editor single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				<div>
					<div class="page_content">
						<!-- page title -->
						<div class="page_content__title">
							<h1><?php the_title(); ?></h1>
						</div>

						<!-- Editor in-Chief -->
						<?php
						require get_template_directory() . '/template-parts/editor_profile_part.php';
						?>

						<!-- Summary -->
						<div class="page_content__editor">
							<div class="page_content__data p-0">
								<div class="title mb-0 p-md-4">
									<h2>Summary</h2>
								</div>

								<div class="p-3 p-md-4">
									<?php if (!empty(the_field('professional_summary'))) :
										the_field('professional_summary');
									endif; ?>
								</div>
							</div>

						</div>

						<!-- Publications -->
						<div class="page_content__editor">
							<div class="page_content__data p-0">
								<div class="title mb-0 p-md-4">
									<h2>Publications</h2>
								</div>

								<div class="p-3 p-md-4">
									<!-- <div class="reference_item">Improved Technology for Water chest nut Production in Bangladesh submitted to the University Grant Commission (UGC), Bangladesh</div> -->

									<?php if (!empty(the_field('publications_list'))) :
										the_field('publications_list');
									endif; ?>
								</div>
							</div>

						</div>

						<!-- Global Editor -->
						<div class="page_content__editor slider_maxw">
							<div class="title">
								<h2>Global Editor</h2>
							</div>

							<div class="container position-relative">
								<div class="swiper global_editor">

									<?php
									require get_template_directory() . '/template-parts/global_editor_slider.php';
									?>
									
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>
		</div>
	</div>

</main>



<?php

get_footer();
