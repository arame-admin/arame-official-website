<?php
/*
Template Name: Services Details
*/
get_header();
?>


<section id="service-hero">
  <div class="container-xl">
    <h1 class="hero-title">
      High-Tailored IT Solutions and Dedicated Software Services
    </h1>
    <p class="hero-subtitle">
      AraMe Global provides teams of dedicated software engineers who
      know how to satisfy client testing requirements with efficient
      management skills and software product engineering methodologies.
    </p>
  </div>
</section>

<!-- Service Navigation -->
<section id="service-navigation" class="container-xl mb-5">
  <div class="row">
    <div class="col-12">
      <div class="service-nav-wrapper bg-light rounded-3 p-4">
        <h4 class="text-center mb-3 fw-bold">Quick Navigation</h4>
        <div class="row text-center">
          <div class="col-md-2 col-6 mb-2">
            <a href="#qa-testing" class="btn btn-outline-primary btn-sm w-100">QA & Testing</a>
          </div>
          <div class="col-md-2 col-6 mb-2">
            <a href="#development" class="btn btn-outline-primary btn-sm w-100">Development</a>
          </div>
          <div class="col-md-2 col-6 mb-2">
            <a href="#it-support" class="btn btn-outline-primary btn-sm w-100">IT Support</a>
          </div>
          <div class="col-md-2 col-6 mb-2">
            <a href="#professional-services" class="btn btn-outline-primary btn-sm w-100">Professional Services</a>
          </div>
          <div class="col-md-2 col-6 mb-2">
            <a href="#tech-migration" class="btn btn-outline-primary btn-sm w-100">Tech Migration</a>
          </div>
          <div class="col-md-2 col-6 mb-2">
            <a href="#security-compliance" class="btn btn-outline-primary btn-sm w-100">Security & Compliance</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="core-services" class="container-xl">
  <div class="row justify-content-center mb-5">
    <div class="col-lg-8">
      <h2 class="text-center fw-bolder text-dark mb-2">
        FOR YOUR VERY SPECIFIC INDUSTRY
      </h2>
      <h3 class="text-center fw-bolder text-primary mb-5">
        WE HAVE HIGH-TAILORED IT SOLUTIONS
      </h3>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-search-dollar core-icon"></i>
        <h5>QA & Testing</h5>
        <p>
          We have built a team of expert engineers who know how to go beyond
          the level.
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-code core-icon"></i>
        <h5>Development</h5>
        <p>
          We have built a team of expert engineers who know how to go beyond
          the level.
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-screwdriver-wrench core-icon"></i>
        <h5>Product and IT Support</h5>
        <p>
          We have built a team of expert engineers who know how to go beyond
          the level.
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-hands-helping core-icon"></i>
        <h5>Professional Services</h5>
        <p>
          We have built a team of expert engineers who know how to go beyond
          the level.
        </p>
      </div>
    </div>
  </div>
</section>

<hr class="my-5" />

