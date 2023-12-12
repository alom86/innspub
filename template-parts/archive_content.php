<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <!-- issue card -->
        <article class="card-issue">
            <div class="card-issue__header">
                <div class="card-issue__label">
                    <span>Open Access</span>
                    <span class="d-none d-sm-inline">Research Paper</span>
                </div>
                <div class="card-issue__statistics">
                    <span><i class="fa-solid fa-eye"></i> <span class="d-none d-sm-inline">Views</span> (77)</span>
                    <span class="view"><i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Download</span> (27)</span>
                </div>
            </div>
            <div class="card-issue__content">
                <img class="d-none d-sm-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                <div class="d-flex flex-column flex-md-row align-items-md-end gap-4">
                    <div>
                        <h2><a class="card-issue__title text-decoration-underline" href="current-issue-details.html"><?php the_title(); ?></a></h2>
                        <div><span class="fw-bold">By: </span> Pedro M Gutierrez Jr</div>
                        <div class="card_paper__tags mt-0">
                            <span class="fw-bold">Key Words: </span>
                            <a href="#">Anti-cancer</a>
                            <a href="#">Carica papaya</a>
                            <a href="#">Cytotoxicity</a>
                            <a href="#">MTT Assay</a>
                            <a href="#">Plant extract</a>
                        </div>
                        <div>
                            <span>Int. J. Biosci.23( 1), 1-8, July 2023.</span>
                        </div>
                        <div> <span class="fw-bold">DOI: </span><a href="http://dx.doi.org/10.12692/ijb/23.1.1-8" class="text-decoration-underline" target="_blank">http://dx.doi.org/10.12692/ijb/23.1.1-8</a></div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn_primary" href="current-issue-details.html">Details</a>
                    </div>
                </div>
            </div>
        </article>
<?php
    endwhile;
else :
    _e('No Post Found!', 'textdomain');
endif;
?>