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
    <meta name="description" content="International Network for Natural Sciences">

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
                        <a href="#"><i class="fa-solid fa-user"></i> <span class="sr-only">user icon</span></a>
                    </div>

                    <div class="nav-top__welcome d-none d-xl-block">
                        <span class="nav-top__welcome-title">Welcome to <?php bloginfo('name'); ?> | <span class="text_primary">INNS Pub.</span></span>
                    </div>
                </div>

                <div class="nav-top__right">
                    <!-- need add style on xl -->
                    <div class="nav-top__right-link d-none d-xl-block">
                        <a href="<?php echo home_url(); ?>"><i class="fa-solid fa-house"></i> Home</a>
                        <a href="#"><i class="fa-solid fa-user"></i> My Account</a>
                    </div>
                    <div class="nav-top__right-button">
                        <a href="#"><span class="d-none d-sm-inline">Submit</span> Manuscript</a>
                    </div>
                    <img class="nav-top__right-double_slash d-none d-xl-block" src="<?php echo get_template_directory_uri() ?>/assets/images/shape/double_slash.webp" alt="double_slash">
                    <div class="social d-none d-xl-flex">
                        <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                        <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                        <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                        <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                        <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                    </div>
                </div>
                <div class="bg_skey"></div>
            </div>
        </div>


        <!-- main nav -->
        <nav class="navbar">
            <div class="container px-0">
                <a class="navbar__brand" href="index.html">
                    <img width="180" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.webp" alt="logo">
                </a>

                <!-- desktop menu -->
                <div class="navbar__desktop_menu d-none d-xl-flex">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INNS Pub
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Journals
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="editorial-board.html">Editorial Board</a></li>
                                <li><a class="dropdown-item" href="board-members.html">Board Members</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                For Authors
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Archives
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="current-issue-ijaar.html">Current Issue IJAAR</a></li>
                                <li><a class="dropdown-item" href="archives.html">INNSPUB Library</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Excellence
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tutorials
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="tutorial.html">Tutorial on Theoretical Research</a></li>
                                <li><a class="dropdown-item" href="faqs.html">FAQs</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <form class="search-form d-none d-sm-flex" role="search">
                    <input class="form-control search-form__input" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn search-form__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i><span class="sr-only">search button</span></button>
                </form>

                <button class="btn navbar__toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas" aria-controls="menuOffcanvas">
                    <i class="fa-solid fa-bars"></i>
                    <span class="sr-only">nav toggler button</span>
                </button>

                <!-- mobile menu offcanvas -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvas">
                    <div class="offcanvas-header p-0 mb-4">
                        <a class="navbar__brand" href="index.html">
                            <img width="180" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.webp" alt="logo">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <form class="search-form d-sm-none" role="search">
                        <input class="form-control search-form__input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn search-form__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i><span class="sr-only">search button</span></button>
                    </form>

                    <ul class="navbar-nav overflow-y-scroll">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INNS Pub
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Journals
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="editorial-board.html">Editorial Board</a></li>
                                <li><a class="dropdown-item" href="board-members.html">Board Members</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                For Authors
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Archives
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="current-issue-ijaar.html">Current Issue IJAAR</a></li>
                                <li><a class="dropdown-item" href="archives.html">INNSPUB Library</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Excellence
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="single-page.html">About INNSpub</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Aim And Scrope</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Why Choose INNSpub</a></li>
                                <li><a class="dropdown-item" href="contact.html">Offices I Contacts</a></li>
                                <li><a class="dropdown-item" href="single-page.html">Announcement</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tutorials
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="tutorial.html">Tutorial on Theoretical Research</a></li>
                                <li><a class="dropdown-item" href="faqs.html">FAQs</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>