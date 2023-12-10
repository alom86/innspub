<?php
/**
 * Template part breadcumb
 * 
 */
?>

        <div class="breadcrumb_section bg_overlay">
            <!-- bg image -->
            <div class="breadcrumb_section__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/breadcumb_bg.webp" alt="breadcumb_bg">
            </div>

            <div class="container px-3 px-sm-0">
                <nav aria-label="breadcrumb">
                    <!-- mobile dropdown -->
                    <ol class="breadcrumb d-md-none">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item dropdown">
                            <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                ...
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="#">Back Page</a></li>
                                <li><a class="dropdown-item" href="#">Back Page 2</a></li>
                                <li><a class="dropdown-item" href="#">Back Page 3</a></li>
                            </ul>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                    </ol>
                    <!-- Large device -->
                    <ol class="breadcrumb d-none d-md-flex">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>