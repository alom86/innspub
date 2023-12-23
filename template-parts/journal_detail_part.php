<?php

/**
 * Template part for displaying journal details part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

?>


<div class="card journal flex-xl-column flex-xxl-row position-relative mb_60">
    <div class="journal__img w_journal">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div>
        <h2>
            <?php if (!empty(the_field('journal_page_title'))) :
                the_field('journal_page_title');
            endif; ?>
        </h2>
        <div class="journal__description">
            <p>
                <?php if (!empty(the_field('journal_content_area'))) :
                    the_field('journal_content_area');
                endif; ?>
            </p>
        </div>

        <div>
            <div class="data_col">
                <div class="data_col__title">Issue Year <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('issues'))) :
                        the_field('issues');
                    endif; ?>
                </span>
            </div>
            <div class="data_col">
                <div class="data_col__title">ISSN <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('issn_print'))) :
                        the_field('issn_print');
                    endif; ?>
                </span>
            </div>
            <div class="data_col">
                <div class="data_col__title">ISSN <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('issn_online'))) :
                        the_field('issn_online');
                    endif; ?>
                </span>
            </div>
            <div class="data_col">
                <div class="data_col__title">Publication <span class="d-none d-sm-inline">Speed</span> <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('publication_speed'))) :
                        the_field('publication_speed');
                    endif; ?>
                </span>
            </div>
            <div class="data_col">
                <div class="data_col__title">Publishing <span class="d-none d-sm-inline">Model</span> <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('publishing_model'))) :
                        the_field('publishing_model');
                    endif; ?>
                </span>
            </div>
            <div class="data_col">
                <div class="data_col__title"><span class="d-none d-sm-inline">Final</span> Submission <span>:</span></div>
                <span class="data_col__data">
                    <?php if (!empty(the_field('final_submission'))) :
                        the_field('final_submission');
                    endif; ?>
                </span>
            </div>

            <div class="data_col mt-2">
                <div class="data_col__title">
                    <div class="d-flex flex-column">
                        <button class="btn btn_link" type="button" data-bs-toggle="modal" data-bs-target="#modal_scope"><i class="fa-solid fa-circle-info"></i>Scope</button>
                        <button class="btn btn_link" type="button" data-bs-toggle="modal" data-bs-target="#modal_indexing"><i class="fa-solid fa-circle-info"></i>Indexing</button>
                    </div>
                </div>
            </div>
            <!-- Modal Scope -->
            <div class="modal fade" id="modal_scope" tabindex="-1" aria-labelledby="modal_scopeLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Scope</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="modal-body">
                            <span>
                                <?php if (!empty(the_field('modal_content'))) :
                                    the_field('modal_content');
                                endif; ?>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn_primary" href="
                                                                <?php if (!empty(the_field('modal_url'))) :
                                                                    esc_url(the_field('modal_url'));
                                                                endif; ?>
                                                                ">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Indexing -->
            <div class="modal fade" id="modal_indexing" tabindex="-1" aria-labelledby="modal_indexingLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Indexing</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="modal-body">
                            <span>
                                <?php if (!empty(the_field('modal_two'))) :
                                    the_field('modal_two');
                                endif; ?>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn_primary" href="
                                                                <?php if (!empty(the_field('modal_twourl'))) :
                                                                    esc_url(the_field('modal_twourl'));
                                                                endif; ?>
                                                                ">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="journal__links mt-2 d-flex flex-column flex-sm-row justify-content-sm-center justify-content-xl-end gap-3">
            <a class="btn btn_primary btn_full m-0" href="
                                                <?php if (!empty(the_field('submit_button_url'))) :
                                                    esc_url(the_field('submit_button_url'));
                                                endif; ?>
                                            ">
                <?php if (!empty(the_field('submit_button_text'))) :
                    the_field('submit_button_text');
                endif; ?>
            </a>
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a class="btn btn_secondary m-0" href="
                                                    <?php if (!empty(the_field('copy_right_btn_url'))) :
                                                        the_field('copy_right_btn_url');
                                                    endif; ?>
                                                ">
                    <?php if (!empty(the_field('copy_right_button_text'))) :
                        the_field('copy_right_button_text');
                    endif; ?>
                </a>
                <a class="btn btn_secondary m-0" href="
                                                <?php if (!empty(the_field('airtcle_sample_button_url'))) :
                                                    the_field('airtcle_sample_button_url');
                                                endif; ?>
                                                ">
                    <?php if (!empty(the_field('airtcle_smple_button_text'))) :
                        the_field('airtcle_smple_button_text');
                    endif; ?>
                </a>
            </div>
        </div>
    </div>

</div>