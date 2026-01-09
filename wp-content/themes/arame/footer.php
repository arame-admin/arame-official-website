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
<script>
function initSlider() {

  const slideContentInner = document.getElementById("slide-content-inner");
  const slideDotsContainer = document.getElementById("slide-dots");
  const mainImage = document.getElementById("mainImage");
  const secondaryImage = document.getElementById("secondaryImage");
  const mainImageContainer = document.getElementById("mainImageContainer");
  const secondaryImageContainer = document.getElementById("secondaryImageContainer");

  if (
    !slideContentInner ||
    !slideDotsContainer ||
    !mainImage ||
    !secondaryImage ||
    !mainImageContainer ||
    !secondaryImageContainer
  ) {
    return;
  }

  const slides = [
    {
      title: "Visionary Strategy",
      subtitle: "We define the future.",
      text: "We begin every project by deeply understanding your goals, crafting a clear, long-term strategic vision that ensures maximum relevance and impact for your business in the evolving digital landscape.",
      mainImage:"/wp-content/themes/arame/assets/images/about/future1.webp",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/future2.avif",
    },
    {
      title: "Precision Engineering",
      subtitle: "Code that delivers.",
      text: "Our dedicated engineers follow rigorous quality standards, ensuring every line of code is optimized for performance, security, and scalability. We build solutions that last.",
      mainImage:"/wp-content/themes/arame/assets/images/about/Precision1.jpg",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/Precision2.webp",
    },
    {
      title: "Client Partnership",
      subtitle: "Success is shared.",
      text: "We believe in transparent, collaborative partnership. From initial concept to final deployment and maintenance, we work side-by-side with you to ensure your vision is realized exactly as planned.",
      mainImage:"/wp-content/themes/arame/assets/images/about/Partnership1.webp",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/Partnership2.jpg",
    },
  ];

  let currentSlide = 0;
  let isAnimating = false;

  const getContentHTML = (slide) => `
    <p class="fw-bold text-uppercase mb-2" style="color:#3B82F6;">${slide.subtitle}</p>
    <h2 class="display-4 fw-bold mb-3">${slide.title}</h2>
    <p class="fs-5 text-secondary">${slide.text}</p>
  `;

  const createDots = () => {
    slideDotsContainer.innerHTML = "";
    slides.forEach((_, index) => {
      const dot = document.createElement("div");
      dot.className = "slide-dot";
      if (index === currentSlide) dot.classList.add("active");
      dot.onclick = () => switchSlide(index);
      slideDotsContainer.appendChild(dot);
    });
  };

  const updateDots = () => {
    [...slideDotsContainer.children].forEach((dot, i) =>
      dot.classList.toggle("active", i === currentSlide)
    );
  };

  const applyCenterState = () => {
    const slide = slides[currentSlide];

    slideContentInner.innerHTML = getContentHTML(slide);
    mainImage.src = slide.mainImage;
    secondaryImage.src = slide.secondaryImage;

    requestAnimationFrame(() => {
      slideContentInner.className = "slide-center";
      mainImageContainer.className = "image-box image-center";
      secondaryImageContainer.className = "image-box image-center";
    });

    updateDots();
    isAnimating = false;
  };

  const switchSlide = (index) => {
    if (isAnimating || index === currentSlide) return;
    isAnimating = true;

    slideContentInner.className = "slide-exit";
    mainImageContainer.className = "image-box image-exit";
    secondaryImageContainer.className = "image-box image-exit";

    setTimeout(() => {
      currentSlide = index;
      applyCenterState();
    }, 600);
  };

  // INIT
  createDots();
  applyCenterState();

  setInterval(() => {
    switchSlide((currentSlide + 1) % slides.length);
  }, 7000);
}

document.addEventListener("DOMContentLoaded", initSlider);
document.addEventListener("componentsLoaded", initSlider);
</script>


<script>
  const cards = document.querySelectorAll(".animate-card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    },
    {
      threshold: 0.2
    }
  );

  cards.forEach((card) => observer.observe(card));
</script>

<!-- service-details page animation -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const sections = document.querySelectorAll(".animate-section");

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate-in");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );

  sections.forEach(section => observer.observe(section));

});
</script>

</body>
</html>

<!-- about-details page animation -->
<script>
document.addEventListener("componentsLoaded", () => {
  const hero = document.querySelector(".animate-hero");

  if (!hero) return;

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        setTimeout(() => hero.classList.add("animate-in"), 50);
        observer.disconnect();
      }
    },
    { threshold: 0.4 }
  );

  observer.observe(hero);
});
</script>

<!-- contact submission -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    if (!form) return;

    // 🔒 PREVENT DOUBLE BINDING
    if (form.dataset.bound === "true") return;
    form.dataset.bound = "true";

    const nameInput = document.getElementById("contactName");
    const emailInput = document.getElementById("contactEmail");
    const messageInput = document.getElementById("contactMessage");

    const nameError = document.getElementById("error-name");
    const emailError = document.getElementById("error-email");
    const messageError = document.getElementById("error-message");
    const generalError = document.getElementById("error-general");
    const successMsg = document.getElementById("success-msg");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Clear previous messages
        nameError.textContent = '';
        emailError.textContent = '';
        messageError.textContent = '';
        generalError.textContent = '';
        successMsg.textContent = '';

        let hasError = false;

        // FRONT-END VALIDATION
        const nameVal = nameInput.value.trim();
        const emailVal = emailInput.value.trim();
        const messageVal = messageInput.value.trim();

        if (nameVal.length < 3) {
            nameError.textContent = "Please enter your full name (min 3 characters).";
            hasError = true;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailVal)) {
            emailError.textContent = "Please enter a valid email address.";
            hasError = true;
        }

        if (messageVal.length < 10) {
            messageError.textContent = "Message should be at least 10 characters.";
            hasError = true;
        }

        if (hasError) return;

        // AJAX submission
        const submitBtn = form.querySelector("button[type='submit']");
        submitBtn.disabled = true;
        submitBtn.textContent = "Submitting...";

        const formData = new FormData(form);
        formData.append("action", "submit_contact_form");
        formData.append("security", CONTACT_AJAX.nonce);

        try {
            const res = await fetch(CONTACT_AJAX.ajax_url, {
                method: "POST",
                body: formData
            });

            const data = await res.json();

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";

            if (data.success) {
                successMsg.textContent = data.data;
                form.reset();
            } else {
                const errors = data.data || {};
                if (errors.general) generalError.textContent = errors.general;
                if (errors.name) nameError.textContent = errors.name;
                if (errors.email) emailError.textContent = errors.email;
                if (errors.message) messageError.textContent = errors.message;
            }
        } catch (err) {
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
            generalError.textContent = "Network error. Please try again.";
            console.error("Fetch error:", err);
        }
    });
});
</script>



