<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innspub
 */

get_header();
?>

	<!-- Main Content -->
	<main>
        <!-- Banner section -->
        <h1 class="sr-only"><?php bloginfo('name'); ?> | INNS Pubs.</h1>
        <section class="banner d-xl-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-end">
                <div class="banner__content">
                    <div class="banner__content_item issue" data-aos="fade-up">
                        <span class="banner__content_amount">60+</span>
                        <h2 class="banner__content_title">Issue Released</h2>
                    </div>
                    <div class="banner__content_item involve" data-aos="fade-up">
                        <span class="banner__content_amount">40+</span>
                        <h2 class="banner__content_title">Involve Universities</h2>
                    </div>
                    <div class="banner__content_item global" data-aos="fade-up">
                        <span class="banner__content_amount">100+</span>
                        <h2 class="banner__content_title">Global Reviewer</h2>
                    </div>
                    <div class="banner__content_item happy" data-aos="fade-up">
                        <span class="banner__content_amount">60+</span>
                        <h2 class="banner__content_title">Happy Authors</h2>
                    </div>
                </div>
            </div>
        </section>


        <!-- About section -->
        <section class="about section_gap">
            <div class="container position-relative">
                <div class="row g-5 row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <div class="about__content">
                            <h2>About us</h2>
                            <p>International Network for Natural Sciences <em>(INNSpub)</em> is an open access research journal publisher that's dedicated to publish scholarly research papers and books, to believe in sharing new scientific knowledge in the field of Biological sciences, Environmental sciences, Biodiversity, Agricultural sciences, Genetics and Herbal medicine all over the World and aims to provide a platform for researchers and scholars to publish their research and make it accessible to the wider scientific community. </p>
                        </div>
                        <div class="about__content">
                            <h2>Unique features</h2>
                            <ul>
                                <li>Fast-track peer-reviewed by international experts</li>
                                <li>Continuous and Fast nature publications</li>
                                <li>Open access for facilitating with a higher number of citations</li>
                                <li>Covered by renowned abstracting and indexing services</li>
                                <li>All IJB articles are assigned to CrossRef DOI number</li>
                            </ul>
                        </div>
                        <a class="btn btn_primary" href="#">Details</a>
                    </div>

                    <div class="col">
                        <div class="about__content">
                            <h2>Frequently Asked Questions</h2>

                            <div class="accordion accordion_home" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq_1" aria-expanded="true" aria-controls="faq_1">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h3>
                                    <div id="faq_1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_2" aria-expanded="false" aria-controls="faq_2">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h3>
                                    <div id="faq_2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_3" aria-expanded="false" aria-controls="faq_3">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h3>
                                    <div id="faq_3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_4" aria-expanded="false" aria-controls="faq_4">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h3>
                                    <div id="faq_4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_5" aria-expanded="false" aria-controls="faq_5">
                                            I want to publish my research paper. How can I start process ?
                                        </button>
                                    </h3>
                                    <div id="faq_5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Manuscripts should be submitted to the Editor of desired journals by <a href="#">Electronically Submission Gateway</a> after opening an account or via email attachment according to Author guidelines.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn_secondary" href="faqs.html">View More <span class="sr-only">read more link button</span></a>
                    </div>
                </div>
                <img class="about__bg_shap" src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/about_bg.webp" alt="about_bg">
            </div>
        </section>


        <!-- Feature & author -->
        <section class="section_gap">
            <div class="container">
                <!-- feature -->
                <div class="feature">
                    <h2>Features</h2>
                    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-4">
                        <div class="col">
                            <div class="card">
                                <div class="card__icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <h3>Scope and Area</h3>
                                <p>INNSpub aims to be a significant
                                    contributor to the scientific areas in the
                                    digital era and presents the latest
                                    informations concerning high technologies
                                    around the world.</p>
                                <a class="btn btn_secondary" href="#">Details</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__icon">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <h3>Peer Review</h3>
                                <p>We follow the peer review process in selecting research publications where the scholars and experts evaluate the research work presented and certify with a quick response.</p>
                                <a class="btn btn_secondary" href="#">Details</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__icon">
                                    <i class="fa-solid fa-book-journal-whills"></i>
                                </div>
                                <h3>Rapid Publication</h3>
                                <p>We are happy to introduce a super-fast publication model. The global authors can publish their work as quickly as possible depending on their requirement.</p>
                                <a class="btn btn_secondary" href="#">Details</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__icon">
                                    <i class="fa-solid fa-unlock"></i>
                                </div>
                                <h3>Open Access</h3>
                                <p>INNSpub supports fully open access policy, every user and reads have the right to download, copy, distribute and print with free of cost after final publications.</p>
                                <a class="btn btn_secondary" href="#">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- author -->
                <div class="author">
                    <h2>For authors</h2>
                    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-xl-4">
                        <div class="col">
                            <div class="card">
                                <div class="card__img">
                                    <img width="515" height="387" src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/INNSpub_Library.webp" alt="INNSpub_Library">
                                </div>
                                <h3>INNSpub Library</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">View Paper</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__img">
                                    <img width="515" height="387" src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/Reviewer_Pannel.webp" alt="Reviewer_Pannel">
                                </div>
                                <h3>Reviewer Panel</h3>
                                <ul>
                                    <li>World distributed reviewers</li>
                                    <li>Review of international standards</li>
                                    <li>Fast and prominent review quality</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Author Guideline</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__img">
                                    <img width="515" height="387" src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/Manuscript_Submission.webp" alt="Manuscript_Submission">
                                </div>
                                <h3>Manuscript Submission</h3>
                                <ul>
                                    <li>Schedule to rapid publications</li>
                                    <li>Online submission portal</li>
                                    <li>Quick review response</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Editorial Board</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card__img">
                                    <img width="515" height="387" src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/Manuscript_Preparation.webp" alt="Manuscript_Preparation">
                                </div>
                                <h3>Manuscript Preparation</h3>
                                <ul>
                                    <li>Online submission access</li>
                                    <li>Fast & quality publications</li>
                                    <li>Low cost publications</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Online Submission</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Why choose us -->
        <section class="why_choose">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col d-flex align-items-center justify-content-center">
                        <div class="why_choose__cards mb-4">
                            <div class="why_choose__card">
                                <div class="why_choose__icon">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                </div>
                                <div class="why_choose__text">
                                    <h3>PAPER SUBMIT</h3>
                                    <span>25000+</span>
                                </div>
                            </div>
                            <div class="why_choose__card">
                                <div class="why_choose__icon">
                                    <i class="fa-solid fa-file-circle-xmark"></i>
                                </div>
                                <div class="why_choose__text">
                                    <h3>PAPER REJECTED</h3>
                                    <span>6000+</span>
                                </div>
                            </div>
                            <div class="why_choose__card">
                                <div class="why_choose__icon">
                                    <i class="fa-solid fa-file-circle-check"></i>
                                </div>
                                <div class="why_choose__text">
                                    <h3>PAPER ACCEPTED</h3>
                                    <span>19000+</span>
                                </div>
                            </div>
                            <div class="why_choose__card">
                                <div class="why_choose__icon">
                                    <i class="fa-solid fa-book-journal-whills"></i>
                                </div>
                                <div class="why_choose__text">
                                    <h3>PAPER PUBLISHED</h3>
                                    <span>16000+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>WHY CHOOSE INNSPUB JOURNALS</h2>
                        <ul>
                            <li> Rapid publications within 7 days & Confirmation of review within 2 days</li>
                            <li> Peer-Reviewed, Open access Journal (Biology, Environment, Agriculture)</li>
                            <li> Guidance to enhance quality of the scientific research publication</li>
                            <li> Strict policy against Plagiarism; Standardized by Grammerly</li>
                            <li> Nominal processing charge for professional publication services</li>
                            <li> Provide soft copy certificate after publication of each paper</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Announcements & Global Editors -->
        <section class="section_gap bg-white px-0">
            <!-- Announcements Slider -->
            <div class="container position-relative mb-5">
                <div class="swiper announcements">
                    <h2 class="ps-3 ps-sm-0">Announcements</h2>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card__img">
                                    <img width="412" height="310" src="<?php echo get_template_directory_uri(); ?>/assets/images/announcements/Propose-a-Special-Issue.webp" alt="Propose-a-Special-Issue">
                                </div>
                                <h3>Propose a Special Issue</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Sen Proposal</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card__img">
                                    <img width="412" height="310" src="<?php echo get_template_directory_uri(); ?>/assets/images/announcements/Become-a-Member.webp" alt="Become-a-Member">
                                </div>
                                <h3>Become a Member</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Get subcription</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card__img">
                                    <img width="412" height="310" src="<?php echo get_template_directory_uri(); ?>/assets/images/announcements/Become-a-Reviewer.webp" alt="Become-a-Reviewer">
                                </div>
                                <h3>Become a Reviewer</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Apply Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card__img">
                                    <img width="412" height="310" src="<?php echo get_template_directory_uri(); ?>/assets/images/announcements/Call-for-Paper.webp" alt="Call-for-Paper">
                                </div>
                                <h3>Call for Paper</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Submit Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card__img">
                                    <img width="412" height="310" src="<?php echo get_template_directory_uri(); ?>/assets/images/announcements/Call-for-Paper.webp" alt="Call-for-Paper">
                                </div>
                                <h3>Call for Paper</h3>
                                <ul>
                                    <li>Linked with global database</li>
                                    <li>Open access library module</li>
                                    <li>Support to reader & researches</li>
                                </ul>

                                <a class="btn btn_secondary" href="#">Submit Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination d-lg-none"></div>
                    <!-- navigation buttons -->
                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                    <div class="swiper-button-next d-none d-lg-flex"></div>
                </div>

            </div>

            <!-- Global Editors Slider -->
            <div class="container position-relative">
                <div class="swiper global_editor_home">
                    <h2 class="ps-3 ps-sm-0">Global Editors</h2>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card profile">
                                <div class="profile__img">
                                    <img width="136" height="149" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/Dr.-Khawaja-Shafique-Ahmad.webp" alt="Dr.-Khawaja-Shafique-Ahmad">
                                </div>
                                <a class="profile__name" href="board-member-single.html">
                                    Dr. Khawaja Shafique Ahmad
                                </a>

                                <span>(Assistant Professor), Pakistan.</span>
                                <h3>International Journal of Biosciences</h3>
                                <div class="social">
                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card profile">
                                <div class="profile__img">
                                    <img width="136" height="149" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/Dr.-Mohammad-Attaullah.webp" alt="Dr.-Mohammad-Attaullah">
                                </div>
                                <a class="profile__name" href="board-member-single.html">
                                    Dr. Mohammad Attaullah
                                </a>

                                <span>(Assistant Professor), Pakistan.</span>
                                <h3>International Journal of Biosciences</h3>
                                <div class="social">
                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card profile">
                                <div class="profile__img">
                                    <img width="136" height="149" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/Dr.-Van-Ryan-Kristopher-R.-Galarpe.webp" alt="Dr.-Van-Ryan-Kristopher-R.-Galarpe">
                                </div>
                                <a class="profile__name" href="board-member-single.html">
                                    Dr. Van Ryan Kristopher
                                </a>

                                <span>(Assistant Professor), Pakistan.</span>
                                <h3>International Journal of Biosciences</h3>
                                <div class="social">
                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card profile">
                                <div class="profile__img">
                                    <img width="136" height="149" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/Mr.-Muhammad-Asghar-Hassan.webp" alt="Mr.-Muhammad-Asghar-Hassan">
                                </div>
                                <a class="profile__name" href="board-member-single.html">
                                    Mr. Muhammad Asghar
                                </a>

                                <span>(Assistant Professor), Pakistan.</span>
                                <h3>International Journal of Biosciences</h3>
                                <div class="social">
                                    <a class="social__link" href="#"><i class="fa-brands fa-facebook-f"></i><span class="sr-only">facebook icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-twitter"></i><span class="sr-only">twitter icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-linkedin-in"></i><span class="sr-only">linkedin icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-instagram"></i><span class="sr-only">instagram icon</span></a>
                                    <a class="social__link" href="#"><i class="fa-brands fa-google"></i><span class="sr-only">google icon</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card profile">
                                <div class="profile__img">
                                    <img width="136" height="149" src="<?php echo get_template_directory_uri(); ?>/assets/images/editors/Mr.-Muhammad-Asghar-Hassan.webp" alt="Mr.-Muhammad-Asghar-Hassan">
                                </div>
                                <a class="profile__name" href="board-member-single.html">
                                    Mr. Muhammad Asghar
                                </a>

                                <span>(Assistant Professor), Pakistan.</span>
                                <h3>International Journal of Biosciences</h3>
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

                    <!-- If we need pagination -->
                    <div class="swiper-pagination d-lg-none"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                    <div class="swiper-button-next d-none d-lg-flex"></div>
                </div>

            </div>
        </section>


        <!-- We have -->
        <section class="we_have section_gap">
            <div class="container">
                <div class="row g-4 g-md-5 flex-lg-row-reverse row-cols-1 row-cols-lg-2">
                    <div class="col d-lg-flex align-items-center">
                        <img width="720" height="315" src="<?php echo get_template_directory_uri(); ?>/assets/images/we_have/we_have_bg_image.webp" alt="we_have_bg_image">
                    </div>
                    <div class="col">
                        <h2>A title that engages the visitors</h2>
                        <p>Is a sales copy really omnipotent? Is there a universal formula for writing copy that will definitely lead to a sale?</p>
                        <div class="we_have__cards">
                            <div class="we_have__card mb-2">
                                <span>14+</span>
                                <h3>Year of Experience</h3>
                            </div>
                            <div class="we_have__card mb-2">
                                <span>150+</span>
                                <h3>Editorial Team</h3>
                            </div>
                            <div class="we_have__card">
                                <span>68+</span>
                                <h3>Professional Stuffs</h3>
                            </div>
                            <div class="we_have__card">
                                <span>90+</span>
                                <h3>Paper from Countries</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Latest Papers -->
        <section class="section_gap">
            <div class="container">
                <div class="layout_sidebar">
                    <!-- sidebar -->
                    <?php
                        require get_template_directory() . '/template-parts/sidebar_2_part.php';
                    ?>

                    <!-- Latest Papers Tabs -->
                    <div class="w-100">
                        <h2>Latest Papers</h2>

                        <div class="nav_tabs">
                            <div class="tab_select">
                                <button class="btn d-md-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    IJAAR Publication
                                </button>
                                <ul class="nav nav-tabs dropdown-menu" id="publicationTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="ijaar-tab" data-bs-toggle="tab" data-bs-target="#ijaar-tab-pane" type="button" role="tab" aria-controls="ijaar-tab-pane" aria-selected="true">IJAAR Publication</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ijbb-tab" data-bs-toggle="tab" data-bs-target="#ijbb-tab-pane" type="button" role="tab" aria-controls="ijbb-tab-pane" aria-selected="false">IJBB Publication</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ijb-tab" data-bs-toggle="tab" data-bs-target="#ijb-tab-pane" type="button" role="tab" aria-controls="ijb-tab-pane" aria-selected="false">IJB Publication</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ijmm-tab" data-bs-toggle="tab" data-bs-target="#ijmm-tab-pane" type="button" role="tab" aria-controls="ijmm-tab-pane" aria-selected="false">IJMM Publication</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="jbes-tab" data-bs-toggle="tab" data-bs-target="#jbes-tab-pane" type="button" role="tab" aria-controls="jbes-tab-pane" aria-selected="false">JBES Publication</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content" id="publicationTabContent">
                                <!-- IJAAR Publication -->
                                <div class="tab-pane fade show active" id="ijaar-tab-pane" role="tabpanel" aria-labelledby="ijaar-tab" tabindex="0">
                                    <!-- item -->
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>

                                </div>

                                <!-- IJBB Publication -->
                                <div class="tab-pane fade" id="ijbb-tab-pane" role="tabpanel" aria-labelledby="ijbb-tab" tabindex="0">
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- IJB Publication -->
                                <div class="tab-pane fade" id="ijb-tab-pane" role="tabpanel" aria-labelledby="ijb-tab" tabindex="0">
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- IJMM Publication -->
                                <div class="tab-pane fade" id="ijmm-tab-pane" role="tabpanel" aria-labelledby="ijmm-tab" tabindex="0">
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- JBES Publication -->
                                <div class="tab-pane fade" id="jbes-tab-pane" role="tabpanel" aria-labelledby="jbes-tab" tabindex="0">
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card_paper">
                                        <div class="card_paper__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publication/publication_file.svg" alt="publication_file">
                                        </div>
                                        <div>
                                            <h3>
                                                <a href="#">The forecasting of Cattle (Bos taurus) production in the Philippines</a>
                                            </h3>
                                            <span>Mohammad Salman Akhtar, Sonam Jahan, Shivam Dubey, Sandeep Kushwaha</span>
                                            <div class="card_paper__tags">
                                                <a href="#">Alloxan</a>
                                                <a href="#">Endemic</a>
                                                <a href="#">Health science</a>
                                                <a href="#">Hypoglycemic</a>
                                                <a href="#">Philippines</a>
                                                <a href="#">Phytochemicals</a>
                                                <a href="#">Sprague Dawley Rats</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Published issue & INNSPUB JOURNALS slide -->
        <section class="section_gap bg-white px-0">
            <!-- Published issue Slider -->
            <div class="container position-relative mb-5">
                <div class="swiper published_issue">
                    <h2 class="ps-3 ps-sm-0">Published issue</h2>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes.webp" alt="jbes">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">JBES-Number 2 Vol.18 2021</a>
                                    <span>Category: JBES</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/ijaar.webp" alt="ijaar">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: IJAAR</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/ijaar_2.webp" alt="ijaar_2">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: IJAAR</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes_2.webp" alt="jbes_2">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: JBES</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="577" src="<?php echo get_template_directory_uri(); ?>/assets/images/published_issue/jbes_2.webp" alt="jbes_2">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: JBES</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination d-lg-none"></div>
                    <!-- navigation buttons -->
                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                    <div class="swiper-button-next d-none d-lg-flex"></div>
                </div>

            </div>

            <!-- INNSPUB JOURNALS Slider -->
            <div class="container position-relative">
                <div class="swiper innspub_journal">
                    <h2 class="ps-3 ps-sm-0">INNSPUB journals</h2>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijbb.webp" alt="ijbb">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">JBES-Number 2 Vol.18 2021</a>
                                    <span>Category: ijbb</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijb.webp" alt="ijb">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: ijb</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/jbes.webp" alt="jbes">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: jbes</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijaar.webp" alt="ijaar">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: ijaar</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card_secondary">
                                <div class="card__journal">
                                    <img width="408" height="544" src="<?php echo get_template_directory_uri(); ?>/assets/images/innspub_journal/ijaar.webp" alt="ijaar">
                                </div>

                                <div class="card__journal_name">
                                    <a href="#">ijaar-Number 2 Vol.18 2021</a>
                                    <span>Category: ijaar</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination d-lg-none"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                    <div class="swiper-button-next d-none d-lg-flex"></div>
                </div>

            </div>
        </section>


    </main>

<?php
get_footer();