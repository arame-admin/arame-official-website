<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand text-opti-dark fw-bold d-flex align-items-center brand-title" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/navbar/logo.png" alt="arame Logo" class="me-2 brand-logo" />
                    AraMe Global
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-semibold">
                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo home_url(); ?>">HOME</a>
                        </li>


                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_page('services') ? 'active' : ''; ?>" href="<?php 
                                $services_page = get_page_by_path('services');
                                if ($services_page) {
                                    echo get_permalink($services_page);
                                } else {
                                    echo home_url('/services/');
                                }
                            ?>">SERVICES</a>
                        </li>

                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_page('about') ? 'active' : ''; ?>" href="<?php echo get_permalink(get_page_by_path('about')); ?>">ABOUT US</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_page('careers') ? 'active' : ''; ?>" href="<?php echo get_permalink(get_page_by_path('careers')); ?>">CAREERS</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_page('blog') ? 'active' : ''; ?>" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">BLOG</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-opti-dark <?php echo is_page('contact') ? 'active' : ''; ?>" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>