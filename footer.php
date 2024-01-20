<?php
/**
 * The template for displaying the footer
 *
 * @package innspub
 */

?>	
	
	<!-- footer before -->
	<div class="footer_before">
        <div class="container">
            <a class="btn btn_primary" href="
                <?php 
                    $submit_manuscript_page_link = get_field('submit_manuscript_page_link', 'option'); // Fetch the ACF value

                    if ($submit_manuscript_page_link): // If ACF field has a value
                    ?>
                        <?php echo $submit_manuscript_page_link; ?>
                    <?php else: // If ACF field is empty or doesn't have a value
                    ?>
                        https://innspub.net/innspub-submission-gateway
                    <?php endif;
                ?>
            ">Submit Manuscript</a>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="footer-item">
                        
                        <a href="<?php home_url(); ?>">
                            <?php 
                                $footer_logo_url = esc_url(get_field('footer_logo', 'option')); // Fetch the ACF value

                                if ($footer_logo_url): // If ACF field has a value
                                ?>
                                    <img class="footer-item__logo" width="140" height="32" src="<?php echo $footer_logo_url; ?>" alt="footer logo">
                                <?php else: // If ACF field is empty or doesn't have a value
                                ?>
                                    <img class="footer-item__logo" width="140" height="32" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_white.webp" alt="footer logo">
                                <?php endif; 
                            ?>
                        </a>

                        <?php 
                            $footer_short_description = get_field('footer_short_description', 'option'); // Fetch the ACF value

                            if ($footer_short_description): // If ACF field has a value
                            ?>
                                <p class="footer-item__description mb-4"><?php echo $footer_short_description; ?></p>
                            <?php else: // If ACF field is empty or doesn't have a value
                            ?>
                                <p class="footer-item__description mb-4">International Network for Natural Sciences <em>(INNSpub)</em> is an open access research journal publisher that's dedicated to publish scholarly research papers and books, to believe in sharing new scientific knowledge in the field.</p>
                            <?php endif;
                        ?>
                        
                        <div class="social d-flex justify-content-start">
                            <a class="social__link" href="<?php if (!empty(the_field('face_book_url', 'option'))) : esc_html(the_field('face_book_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                            <a class="social__link" href="<?php if (!empty(the_field('twitter_url', 'option'))) : esc_html(the_field('twitter_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                            <a class="social__link" href="<?php if (!empty(the_field('linkedin_url', 'option'))) : esc_html(the_field('linkedin_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkeding icon</span></a>
                            <a class="social__link" href="<?php if (!empty(the_field('instagram_url', 'option'))) : esc_html(the_field('instagram_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                            <a class="social__link" href="<?php if (!empty(the_field('google_url', 'option'))) : esc_html(the_field('google_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-4">
                            <div class="footer-item">
                                <h2 class="footer-item__title">Approach</h2>
                                <!-- dynamic approach menu -->
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'approach_menu',
                                            'menu_id'        => 'approach-menu',
                                            'container'      => '',
                                            'menu_class'     => 'footer-item__nav',
                                            'li_class'   => 'footer-item__nav-item',
                                            'a_class'    => 'footer-item__nav-link',
                                        )
                                    );
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="footer-item">
                                <h2 class="footer-item__title">Quick Links</h2>
                                <!-- dynamic Quick Links menu -->
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'quick_links_menu',
                                            'menu_id'        => 'quick_links-menu',
                                            'container'      => '',
                                            'menu_class'     => 'footer-item__nav',
                                            'li_class'   => 'footer-item__nav-item',
                                            'a_class'    => 'footer-item__nav-link',
                                        )
                                    );
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 px-xl-0">
                            <div class="footer-item">
                                <h2 class="footer-item__title"><?php if (!empty(the_field('get_in_touch_', 'option'))) : esc_html(the_field('get_in_touch_', 'option')); endif; ?></h2>
                                <ul class="footer-item__nav">
                                    <li class="footer-item__nav-item">
                                        Email:
                                        <a class="footer-item__nav-link" href="mailto:<?php if (!empty(the_field('email_one', 'option'))) : esc_html(the_field('email_one', 'option')); endif; ?>"><?php if (!empty(the_field('email_one', 'option'))) : esc_html(the_field('email_one', 'option')); endif; ?></a>
                                        (Support)
                                    </li>
                                    <li class="footer-item__nav-item">
                                        Email:
                                        <a class="footer-item__nav-link" href="mailto:<?php if (!empty(the_field('email_two', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?>"><?php if (!empty(the_field('email_two', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?></a>
                                        (Submis.)
                                    </li>
                                    <li class="footer-item__nav-item">
                                        Phone:
                                        <a class="footer-item__nav-link" href="callto:<?php if (!empty(the_field('phone_number', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?>"><?php if (!empty(the_field('phone_number', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?></a>
                                        (Office)
                                    </li>
                                    <li class="footer-item__nav-item">
                                        Phone:
                                        <a class="footer-item__nav-link" href="callto:<?php if (!empty(the_field('whatsapp', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?>"><?php if (!empty(the_field('whatsapp', 'option'))) : esc_html(the_field('email_two', 'option')); endif; ?></a>
                                        (WhatsApp)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-item">
                        <h2 class="footer-item__title"><?php if (!empty(the_field('philippines_office', 'option'))) : esc_html(the_field('philippines_office', 'option')); endif; ?></h2>
                        <address class="footer-item__description">
                            <?php if (!empty(the_field('philippines_address', 'option'))) : esc_html(the_field('philippines_address', 'option')); endif; ?>
                        </address>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-item">
                        <h2 class="footer-item__title"><?php if (!empty(the_field('uk_office', 'option'))) : esc_html(the_field('uk_office', 'option')); endif; ?></h2>
                        <address class="footer-item__description">
                            <?php if (!empty(the_field('uk_office_address', 'option'))) : esc_html(the_field('uk_office_address', 'option')); endif; ?>
                        </address>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-item">
                        <h2 class="footer-item__title"><?php if (!empty(the_field('dhaka_office', 'option'))) : esc_html(the_field('dhaka_office', 'option')); endif; ?></h2>
                        <address class="footer-item__description">
                            <?php if (!empty(the_field('dhaka_office_address', 'option'))) : esc_html(the_field('dhaka_office_address', 'option')); endif; ?>
                        </address>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-item">
                        <h2 class="footer-item__title"><?php if (!empty(the_field('rajshahi_office', 'option'))) : esc_html(the_field('rajshahi_office', 'option')); endif; ?></h2>
                        <address class="footer-item__description">
                            <?php if (!empty(the_field('rajshahi_office_address', 'option'))) : esc_html(the_field('rajshahi_office_address', 'option')); endif; ?>
                        </address>
                    </div>
                </div>
            </div>

            <hr>

            <div class="footer-item d-flex flex-column flex-lg-row justify-content-lg-between gap-3">
                <div class="d-flex align-items-center">
                    <img class="footer-item__copyright_icon" width="21" height="21" src="<?php if (!empty(the_field('licence_image', 'option'))) : esc_html(the_field('licence_image', 'option')); endif; ?>" alt="copy_right">
                    <p class="footer-item__description">
                        <?php if (!empty(the_field('licence_text', 'option'))) : esc_html(the_field('licence_text', 'option')); endif; ?>
                        <a href="<?php if (!empty(the_field('license_link_url', 'option'))) : esc_html(the_field('license_link_url', 'option')); endif; ?>" target="_blank">
                            <?php if (!empty(the_field('license_link_text', 'option'))) : esc_html(the_field('license_link_text', 'option')); endif; ?>
                        </a>
                    </p>
                </div>
                <img class="footer-item__payment_method" width="220" height="38" src="<?php if (!empty(the_field('license_right_image', 'option'))) : esc_html(the_field('license_right_image', 'option')); endif; ?>" alt="payment_method">
            </div>

            <hr>

            <div class="footer-item">
                <div class="footer-item__description_copyright text-center">
                    <?php if (!empty(the_field('footer_bottom_text', 'option'))) : esc_html(the_field('footer_bottom_text', 'option')); endif; ?>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to Top -->
    <div class="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg>
    </div>


	<?php wp_footer(); ?>
</body>

</html>