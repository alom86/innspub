<?php
/**
 * The header for our theme
 *
 * @package innspub
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta content -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Natural Sciences, Biology Journal, Biological Research, Open access Journals, Journal Publication, Research Journals Publisher, Peer-reviewed Journal Publisher, Environmental sciences Journal, Agricultural sciences Journal">

    <!-- Favicon Icons  -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header -->
    <header class="header">
        <!-- top nav -->
        <div class="nav-top">
            <div class="container h-100 d-flex align-items-center justify-content-between">
                <div class="nav-top__left">
                    <div class="nav-top__left-link d-xl-none">
                        <a href="<?php echo home_url(); ?>"><i class="fa-solid fa-house"></i> <span class="sr-only">home icon</span></a>
                        <a href="http://rjm.innspub.net/Login.aspx?ReturnUrl=%2f" target="_blank"><i class="fa-solid fa-user"></i> <span class="sr-only">user icon</span></a>
                    </div>

                    <div class="nav-top__welcome d-none d-xl-block">
                        <span class="nav-top__welcome-title">
                            <?php 
                                $welcome_home_text = get_field('welcome_home_text', 'option'); // Fetch the ACF value

                                if ($welcome_home_text): // If ACF field has a value
                                ?>
                                    <?php echo $welcome_home_text; ?>
                                <?php else: // If ACF field is empty or doesn't have a value
                                ?>
                                    Welcome to International Network for Natural Sciences
                                <?php endif;
                            ?>

                            |<span class="text_primary"> INNS Pub.</span>
                        </span>
                    </div>
                </div>

                <div class="nav-top__right">
                    <!-- need add style on xl -->
                    <div class="nav-top__right-link d-none d-xl-block">
                        <a href="<?php echo home_url(); ?>"><i class="fa-solid fa-house"></i> Home</a>
                        <a href="http://rjm.innspub.net/Login.aspx?ReturnUrl=%2f" target="_blank"><i class="fa-solid fa-user"></i> My Account</a>
                    </div>
                    <div class="nav-top__right-button">
                        <a href="
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
                        
                        " class="d-sm-flex gap-1"><span class="d-none d-sm-inline">Submit </span> Manuscript</a>
                    </div>
                    <img class="nav-top__right-double_slash d-none d-xl-block" src="<?php echo get_template_directory_uri() ?>/assets/images/shape/double_slash.webp" alt="double_slash">
                    <div class="social d-none d-xl-flex">
                        <a class="social__link" href="<?php if (!empty(the_field('face_book_url', 'option'))) : esc_html(the_field('face_book_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                        <a class="social__link" href="<?php if (!empty(the_field('twitter_url', 'option'))) : esc_html(the_field('twitter_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                        <a class="social__link" href="<?php if (!empty(the_field('linkedin_url', 'option'))) : esc_html(the_field('linkedin_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkeding icon</span></a>
                        <a class="social__link" href="<?php if (!empty(the_field('instagram_url', 'option'))) : esc_html(the_field('instagram_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                        <a class="social__link" href="<?php if (!empty(the_field('google_url', 'option'))) : esc_html(the_field('google_url', 'option')); endif; ?>" target="_blank"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                    </div>
                </div>
                <div class="bg_skey"></div>
            </div>
        </div>


        <!-- main nav -->
        <nav class="navbar">
            <div class="container px-0">
                <a class="navbar__brand" href="<?php echo home_url(); ?>">

                    <?php 
                        $header_logo_url = esc_url(get_field('header_logo', 'option')); // Fetch the ACF value

                        if ($header_logo_url): // If ACF field has a value
                        ?>
                            <img width="180" height="42" src="<?php echo $header_logo_url; ?>" alt="header logo">
                        <?php else: // If ACF field is empty or doesn't have a value
                        ?>
                            <img width="180" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.webp" alt="header logo">
                        <?php endif; 
                    ?>

                </a>

                <!-- desktop menu -->
                <div class="navbar__desktop_menu d-none d-xl-flex">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header_menu',
                                'menu_id'        => 'header-menu',
                                'container'      => '',
                                'menu_class'     => 'navbar-nav mx-auto',
                                'li_class'   => 'nav-item dropdown',
                                'a_class'    => 'nav-link dropdown-toggle',
                            )
                        );
                    ?>
                </div>
                
                <!-- TODO dynamic search -->
                <form class="search-form d-none d-sm-flex" role="search">
                    <input class="form-control search-form__input" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn search-form__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i><span class="sr-only">search button</span></button>
                </form>

                <button class="btn navbar__toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas" aria-controls="menuOffcanvas">
                    <i class="fa-solid fa-bars"></i>
                    <span class="sr-only">nav toggler button</span>
                </button>

                 <!-- mobile menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvas">
                    <div class="offcanvas-header p-0 mb-4">
                        <a class="navbar__brand" href="<?php echo home_url(); ?>">
                            
                            <?php 
                                $header_logo_url = esc_url(get_field('header_logo', 'option')); // Fetch the ACF value

                                if ($header_logo_url): // If ACF field has a value
                                ?>
                                    <img width="180" height="42" src="<?php echo $header_logo_url; ?>" alt="header logo">
                                <?php else: // If ACF field is empty or doesn't have a value
                                ?>
                                    <img width="180" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.webp" alt="header logo">
                                <?php endif; 
                            ?>

                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <form class="search-form d-sm-none" role="search">
                        <input class="form-control search-form__input" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn search-form__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i><span class="sr-only">search button</span></button>
                    </form>
                   
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header_menu',
                                'menu_id'        => 'header-menu',
                                'container'      => '',
                                'menu_class'     => 'navbar-nav overflow-y-scroll',
                                'li_class'   => 'nav-item dropdown',
                                'a_class'    => 'nav-link dropdown-toggle',
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>
    </header>