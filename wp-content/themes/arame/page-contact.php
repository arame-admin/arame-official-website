<?php
/*
Template Name: Contact
*/
get_header();
?>

<main>
    <section id="service-hero">
        <h1 class="hero-title">
            High-Tailored IT Solutions & Dedicated Software Services
        </h1>
        <p class="hero-subtitle">
            Our expert engineering teams provide world-class software solutions with
            efficient workflows and scalable architecture.
        </p>
    </section>

    <!-- MAIN CONTACT CARD -->
    <div class="contact-card">
        <!-- LEFT FORM -->
        <div class="form-section">
            <div class="form-header">
                <h2>Get In Touch</h2>
                <p>We’re here for you! Let us know how we can help.</p>
            </div>

            <form>
                <div class="input-group">
                    <input type="text" class="custom-input" placeholder="Enter your name" required />
                </div>

                <div class="input-group">
                    <input type="email" class="custom-input" placeholder="Enter your email address" required />
                </div>

                <div class="input-group">
                    <textarea id="message" class="custom-input" placeholder="Go ahead, we are listening..."
                        required></textarea>
                </div>

                <button class="submit-button">Submit</button>
            </form>
        </div>

        <!-- RIGHT INFORMATION SECTION -->
        <div class="info-section">
            <div class="illustration-area"></div>

            <ul class="contact-details">
                <li><i class="fas fa-map-marker-alt"></i> 674 Washington Avenue</li>
                <li><i class="fas fa-phone-alt"></i> 602-216-4843</li>
                <li><i class="fas fa-envelope"></i> johndoe123@gmail.com</li>
            </ul>
        </div>

        <!-- FLOATING SOCIAL BAR -->
        <div class="social-sidebar">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/arameglobal/posts/?feedView=all"><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>