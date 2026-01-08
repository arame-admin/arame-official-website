<?php
/*
Template Name: Contact
*/

// Handle form submission
if (isset($_POST['contact_submit'])) {

    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_submit')) {
        die('Security check failed');
    }

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = 'info@arameglobal.com';
    $subject = 'New Contact Message';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: $email"
    ];

    wp_mail($to, $subject, $body, $headers);
}

get_header();
?>

<main>
    <section id="service-hero">
        <h1 class="hero-title">
            Ownership-Driven Technology Services
        </h1>
        <p class="hero-subtitle">
            We don’t just deliver services — we take responsibility. Backed by structured processes, disciplined execution, and high quality standards, we partner with you to strengthen outcomes and elevate performance.
        </p>
    </section>

    <!-- MAIN CONTACT CARD -->
    <div class="contact-card">

        <!-- LEFT FORM -->
        <div class="form-section">
            <div class="form-header">
                <h2>Get In Touch</h2>
                <p>We’re here for you! Reach out to discuss your ideas, projects, or any questions — we’d love to collaborate.</p>
            </div>

            <form method="post">
                <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>

                <div class="input-group">
                    <input type="text" name="name" class="custom-input" placeholder="Enter your name" required />
                </div>

                <div class="input-group">
                    <input type="email" name="email" class="custom-input" placeholder="Enter your email address" required />
                </div>

                <div class="input-group">
                    <textarea name="message" class="custom-input" placeholder="Type your message or project details" required></textarea>
                </div>

                <button type="submit" name="contact_submit" class="submit-button">
                    Submit
                </button>
            </form>
        </div>

        <!-- RIGHT INFORMATION SECTION -->
        <div class="info-section">
            <div class="illustration-area"></div>

            <ul class="contact-details">
                <li><i class="fas fa-map-marker-alt"></i> Arame Global Technologies Private Limited,<br> Dotspace Business Center, <br> Kowdiar Trivandrum - 695003</li>
                <li><i class="fas fa-phone-alt"></i> +91 9746047135</li>
                <li><i class="fas fa-envelope"></i>  info@arameglobal.com</li>
            </ul>
        </div>

        <!-- FLOATING SOCIAL BAR -->
        <div class="social-sidebar">
            <a href="https://www.linkedin.com/company/arameglobal">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
