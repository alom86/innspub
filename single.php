<?php

/**
 * The template for displaying all single posts
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
				<article class="w-100">
					<div class="page_content">
						<!-- page title -->
						<div class="page_content__title">
							<h1><?php echo the_title(); ?></h1>
						</div>

						<!-- page data -->
						<div class="current-issue">
							<!-- issue card -->
							<div class="card-issue">
								<div class="card-issue__header">
									<div class="card-issue__statistics">
										<?php if (get_field('article_types')) {
											echo '<span>';
											the_field('article_types');
											echo '</span>';
										}; ?>
										<span class="view"><i class="fa-regular fa-calendar-days"></i> <?php echo get_the_date('d/m/Y'); ?></span>
									</div>
									<div class="card-issue__statistics">
										<span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (<span class="tptn_counter" id="tptn_counter_<?php echo the_ID(); ?>"><?php echo get_post_views(get_the_ID()); ?></span>)</span>

										<!-- TODO counter -->
										<span class="view d-none d-sm-inline"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span>
											<?php if (get_field('dc')) {
												echo '(';
												the_field('dc');
												echo ')';
											}; ?>
										</span>
									</div>
								</div>
								<div class="card-issue__content d-block">
									<div class="card-issue__img bg_overlay">
										<img width="886" height="178" src="<?php echo get_template_directory_uri(); ?>/assets/images/current_issue_feature_image.webp" alt="current_issue_feature_image">
									</div>
									<div class="card-issue__data">
										<img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
										<div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
											<div>
												<h2><?php the_title(); ?></h2>
												<div>
													<span class="fw-bold">By: </span>
													<?php if (get_field('authors')) {
														echo the_field('authors');
													}; ?>
												</div>
												<div class="card_paper__tags mt-0">
													<?php
													$post_tags = get_the_tags();
													if (!empty($post_tags)) {
														echo '<span class="fw-bold">Key Words: </span>';
														foreach ($post_tags as $post_tag) {
															echo '<a href="' . get_tag_link($post_tag) . '">' . $post_tag->name . '</a>';
														}
													}
													?>
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
												<div>
													<?php

													//echo get_the_date(); 

													$date = get_the_date();

													$year = substr($date, -4);


													if (get_field('certification')) {

														$certnum = get_field("certification");
														$snum = (string) $certnum;
														$certlen = strlen($snum);

														switch ($certlen) {
															case '1':
																$certnum = '000' . $certnum;
																break;

															case '2':
																$certnum = '00' . $certnum;
																break;

															case '3':
																$certnum = '0' . $certnum;
																break;

															case '4':
																$certnum = '' . $certnum;
																break;
														}

														echo  '<span class="fw-bold">Certificate: </span>';
														$cat = get_the_category();
														echo $cat[0]->cat_name . ' ';
														echo $year . ' ';
														echo $certnum;
														echo '<a class="ccert" href="cert"> [Generate Certificate]</a>';
													} else {

														$certnum = get_field("certification");
														$snum = (string) $certnum;
														$certlen = strlen($snum);

														switch ($certlen) {
															case '1':
																$certnum = '000' . $certnum;
																break;

															case '2':
																$certnum = '00' . $certnum;
																break;

															case '3':
																$certnum = '0' . $certnum;
																break;

															case '4':
																$certnum = '' . $certnum;
																break;
														}

														echo '<span class="fw-bold">Certificate: </span>';
														$cat = get_the_category();
														echo $cat[0]->cat_name . ' ';
														echo $year . ' ';
														echo $certnum;
														echo '<a class="ccert text-danger" href="cert"> [Generate Certificate]</a>';
													}

													?>

												</div>
											</div>
										</div>
									</div>
									<div class="card-issue__description truncate">
										<h2>Abstract</h2>
										<?php the_content(); ?>
									</div>
								</div>

								<div class="card-issue__book_button">
									<a href="#" class="btn btn_file cover">
										<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1589_4257)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M4.82339 0.83252H10.9739C11.6899 0.83252 12.2627 1.41272 12.2627 2.12131V13.5437C12.2627 14.2596 11.6825 14.8325 10.9739 14.8325H3.06613C2.35551 14.8325 1.77734 14.2543 1.77734 13.5437V3.87857C1.77734 3.76984 1.8206 3.66548 1.89751 3.58858L4.5334 0.952682C4.61031 0.875778 4.71466 0.83252 4.82339 0.83252ZM4.85255 3.43925V1.7935L2.73833 3.90773H4.38408C4.64246 3.90773 4.85255 3.69763 4.85255 3.43925ZM10.9739 14.0122C11.2361 14.0122 11.4424 13.7989 11.4424 13.5437V2.12131C11.4424 1.85919 11.2292 1.65283 10.9739 1.65283H5.67287V3.43936C5.67287 4.14998 5.0947 4.72815 4.38408 4.72815H2.59766V13.5437C2.59766 13.802 2.80786 14.0122 3.06613 14.0122H10.9739ZM6.73097 10.319C6.89119 10.4794 7.15084 10.4792 7.31096 10.319L9.06822 8.56177C9.22844 8.40166 9.22844 8.14189 9.06822 7.98178C8.90811 7.82156 8.64845 7.82156 8.48823 7.98178L7.43112 9.03889V6.0752C7.43112 5.84865 7.2474 5.66504 7.02096 5.66504C6.79441 5.66504 6.61081 5.84865 6.61081 6.0752V9.03889L5.55369 7.98178C5.39347 7.82156 5.13382 7.82156 4.9736 7.98178C4.81349 8.14189 4.81349 8.40166 4.9736 8.56177L6.73097 10.319ZM8.77831 11.3763H5.26367C5.03723 11.3763 4.85352 11.56 4.85352 11.7865C4.85352 12.0129 5.03723 12.1967 5.26367 12.1967H8.77831C9.00475 12.1967 9.18846 12.0129 9.18846 11.7865C9.18846 11.56 9.00485 11.3763 8.77831 11.3763Z" fill="#132833" />
											</g>
											<defs>
												<clipPath id="clip0_1589_4257">
													<rect width="14" height="14" fill="white" transform="translate(0 0.83252)" />
												</clipPath>
											</defs>
										</svg>

										Cover
									</a>
									<a href="<?php the_field('add_file') ?>" class="btn btn_file down">
										<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1589_4257)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M4.82339 0.83252H10.9739C11.6899 0.83252 12.2627 1.41272 12.2627 2.12131V13.5437C12.2627 14.2596 11.6825 14.8325 10.9739 14.8325H3.06613C2.35551 14.8325 1.77734 14.2543 1.77734 13.5437V3.87857C1.77734 3.76984 1.8206 3.66548 1.89751 3.58858L4.5334 0.952682C4.61031 0.875778 4.71466 0.83252 4.82339 0.83252ZM4.85255 3.43925V1.7935L2.73833 3.90773H4.38408C4.64246 3.90773 4.85255 3.69763 4.85255 3.43925ZM10.9739 14.0122C11.2361 14.0122 11.4424 13.7989 11.4424 13.5437V2.12131C11.4424 1.85919 11.2292 1.65283 10.9739 1.65283H5.67287V3.43936C5.67287 4.14998 5.0947 4.72815 4.38408 4.72815H2.59766V13.5437C2.59766 13.802 2.80786 14.0122 3.06613 14.0122H10.9739ZM6.73097 10.319C6.89119 10.4794 7.15084 10.4792 7.31096 10.319L9.06822 8.56177C9.22844 8.40166 9.22844 8.14189 9.06822 7.98178C8.90811 7.82156 8.64845 7.82156 8.48823 7.98178L7.43112 9.03889V6.0752C7.43112 5.84865 7.2474 5.66504 7.02096 5.66504C6.79441 5.66504 6.61081 5.84865 6.61081 6.0752V9.03889L5.55369 7.98178C5.39347 7.82156 5.13382 7.82156 4.9736 7.98178C4.81349 8.14189 4.81349 8.40166 4.9736 8.56177L6.73097 10.319ZM8.77831 11.3763H5.26367C5.03723 11.3763 4.85352 11.56 4.85352 11.7865C4.85352 12.0129 5.03723 12.1967 5.26367 12.1967H8.77831C9.00475 12.1967 9.18846 12.0129 9.18846 11.7865C9.18846 11.56 9.00485 11.3763 8.77831 11.3763Z" fill="#132833" />
											</g>
											<defs>
												<clipPath id="clip0_1589_4257">
													<rect width="14" height="14" fill="white" transform="translate(0 0.83252)" />
												</clipPath>
											</defs>
										</svg>
										Book
									</a>
								</div>
							</div>
						</div>

						<!-- accordion -->
						<div class="accordion" id="accordion_issue_details">
							<!-- item -->
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#recommended" aria-expanded="true" aria-controls="recommended">
										Recommended Citation
									</button>
								</h2>
								<div id="recommended" class="accordion-collapse collapse show" data-bs-parent="#accordion_issue_details">
									<div class="accordion-body">
										<h3>
											<?php
											the_field('authors');
											echo " (";
											the_field('year');
											echo "), ";
											the_title();
											echo "; ";
											the_field('journal_short_name');
											echo ", V";
											the_field('volume');
											echo ", N";
											the_field('number');
											echo ", ";
											the_field('month');
											echo ", P";
											the_field('page_no');
											echo '<br>';

											?>
										</h3>
										<a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
									</div>
								</div>
							</div>
							<!-- item -->
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#copyright" aria-expanded="false" aria-controls="copyright">
										Copyright Information
									</button>
								</h2>
								<div id="copyright" class="accordion-collapse collapse" data-bs-parent="#accordion_issue_details">
									<div class="accordion-body">
										<p>
											Copyright © <?php the_time('Y'); ?> <br>
											By Authors and International <br>
											Network for Natural Sciences <br>
											(INNSPUB) https://innspub.net <br>
											This article is published under the terms of the <br>
											Creative Commons Attribution License 4.0
										</p>
									</div>
								</div>
							</div>
							<!-- item -->
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#references" aria-expanded="false" aria-controls="references">
										References
									</button>
								</h2>
								<div id="references" class="accordion-collapse collapse" data-bs-parent="#accordion_issue_details">
									<div class="accordion-body">

										<div id="post_references">
											<?php the_field('ref_body'); ?>
										</div>

										<!-- TODO load more -->
										<!-- <div class="d-flex align-items-center justify-content-center my-3 my-md-4">
											<button class="btn btn_link" type="button">Load More...</button>
										</div> -->
									</div>

									<!-- social share -->
									<div class="social_share">
										<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="#2D3E50" xmlns="http://www.w3.org/2000/svg">
												<path d="M7 0C3.1346 0 0 3.1346 0 7C0 10.8654 3.1346 14 7 14C10.8654 14 14 10.8654 14 7C14 3.1346 10.8654 0 7 0ZM10.1961 5.45786C10.1992 5.52675 10.2007 5.59596 10.2007 5.6655C10.2007 7.78859 8.58466 10.2368 5.62929 10.2369C4.72192 10.2369 3.87758 9.97096 3.16653 9.5152C3.29225 9.53004 3.42021 9.53741 3.54977 9.53741C4.30258 9.53741 4.99536 9.28064 5.54533 8.84966C4.84198 8.83662 4.24896 8.3721 4.04431 7.73369C4.14226 7.75249 4.24298 7.76274 4.34627 7.76274C4.49292 7.76274 4.63498 7.74298 4.76999 7.70613C4.03481 7.55894 3.48099 6.90921 3.48099 6.1312C3.48099 6.12393 3.48099 6.11742 3.4812 6.11069C3.69771 6.23106 3.9453 6.30348 4.20891 6.3116C3.7775 6.02374 3.49391 5.53166 3.49391 4.97421C3.49391 4.67984 3.57349 4.40405 3.71149 4.16661C4.50381 5.13881 5.68793 5.77818 7.02328 5.84537C6.99573 5.72766 6.98152 5.60504 6.98152 5.479C6.98152 4.59204 7.70111 3.87245 8.58839 3.87245C9.05057 3.87245 9.46799 4.06781 9.76118 4.38013C10.1272 4.30792 10.4709 4.17419 10.7814 3.99016C10.6613 4.36517 10.4066 4.67984 10.0749 4.87883C10.3999 4.83995 10.7097 4.75375 10.9975 4.62579C10.7825 4.94804 10.5098 5.23109 10.1961 5.45786Z" fill="" />
											</svg>
											Twitter
										</a>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="#2D3E50" xmlns="http://www.w3.org/2000/svg">
												<path d="M7 5.34058e-05C5.72926 5.34058e-05 4.55712 0.31226 3.48357 0.936673C2.41002 1.56109 1.56103 2.41007 0.93662 3.48362C0.312207 4.55717 0 5.72932 0 7.00005C0 8.13933 0.257433 9.20741 0.7723 10.2043C1.28717 11.2011 1.99374 12.0282 2.89202 12.6855C3.7903 13.3428 4.78717 13.7591 5.88263 13.9343V9.03761H4.14084V7.00005H5.88263V5.45545C5.88263 4.60099 6.12363 3.93276 6.60563 3.45076C7.08764 2.96875 7.73396 2.72775 8.5446 2.72775C8.87324 2.72775 9.22379 2.74966 9.59624 2.79348L10.0892 2.85921V4.60099H9.16901C8.77465 4.60099 8.47887 4.72149 8.28169 4.96249C8.12833 5.15968 8.05164 5.42259 8.05164 5.75123V7.00005H10.0235L9.7277 9.03761H8.11737V13.9343C9.21283 13.7591 10.2097 13.3428 11.108 12.6855C12.0063 12.0282 12.7128 11.2011 13.2277 10.2043C13.7426 9.20741 14 8.13933 14 7.00005C14 5.72932 13.6878 4.55717 13.0634 3.48362C12.439 2.41007 11.59 1.56109 10.5164 0.936673C9.44288 0.31226 8.27073 5.34058e-05 7 5.34058e-05Z" fill="" />
											</svg>
											Facebook
										</a>
										<a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="#2D3E50" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_517_6109)">
													<path d="M7 0C3.1346 0 0 3.1346 0 7C0 10.8654 3.1346 14 7 14C10.8654 14 14 10.8654 14 7C14 3.1346 10.8654 0 7 0ZM4.96588 10.582H3.26106V5.45305H4.96588V10.582ZM4.11353 4.75269H4.10242C3.53033 4.75269 3.16034 4.35887 3.16034 3.86668C3.16034 3.36339 3.54166 2.98047 4.12485 2.98047C4.70804 2.98047 5.06693 3.36339 5.07803 3.86668C5.07803 4.35887 4.70804 4.75269 4.11353 4.75269ZM11.1131 10.582H9.40849V7.83815C9.40849 7.14857 9.16165 6.67828 8.54482 6.67828C8.07388 6.67828 7.7934 6.99551 7.67014 7.30174C7.62506 7.41133 7.61406 7.5645 7.61406 7.71777V10.582H5.90935C5.90935 10.582 5.93167 5.93423 5.90935 5.45305H7.61406V6.17926C7.84061 5.82977 8.24596 5.33267 9.15044 5.33267C10.2721 5.33267 11.1131 6.06572 11.1131 7.64108V10.582Z" fill="" />
												</g>
												<defs>
													<clipPath id="clip0_517_6109">
														<rect width="14" height="14" fill="white" />
													</clipPath>
												</defs>
											</svg>
											LinkedIn
										</a>
										<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" target="_blank">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="#2D3E50" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_517_6115)">
													<path d="M10.5136 0.939068C9.4412 0.313145 8.2699 0.000244141 7 0.000244141C5.72993 0.000244141 4.55868 0.313145 3.48624 0.939068C2.41381 1.56502 1.56463 2.4142 0.938824 3.48649C0.312901 4.55904 0 5.73029 0 7.00024C0 8.41603 0.385687 9.70119 1.1575 10.8556C1.92916 12.0103 2.9408 12.8639 4.19267 13.4167C4.16825 12.7666 4.20777 12.2289 4.31116 11.8036L5.21346 7.99368C5.06153 7.696 4.98563 7.3254 4.98563 6.88172C4.98563 6.36526 5.11626 5.93371 5.37753 5.58752C5.63865 5.24105 5.95776 5.0678 6.33455 5.0678C6.63827 5.0678 6.87231 5.16795 7.0364 5.36871C7.20047 5.56915 7.28259 5.8214 7.28259 6.12514C7.28259 6.31362 7.24751 6.54308 7.17782 6.81336C7.10784 7.08379 7.0167 7.39666 6.90442 7.75218C6.79199 8.10756 6.71151 8.39159 6.66283 8.60434C6.57762 8.97492 6.6476 9.29239 6.87246 9.55678C7.09715 9.82114 7.39499 9.95322 7.76572 9.95322C8.41593 9.95322 8.94913 9.59181 9.36542 8.86868C9.78161 8.14556 9.98972 7.26753 9.98972 6.23443C9.98972 5.43852 9.73307 4.79125 9.21958 4.29301C8.70609 3.79489 7.99046 3.54562 7.0731 3.54562C6.04607 3.54562 5.21508 3.87539 4.58026 4.53446C3.9453 5.19384 3.6278 5.98235 3.6278 6.89959C3.6278 7.44651 3.78285 7.90542 4.09264 8.27604C4.1959 8.39761 4.22934 8.52813 4.19293 8.66778C4.18065 8.70433 4.1564 8.79544 4.12 8.94115C4.08362 9.08689 4.0592 9.18129 4.04707 9.22372C3.99838 9.41829 3.883 9.47908 3.70059 9.40601C3.23267 9.21158 2.87715 8.87443 2.63423 8.39435C2.39116 7.91441 2.26969 7.35847 2.26969 6.72648C2.26969 6.31935 2.33494 5.9122 2.46557 5.50507C2.5962 5.09794 2.79962 4.70457 3.07629 4.32463C3.35264 3.94516 3.68389 3.60919 4.06986 3.31759C4.4557 3.02584 4.92512 2.79211 5.47811 2.61559C6.03098 2.43954 6.62659 2.35138 7.26463 2.35138C8.12745 2.35138 8.90223 2.54281 9.58881 2.92552C10.2754 3.3084 10.7996 3.80372 11.1611 4.41129C11.5225 5.01889 11.7035 5.66894 11.7035 6.3619C11.7035 7.27336 11.5454 8.09371 11.2295 8.82292C10.9135 9.55214 10.4669 10.1248 9.88957 10.541C9.31214 10.9571 8.65588 11.1653 7.92077 11.1653C7.55004 11.1653 7.20368 11.0787 6.88165 10.9055C6.55941 10.7322 6.33767 10.5272 6.2162 10.2902C5.9428 11.3656 5.77873 12.0069 5.724 12.2133C5.60846 12.6448 5.37146 13.1429 5.01299 13.7081C5.66318 13.9025 6.32551 13.9997 7 13.9997C8.26993 13.9997 9.4412 13.6868 10.5136 13.061C11.586 12.435 12.4352 11.5859 13.0612 10.5133C13.687 9.44084 14 8.26974 14 6.99964C14 5.72957 13.687 4.55848 13.0612 3.48591C12.4353 2.4142 11.586 1.56502 10.5136 0.939068Z" fill="" />
												</g>
												<defs>
													<clipPath id="clip0_517_6115">
														<rect width="14" height="14" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Pinterest
										</a>
									</div>
								</div>
							</div>

						</div>

					</div>

				</article>
			</div>
		</div>
	</div>

</main>



<?php

get_footer();
