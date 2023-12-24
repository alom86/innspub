<?php
/**
 * 
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
                    <div >
                        <div class="page_content">
                            <!-- page title -->
                            <div class="page_content__title">
                                <h1>Editorial Board Members | IJB</h1>
                            </div>

                            <!-- Editor in-Chief -->
                            <div class="card profile profile_cheif">
                                <div class="profile_cheif__img_wrap">
                                    <div class="profile_cheif__img-cheif">
                                        <img width="510" height="677" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_1.webp" alt="board_member_1">
                                    </div>
                                    <div class="profile_cheif__img-shap"></div>
                                    <h2 class="profile_cheif__label">Editor in-Chief</h2>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <a class="profile__name" href="board-member-single.html">Dr. Ahmad Humayan Kabir</a>
                                        <span class="d-block">(Assistant Professor)</span>
                                    </div>
                                    <div class="d-xxl-flex gap-4">
                                        <div class="profile_cheif__info">
                                            <h3>BSc and MSc (RU, Bangladesh), MSc (Sweden), PhD (Australia), Postdoc (Sweden)</h3>
                                            <p>Depertment of Botany University of Rajshahi, Motihar, Rajshahi-6205, BANGLADESH</p>
                                        </div>

                                        <div class="profile_cheif__contact">
                                            <h3>Contact Information</h3>
                                            <div class="item">
                                                <div class="item_title">Call <span>:</span></div>
                                                <a href="callto:8801717134836">+880 1717 134 836</a>
                                            </div>
                                            <div class="item">
                                                <div class="item_title">Email <span>:</span></div>
                                                <a href="mailto:ijb@innspub.net">ijb@innspub.net</a>
                                            </div>

                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-whatsapp"></i><span class="sr-only">whatsapp link</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Co-Editor -->
                            <div class="page_content__editor">
                                <div class="title">
                                    <h2>Co-Editor</h2>
                                </div>

                                <div class="row g-4 row-cols-1 row-cols-sm-2">
                                    <div class="col">
                                        <!-- big wide card -->
                                        <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                            <div class="profile__img m-xxl-0 ">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_2.webp" alt="board_member_2">
                                            </div>
                                            <div class="d-flex flex-column align-items-xxl-start">
                                                <a class="profile__name" href="board-member-single.html">
                                                    Dr. Md. Tofazzal Islam
                                                </a>
                                                <span class="d-block">(Associate Professor)</span>
                                                
                                                <h3>Bangladesh</h3>
                                                <div class="social ms-xxl-0">
                                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- big wide card -->
                                        <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                            <div class="profile__img m-xxl-0 ">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_3.webp" alt="board_member_3">
                                            </div>
                                            <div class="d-flex flex-column align-items-xxl-start">
                                                <a class="profile__name" href="board-member-single.html">
                                                    Dr. Agnieszka Zienkiewicz
                                                </a>
                                                <span class="d-block">(Associate Professor)</span>
                                                
                                                <h3>Poland</h3>
                                                <div class="social ms-xxl-0">
                                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Managing Editor -->
                            <div class="page_content__editor">
                                <div class="title">
                                    <h2>Managing Editor</h2>
                                </div>

                                <div class="row g-4 row-cols-1 row-cols-sm-2">
                                    <div class="col">
                                        <!-- big wide card -->
                                        <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                            <div class="profile__img m-xxl-0 ">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_4.webp" alt="board_member_4">
                                            </div>
                                            <div class="d-flex flex-column align-items-xxl-start">
                                                <a class="profile__name" href="board-member-single.html">
                                                    Dr. Bulbul Ahmed
                                                </a>
                                                <span class="d-block">(Associate Professor)</span>
                                                
                                                <h3>Canada</h3>
                                                <div class="social ms-xxl-0">
                                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- big wide card -->
                                        <div class="card profile flex-xxl-row gap-xxl-4 px-xxl-4">
                                            <div class="profile__img m-xxl-0 ">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_5.webp" alt="board_member_5">
                                            </div>
                                            <div class="d-flex flex-column align-items-xxl-start">
                                                <a class="profile__name" href="board-member-single.html">
                                                    Dr. A. M. Swaraz
                                                </a>
                                                <span class="d-block">(Associate Professor)</span>
                                                
                                                <h3>Bangladesh</h3>
                                                <div class="social ms-xxl-0">
                                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Editor / Reviewer -->
                            <div class="page_content__editor">
                                <div class="title">
                                    <h2>Editor / Reviewer</h2>
                                </div>

                                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-3">
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_6.webp" alt="board_member_6">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. Khawaja Shafique Ahmad
                                            </a>
                                            <span>(Associate Professor)</span>
                                            
                                            <h3>Canada</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_7.webp" alt="board_member_7">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. A. M. Swaraz
                                            </a>
                                            <span>(Assistant Professor)</span>

                                            <h3>Bangladesh</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_8.webp" alt="board_member_8">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. A. M. Swaraz
                                            </a>
                                            <span>(Assistant Professor)</span>

                                            <h3>Bangladesh</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_2.webp" alt="board_member_2">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. A. M. Swaraz
                                            </a>
                                            <span>(Assistant Professor)</span>

                                            <h3>Bangladesh</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_6.webp" alt="board_member_6">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. Khawaja Shafique Ahmad
                                            </a>
                                            <span>(Associate Professor)</span>
                                            
                                            <h3>Canada</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card profile">
                                            <div class="profile__img">
                                                <img width="160" height="160" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/board_member_7.webp" alt="board_member_7">
                                            </div>
                                            <a class="profile__name" href="board-member-single.html">
                                                Dr. A. M. Swaraz
                                            </a>
                                            <span>(Assistant Professor)</span>

                                            <h3>Bangladesh</h3>
                                            <div class="social">
                                                <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                                <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

<?php


get_footer();
