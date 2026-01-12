<!-- Footer  -->

<footer class="footer bg-dark text-light">
  <!-- Top Section -->
  <div class="footer-top-section position-relative text-white">
    <!-- Background Image -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Foorerlayer.jpg" class="footer-bg-img" alt="Wave Background" />

    <div class="container py-5 position-relative z-2">
      <div class="row align-items-center text-center text-lg-start">
        <!-- Left -->
        <div class="col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
          <div>
            <h3 class=" fw-bold" style="   font-family: 'Oswald', sans-serif; letter-spacing: 1px;">Building with Purpose. Delivering with Ownership.</h3>
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

        <div class="d-flex gap-3 mt-3 ms-5">
          <!-- <a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a> -->
          <!-- <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a> -->
          <a href="https://www.linkedin.com/company/arameglobal" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
          <!-- <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a> -->
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-semibold text-white mb-3">Useful Links</h5>
        <ul class="footer-list">
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About us</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Services</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('careers')); ?>">Careers</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Industries -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-semibold text-white mb-3">Industries</h5>
        <ul class="footer-list">
          <li><a href="<?php echo get_permalink(get_page_by_path('footer-details')); ?>">Property Management Systems</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('footer-details')); ?>">Financial Systems</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('footer-details')); ?>">Content Management Systems</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('footer-details')); ?>">Wellness Platforms</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('footer-details')); ?>">Heritage and Cultural Programs</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-semibold text-white mb-3">Contact Information</h5>

        <ul class="footer-contact">
          <li>
            <i class="fa fa-phone me-2 text-primary"></i>
            <a href="tel:+919847847135">+91 9746047135</a>
          </li>
          <li>
            <i class="fa fa-envelope me-2 text-primary"></i>
            <a href="mailto:info@arameglobal.com">info@arameglobal.com</a>
          </li>
          <li class="d-flex">
            <i class="fa fa-map-marker-alt me-2 text-primary"></i>
            <span>
              Arame Global Technologies Pvt Ltd, 
              Dotspace Business Center,
              Kowdiar, Trivandrum - 695003
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center py-3 text-muted small text-white">
    © Copyrights 2025 AraMe Global All rights reserved.
  </div>
</footer>

<!-- End of footer -->

<?php wp_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll("[include-html]");
    let total = elements.length;
    let loaded = 0;

    elements.forEach((el) => {
      const file = el.getAttribute("include-html");

      fetch(file)
        .then((response) => response.text())
        .then((data) => {
          el.innerHTML = data;

          const tempDiv = document.createElement("div");
          tempDiv.innerHTML = data;

          const scripts = tempDiv.querySelectorAll("script");

          scripts.forEach((oldScript) => {
            const newScript = document.createElement("script");

            if (oldScript.src) {
              newScript.src = oldScript.src;
            } else {
              newScript.textContent = oldScript.textContent;
            }

            document.body.appendChild(newScript);
          });

          loaded++;

          // Trigger event after all components finish loading
          if (loaded === total) {
            document.dispatchEvent(new Event("componentsLoaded"));
          }
        })
        .catch((err) => {
          el.innerHTML = `<p style="color:red;">Error loading ${file}</p>`;
          loaded++;
          if (loaded === total) {
            document.dispatchEvent(new Event("componentsLoaded"));
          }
        });
    });
  });
</script>

</body>
</html>


