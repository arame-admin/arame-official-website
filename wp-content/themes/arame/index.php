<?php get_header(); ?>

<main>
    <!-- hero section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 hero-upper-letters">
                        Growth, Engineered Right
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

                <!--   -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#qa-testing" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1526378722484-bd91ca387e72?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-magnifying-glass-chart service-icon"></i>
                                <h4>Product Engineering & Platform Development</h4>
                                <p>
                                    We design, build, and scale digital products with strong foundations and long-term vision. <br>
                                    Product strategy · MVPs · SaaS platforms · Continuous evolution

                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#development" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-code service-icon"></i>
                                <h4>Collaborative Development & Dedicated Teams</h4>
                                <p>
                                    We work as an accountable extension of your team, sharing ownership and delivery responsibility. <br>
                                    Co-development models · Dedicated teams · Agile delivery

                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--    -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#it-support" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-screwdriver-wrench service-icon"></i>
                                <h4>Custom Software & Enterprise Solutions</h4>
                                <p>
                                   
                                    Tailored applications aligned with your workflows, users, and business objectives.<br>
                                    Web & mobile apps · Enterprise systems · Integrations

                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!--    -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>#professional-services" class="service-card-link">
                        <div class="service-card" style="
                              background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800');
                            ">
                            <div class="content">
                                <i class="fa-solid fa-handshake service-icon"></i>
                                <h4>Cloud, DevOps & Technology Migration</h4>
                                <p>
                                    
                                    Cloud-first transformation covering infrastructure, applications, and data — delivered with minimal disruption.<br>
                                    Cloud migration · Legacy modernization · DevOps · Performance & cost optimization

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
                                <h4>Transformation Consulting, Change & Compliance</h4>
                                <p>
                                    
                                    Guiding clients through technology decisions, organizational change, and regulatory alignment.<br>
                                    Technology consulting · Architecture reviews · Change management · Data privacy · Compliance

                                </p>
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
                                <h4>Digital Marketing & Growth Enablement</h4>
                                <p>
                                    
                                    Process-driven, measurable digital marketing aligned with products, platforms, and business outcomes.<br>
                                    SEO · Paid media · Social strategy · Content · Funnels & analytics

                                </p>
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
                        Empowering Your Future —<br />
                        One  <span>Right Decision at a Time</span>
                    </h1>

                    <p class="desc">
                        Technology is powerful only when it serves people and purpose.
                        At AraMe Global, we design, build, and transform digital solutions with clarity, accountability, and care — helping organizations grow securely, compliantly, and sustainably.
                    </p>

                    <div class="experience-card">
                        <p>Built to Scale</p>
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

    <section id="tech-stack">
        <div class="container">

            <h2 class="tech-title">Technologies We Use</h2>
            <p class="tech-subtitle">
            As a trusted digital transformation services company, we use the latest AI
            frameworks, cloud platforms, and big data tools.
            </p>

            <!-- CATEGORY TABS -->
            <div class="tech-tabs">
            <button class="tab-btn active" data-category="ai">Data & AI</button>
            <button class="tab-btn" data-category="bi">Business Intelligence</button>
            <button class="tab-btn" data-category="ecommerce">E-commerce Platform</button>
            <button class="tab-btn" data-category="mobile">Mobile Solution</button>
            <button class="tab-btn" data-category="product">Product Engineering</button>
            </div>

            <!-- TECH GRID -->
            <div class="tech-grid">

            <!-- DATA & AI -->
            <div class="tech-item ai show">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg">
                <p>Python</p>
            </div>

            <div class="tech-item ai show">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg">
                <p>Java</p>
            </div>

            <!-- BI -->
            <div class="tech-item bi">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg">
                <p>PostgreSQL</p>
            </div>

            <!-- ECOMMERCE -->
            <div class="tech-item ecommerce">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg">
                <p>Magento</p>
            </div>

            <div class="tech-item ecommerce">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg">
                <p>WordPress</p>
            </div>

            <!-- MOBILE -->
            <div class="tech-item mobile">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg">
                <p>React Native</p>
            </div>

            <!-- PRODUCT -->
            <div class="tech-item product">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg">
                <p>Node JS</p>
            </div>

            </div>
        </div>
    </section>

    <!-- End of Tech Section -->
</main>

<?php get_footer(); ?>