<section id="detail-blocks" class="container-xl">
  <div class="text-center mb-5">
    <h2 class="fw-bolder display-6 text-dark">
      Our Process and Detailed Offerings
    </h2>
    <p class="lead text-muted">
      A closer look at how we deliver value through specialized service
      blocks.
    </p>
  </div>

  <!-- QA & Testing Section -->
  <div id="qa-testing" class="row service-block align-items-center">
    <div class="col-lg-5">
        <div class="image-container">
            <img src="https://images.unsplash.com/photo-1526378722484-bd91ca387e72?q=80&w=800&auto=format&fit=crop"
                class="service-image" alt="QA & Testing" />
        </div>
    </div>
    <div class="col-lg-7 text-content">
      <span class="badge bg-warning mb-3">Service Focus</span>
      <h2>QA & Testing Services</h2>
      <p>
        Our comprehensive <strong>QA and Testing services</strong> ensure your software meets the highest quality standards. We provide thorough testing methodologies including automated testing, performance testing, security testing, and user acceptance testing.
      </p>
      <p>
        Our expert QA engineers use cutting-edge tools and methodologies to identify issues early, reduce bugs in production, and ensure your applications perform flawlessly across all platforms and devices.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">ENSURE QUALITY &rarr;</a>
    </div>
  </div>

  <!-- Development Section -->
  <div id="development" class="row service-block align-items-center">
    <div class="col-lg-7 text-content order-lg-1 order-2">
      <span class="badge bg-primary mb-3">Service Focus</span>
      <h2>Development & Web Design</h2>
      <p>
        Whether it's a <strong>redesign of your current website</strong> or a total strip
        down and rebuild, we handle it. We'll create a functional,
        responsive and beautiful website that helps you rank highly, attract
        and sparks engagement and conversions from your visitors.
      </p>
      <p>
        Our process involves deep competitive analysis, wireframing,
        high-fidelity mockups, and rigorous performance testing to ensure a
        flawless launch.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">GET A HARD WORKING WEBSITE &rarr;</a>
    </div>
    <div class="col-lg-5 order-lg-2 order-1">
      <div class="image-container">
        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=2070&auto=format&fit=crop"
          class="service-image" alt="Development & Web Design" />
      </div>
    </div>
  </div>

  <!-- IT Support Section -->
  <div id="it-support" class="row service-block align-items-center">
    <div class="col-lg-5">
      <div class="image-container">
        <img src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?q=80&w=800&auto=format&fit=crop"
          class="service-image" alt="IT Support" />
      </div>
    </div>
    <div class="col-lg-7 text-content">
      <span class="badge bg-secondary mb-3">Service Focus</span>
      <h2>IT Support & Maintenance</h2>
      <p>
        Our <strong>comprehensive IT support services</strong> keep your business operations running smoothly. We provide 24/7 monitoring, proactive maintenance, and immediate issue resolution to minimize downtime and maximize productivity.
      </p>
      <p>
        From server management to network optimization, our certified IT professionals ensure your technology infrastructure is secure, reliable, and scalable.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">GET RELIABLE SUPPORT &rarr;</a>
    </div>
  </div>

  <!-- Professional Services Section -->
  <div id="professional-services" class="row service-block align-items-center">
    <div class="col-lg-7 text-content order-lg-1 order-2">
      <span class="badge bg-info mb-3">Service Focus</span>
      <h2>Professional Services & Digital Marketing</h2>
      <p>
        A <strong>sustainable marketing approach</strong> that reaches your dream
        customers, without relying on paid advertising. We'll work closely
        with you to create an on-brand organic digital ecosystem that gets
        and puts you in front of the right people and sends them to your
        website.
      </p>
      <p>
        This includes content strategy, SEO optimization, technical
        auditing, and strategic backlink building, ensuring long-term,
        cost-effective growth for your business.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">GET A STRATEGY THAT CONVERTS &rarr;</a>
    </div>
    <div class="col-lg-5 order-lg-2 order-1">
      <div class="image-container">
        <img src="https://images.unsplash.com/photo-1588102377317-03b9b47814b3?q=80&w=1932&auto=format&fit=crop"
          class="service-image" alt="Professional Services & Digital Marketing" />
      </div>
    </div>
  </div>

  <!-- Tech Migration Section -->
  <div id="tech-migration" class="row service-block align-items-center">
    <div class="col-lg-5">
      <div class="image-container">
        <img src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?q=80&w=800&auto=format&fit=crop"
          class="service-image" alt="Tech Migration" />
      </div>
    </div>
    <div class="col-lg-7 text-content">
      <span class="badge bg-success mb-3">Service Focus</span>
      <h2>Technology Migration & Modernization</h2>
      <p>
        Our <strong>technology migration services</strong> help you seamlessly transition to modern platforms and frameworks. We ensure zero downtime during migration while improving performance, security, and maintainability.
      </p>
      <p>
        From legacy system modernization to cloud migration, we handle every aspect of the transition process with careful planning, testing, and execution.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">MODERNIZE YOUR SYSTEMS &rarr;</a>
    </div>
  </div>

  <!-- Security & Compliance Section -->
  <div id="security-compliance" class="row service-block align-items-center">
    <div class="col-lg-7 text-content order-lg-1 order-2">
      <span class="badge bg-danger mb-3">Service Focus</span>
      <h2>Security & Compliance Solutions</h2>
      <p>
        Our <strong>cybersecurity services</strong> protect your business from digital threats while ensuring compliance with industry standards and regulations. We implement robust security measures and conduct regular audits.
      </p>
      <p>
        From penetration testing to compliance management (GDPR, HIPAA, SOC 2), we provide comprehensive security solutions that give you peace of mind and protect your valuable data.
      </p>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">SECURE YOUR BUSINESS &rarr;</a>
    </div>
    <div class="col-lg-5 order-lg-2 order-1">
      <div class="image-container">
        <img src="https://images.unsplash.com/photo-1510511459019-5dda7724fd87?q=80&w=800&auto=format&fit=crop"
          class="service-image" alt="Security & Compliance" />
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
