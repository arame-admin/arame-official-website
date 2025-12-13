<?php
/*
Template Name: Careers
*/
get_header();
?>

    <section id="service-hero">
        <div class="container-xl">
            <h1 class="hero-title">High-Tailored IT Solutions and Dedicated Software Services</h1>
            <p class="hero-subtitle">
                View Technologies provides teams of dedicated software engineers who know how to satisfy client testing
                requirements with efficient management skills and software product engineering methodologies.
            </p>
        </div>
    </section>

    <div class="container">

        <section class="hero-section">
            <div class="hero-content">
                <h1>We're looking for skilled people.</h1>
                <p>
                    Created fourth third without female evening earth above make multiply sixth fly, created gathering
                    creature firmament.
                </p>
                <a href="#" class="apply-button">Apply Now</a>
            </div>
            <div class="hero-image">
                <img src="https://media.istockphoto.com/id/1477334129/photo/online-business-contract-electronic-signature-e-signing-digital-document-management-paperless.jpg?s=612x612&w=0&k=20&c=IVNrDVI5qUdbxIg0j4dn3CeJsNwOYRYbaDhu9K6hx5M="
                    alt="Two skilled people collaborating on a tablet">
            </div>
        </section>

        <hr>

        <section class="benefits-section">
            <div class="benefits-row">

                <div class="benefit-item">
                    <div class="icon-wrapper unlimited"></div>
                    <h3>Unlimited Benefits</h3>
                    <p>Bring that from man said god, his appear yielding upon signs fowl a bo deep with some meanings.
                    </p>
                </div>

                <div class="benefit-item">
                    <div class="icon-wrapper creative"></div>
                    <h3>Creative People</h3>
                    <p>Bring that from man said god, his appear yielding upon signs fowl a bo deep with some meanings.
                    </p>
                </div>

                <div class="benefit-item">
                    <div class="icon-wrapper remotely"></div>
                    <h3>Work Remotely</h3>
                    <p>Bring that from man said god, his appear yielding upon signs fowl a bo deep with some meanings.
                    </p>
                </div>

                <div class="benefit-item">
                    <div class="icon-wrapper vision"></div>
                    <h3>One Vision</h3>
                    <p>Bring that from man said god, his appear yielding upon signs fowl a bo deep with some meanings.
                    </p>
                </div>

            </div>
        </section>

        <hr>

        <section class="vision-section">
            <div class="vision-images">
                <img class="img-main"
                    src="https://media.istockphoto.com/id/2197955227/photo/humans-are-using-laptops-and-computers-to-interact-with-ai-helping-them-create-code-train-ai.jpg?s=612x612&w=0&k=20&c=LQF82XJxK0LeBcUUWD2SGOt_5r9PCo35Lx6wWtK8HnY="
                    alt="Person on phone laughing">
                <img class="img-top-right"
                    src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    alt="Group working">
                <img class="img-bottom-right"
                    src="https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041859.jpg?semt=ais_hybrid&w=740&q=80"
                    alt="Man petting dog">
            </div>
            <div class="vision-content">
                <h2>Our Vision</h2>
                <p>
                    Created fourth third without female evening earth above make multiply sixth fly, created gathering
                    creature firmament. Bring that from man said god, his appear yielding upon signs fowl also female
                    given.
                </p>
            </div>
        </section>

    </div>

    <!-- Footer  -->

    <footer class="footer bg-dark text-light">

        <!-- Top Section -->
        <div class="footer-top-section position-relative text-white">

            <!-- Background Image -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Foorerlayer.jpg" class="footer-bg-img" alt="Wave Background" />

            <div class="container py-5 position-relative z-2">

                <div class="row align-items-center text-center text-lg-start">

                    <!-- Left -->
                    <div
                        class="col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">

                        <div>
                            <p class="h4 fw-semibold mb-1">We’re Delivering the best</p>
                            <h3 class="display-6 fw-bold">customer Experience</h3>
                        </div>
                    </div>

                    <!-- Right Button -->
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="mailto:info@arameglobal.com" class="btn btn-light fw-bold px-4 py-3 rounded-pill">
                            info@arameglobal.com
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container py-5 border-bottom border-secondary">

            <div class="row g-4">

                <!-- Brand -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold mb-3 text-white">AraMe Global</h3>
                    <p class="text-muted">Clarity in Purpose, Precision in Code.</p>

                    <div class="d-flex gap-3 mt-3">

                        <a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold text-white mb-3">Useful Links</h5>
                    <ul class="footer-list">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('about-details')); ?>">About us</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('services-details')); ?>">Services</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('careers')); ?>">Career</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
                    </ul>
                </div>

                <!-- Industries -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold text-white mb-3">Industries</h5>
                    <ul class="footer-list">
                        <li><a href="#">Healthcare</a></li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Retail</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Manufacturing</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold text-white mb-3">Contact Information</h5>

                    <ul class="footer-contact">
                        <li><i class="fa fa-phone me-2 text-primary"></i> <a href="tel:+919847847135">+919847847135</a>
                        </li>
                        <li><i class="fa fa-envelope me-2 text-primary"></i> <a
                                href="mailto:info@arameglobal.com">info@arameglobal.com</a></li>
                        <li class="d-flex">
                            <i class="fa fa-map-marker-alt me-2 text-primary"></i>
                            <span>
                                Arame Global Technologies Private Limited,
                                Dotspace Business Center
                                TC 24/3088/2
                                Ushasandya Building,
                                Kowdiar - Devasom Board Road
                                Kowdiar Trivandrum - 695003
                            </span>
                        </li>
                    </ul>

                </div>

            </div>
        </div>

        <div class="text-center py-3 text-muted small">
            © Copyrights 2025 AraMe Global All rights reserved.
        </div>

    </footer>

<?php get_footer(); ?>