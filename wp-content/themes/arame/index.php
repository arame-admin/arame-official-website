<?php get_header(); ?>

<main>
    <!-- hero section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 hero-upper-letters">
                        Grow With Your Business
                    </h6>

                    <h1 class="display-4 fw-bold mb-4 hero-title">
                        Clarity in Purpose, <br />
                        Precision in Code.
                    </h1>

                    <p class="text-muted mb-4 hero-para">
                        We prioritize Clarity in Purpose by first defining the strategic
                        vision, ethical responsibility, and impact we aim for. This
                        clear focus then ensures Precision in Code, guaranteeing every
                        solution we build is of uncompromising quality, highly
                        efficient, and delivers maximum sustainable value.
                    </p>

                    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary px-4 py-2"> Get Started → </a>
                </div>

                <!-- RIGHT IMAGE AREA -->
                <div class="col-lg-6 position-relative ">
                    <div class="hero-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero01.jpg" class="img-fluid main-img" alt="Team Image" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagonal shape -->
        <div class="hero-shape"></div>
    </section>

    <!-- hero section -->

    <!-- about section -->

    <section class="same-layout-wrapper">
        <div class="about-section">
            <div class="container">
                <div id="about-container" class="row gx-5 gy-5 align-items-center">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <div id="text-content-wrapper">
                            <div id="slide-text">
                                <div id="slide-content-inner"></div>
                            </div>

                            <div id="slide-dots" class="mt-4 d-flex"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-lg-2 order-1">
                        <div class="image-wrapper w-100">
                            <div id="shapeContainer"></div>

                            <div id="mainImageContainer" class="image-box">
                                <img id="mainImage" src="" alt="Main image" />
                            </div>

                            <div id="secondaryImageContainer" class="image-box">
                                <img id="secondaryImage" src="" alt="Secondary image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of About Section -->

    <!-- services section -->

    <section id="services">
        <div class="container-xl">
            <div class="text-center mb-5">
                <p class="text-primary fw-bold">OUR SERVICES</p>
                <h2 class="section-title">
                    High-Tailored IT Solutions For Every Industry
                </h2>
            </div>


            <div class="row">

                <!--QA & TESTING -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#qa-testing" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1526378722484-bd91ca387e72?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-magnifying-glass-chart service-icon"></i>
                                <h4>QA & Testing</h4>
                                <p>
                                    Expert engineers ensuring software quality and seamless
                                    testing.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- DEVELOPMENT -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#development" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-code service-icon"></i>
                                <h4>Development</h4>
                                <p>
                                    Custom software designed for high performance and
                                    scalability.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--IT SUPPORT -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#it-support" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-screwdriver-wrench service-icon"></i>
                                <h4>IT Support</h4>
                                <p>
                                    Reliable support designed to keep your business running
                                    24/7.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--PROFESSIONAL SERVICES -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#professional-services" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-handshake service-icon"></i>
                                <h4>Professional Services</h4>
                                <p>
                                    Dedicated teams providing tailor-made IT & consulting
                                    solutions.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--TECH MIGRATION -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#tech-migration" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1526498460520-4c246339dccb?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-chart-line service-icon"></i>
                                <h4>Tech Migration</h4>
                                <p>Seamless migration to modern stacks with zero downtime.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--SECURITY -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#security-compliance" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1510511459019-5dda7724fd87?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-shield-halved service-icon"></i>
                                <h4>Security & Compliance</h4>
                                <p>Strong cybersecurity ensuring complete data protection.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Services Section -->

    <!-- Skills Section -->

    <section class="section-wrapper">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- LEFT SIDE CONTENT -->
                <div class="col-lg-6">
                    <h1 class="title">
                        Empowering Your Future<br />
                        with <span>Next-Gen IT Solutions</span>
                    </h1>

                    <p class="desc">
                        Our mission is to deliver world-class innovation with next-level
                        technology solutions. From infrastructure management to
                        cybersecurity and IT consulting — we ensure your business stays
                        ahead of competition.
                    </p>

                    <div class="experience-card">
                        <h1>1+</h1>
                        <small>Years of Excellence</small>
                    </div>

                    <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="learn-more">Discover More →</a>
                </div>

                <!-- RIGHT SIDE IMAGES-->
                <div class="col-lg-6">
                    <div class="image-collage-wrapper">
                        <!-- Blue shape background -->
                        <div class="blue-bg-shape"></div>

                        <!-- Random arranged images -->
                        <img
                            src="https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041859.jpg?semt=ais_hybrid&w=740&q=80"
                            class="collage-img img1" />
                        <img
                            src="https://media.gettyimages.com/id/616902766/photo/dedicated-to-software-development.jpg?s=612x612&w=gi&k=20&c=q18dzhCMnNty-rORThY4yFIf7s6LWBRh5fXT6Wytaqc="
                            class="collage-img img2" />
                        <img
                            src="https://www.shutterstock.com/image-photo/indian-man-developer-presentation-about-260nw-2449261997.jpg"
                            class="collage-img img3" />
                        <img
                            src="https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041859.jpg?semt=ais_hybrid&w=740&q=80"
                            class="collage-img img4" />
                        <img
                            src="https://media.gettyimages.com/id/616902766/photo/dedicated-to-software-development.jpg?s=612x612&w=gi&k=20&c=q18dzhCMnNty-rORThY4yFIf7s6LWBRh5fXT6Wytaqc="
                            class="collage-img img5" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Skills Section -->

    <!-- Tech Section -->

    <section id="tech-section">
        <div class="container position-relative" style="z-index: 5">
            <!-- Title & Subtitle -->
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Our Core Technologies</h2>
                    <p class="section-intro">
                        Powering innovation with modern tools and technologies to scale
                        your success.
                    </p>
                </div>
            </div>

            <!-- Auto Slider -->
            <div class="slider-container" id="slider">
                <div class="slider-track" id="track">
                    <!-- Technology Cards -->
                    <div class="tech-card">
                        <i class="fab fa-react tech-icon"></i>
                        <h5>React JS</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-python tech-icon"></i>
                        <h5>Python</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-aws tech-icon"></i>
                        <h5>AWS Cloud</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-docker tech-icon"></i>
                        <h5>Docker</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fas fa-cubes tech-icon"></i>
                        <h5>Kubernetes</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-node-js tech-icon"></i>
                        <h5>Node.js</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-php tech-icon"></i>
                        <h5>PHP</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fas fa-database tech-icon"></i>
                        <h5>SQL / NoSQL</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-figma tech-icon"></i>
                        <h5>Figma</h5>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-vuejs tech-icon"></i>
                        <h5>Vue JS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Tech Section -->
</main>

<?php get_footer(); ?>
