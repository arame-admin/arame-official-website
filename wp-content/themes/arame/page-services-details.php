<?php
/*
Template Name: Services Details
*/
get_header();
?>


<section id="service-hero">
  <div class="container-xl">
    <h1 class="hero-title">
      Professional Services, Accountable Delivery.
    </h1>
    <p class="hero-subtitle">
      Our services are built on ownership, proven delivery frameworks, and quality-first execution. We support our clients with confidence, clarity, and long-term commitment.
    </p>
  </div>
</section>

<!-- Service Navigation -->
<section id="service-navigation" class="service-navigation-wrapper mb-5">
  <div class="service-nav-wrapper bg-light rounded-3 p-4">
    <h4 class="text-center mb-4 fw-bold">Quick Navigation</h4>
    <div class="service-buttons d-flex flex-wrap justify-content-center gap-2">
      <a href="#Product-Engineering" class="btn btn-primary">Product Engineering</a>
      <a href="#Collaborative-Development" class="btn btn-primary">Collaborative Development</a>
      <a href="#Custom-Software" class="btn btn-primary">Technology Consulting</a>
      <a href="#Cloud" class="btn btn-primary">Cloud & Migration</a>
      <a href="#Transformation-Consulting" class="btn btn-primary">Security & Compliance</a>
      <a href="#Digital-Marketing" class="btn btn-primary">Digital Marketing</a>
    </div>
  </div>
</section>


<hr class="my-5" />

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
        <h5>Technology-Agnostic Decisions</h5>
        <p>
          We are not tied to tools or vendors. Every technology choice is guided by what best serves your business goals, risk profile, and long-term sustainability
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-code core-icon"></i>
        <h5>Process, Quality & Delivery Excellence</h5>
        <p>

          Strong processes, clear standards, and disciplined execution define how we work. Quality and reliability are embedded into every phase — from planning to post-delivery support.

        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-screwdriver-wrench core-icon"></i>
        <h5>Cloud-First by Design</h5>
        <p>
        
          We architect solutions with cloud scalability, resilience, and performance at the core. Our cloud-first approach ensures your systems are future-ready, cost-efficient, and easy to evolve.

        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="core-card">
        <i class="fas fa-hands-helping core-icon"></i>
        <h5>Security, Privacy & Compliance-Led</h5>
        <p>

          Data security, privacy, and regulatory compliance are built in by design, not added later. We help you operate with confidence in trust-critical and regulated environments.

        </p>
      </div>
    </div>
  </div>
</section>

<hr class="my-5" />

<section id="detail-blocks" class="container-xl">
  <div class="text-center mb-2">
    <h2 class="fw-bolder display-6 text-dark">
      Our Process and Detailed Offerings
    </h2>
    <p class="lead text-muted">
      A closer look at how we deliver value through specialized service
      blocks.
    </p>
  </div>

  <!--   1  -->
  <div id="Product-Engineering" class="row service-block align-items-center animate-section">
    <div class="col-lg-5 image-animate">
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/producteng.png" class="service-image"  alt="QA & Testing" />
        </div>
    </div>
    <div class="col-lg-7 text-content content-animate ">
      <span class="badge mb-3" style="background: #48a6e4ff;">Service Focus</span>
      <h2>Product Engineering & Platform Development</h2>
      <p>
       We partner with organizations to design, build, and scale digital products that are secure, scalable, and future-ready. From early-stage ideas to mature platforms, we bring structure, clarity, and engineering excellence to every phase of the product lifecycle.
      </p>
      <p>
        Our approach is cloud-first, technology-agnostic, and deeply rooted in strong processes, quality standards, and accountability.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Product discovery & strategy</li>
        <li>MVP and proof-of-concept development</li>
        <li>SaaS and platform engineering</li>
        <li>Architecture design & scalability planning</li>
        <li>Continuous product enhancement & support</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Align product vision with real business outcomes</li>
        <li>Reduce risk through phased, well-governed execution</li>
        <li>Design for scale, security, and compliance from day one</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
  </div>

  <!--   2   -->
  <div id="Collaborative-Development" class="row service-block align-items-center animate-section">
    <div class="col-lg-7 text-content content-animate order-lg-1 order-2">
      <span class="badge bg-primary mb-3">Service Focus</span>
      <h2> Collaborative Development & Dedicated Teams</h2>
      <p>
          We work as an extension of your internal team, sharing ownership, accountability, and delivery responsibility. Our collaborative engagement models are designed for long-term partnerships and predictable outcomes.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Dedicated development teams</li>
        <li>Co-development and staff augmentation models</li>
        <li>Agile delivery and sprint management</li>
        <li>Transparent reporting and governance</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Faster delivery without compromising quality</li>
        <li>High accountability and clear ownership</li>
        <li>Seamless collaboration with your internal stakeholders</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
    <div class="col-lg-5 image-animate order-lg-2 order-1">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/collaborative.png" class="service-image"  alt="Collaborative Development" />
      </div>
    </div>
  </div>

  <!--  3   -->
  <div id="Custom-Software" class="row service-block align-items-center animate-section">
    <div class="col-lg-5 image-animate">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/CustomSoftware.png" class="service-image"  alt="Collaborative Development" />
      </div>
    </div>
    <div class="col-lg-7 text-content content-animate">
      <span class="badge mb-3" style="background: #488ce4ff;">Service Focus</span>
      <h2>Custom Software & Enterprise Solutions</h2>
      <p>
       We build tailored software solutions aligned with your workflows, users, and operational realities. No one-size-fits-all systems — only solutions designed around your business.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Web and mobile application development</li>
        <li>Enterprise application development</li>
        <li>System integration and API development</li>
        <li>Legacy system enhancement</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Software that fits your processes, not the other way around</li>
        <li>Improved efficiency and operational clarity</li>
        <li>Secure, maintainable, and scalable systems</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
  </div>

  <!--   4   -->
  <div id="Cloud" class="row service-block align-items-center animate-section">
    <div class="col-lg-7 text-content content-animate order-lg-1 order-2">
      <span class="badge mb-3" style="background: #48cae4;">Service Focus</span>
      <h2>Cloud, DevOps & Technology Migration</h2>
      <p>
        As a cloud-first organization, we help clients modernize infrastructure, migrate legacy systems, and adopt DevOps practices with minimal disruption.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Cloud readiness assessments</li>
        <li>Application, data, and infrastructure migration</li>
        <li>DevOps pipelines and automation</li>
        <li>Performance, cost, and reliability optimization</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Reduced downtime and migration risk</li>
        <li>Improved scalability and resilience</li>
        <li>Better cost control and operational efficiency</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
    <div class="col-lg-5 image-animate order-lg-2 order-1">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/Cloud.jpg" class="service-image"  alt="Cloud, DevOps" />
      </div>
    </div>
  </div>

  <!--    5    -->
  <div id="Transformation-Consulting" class="row service-block align-items-center animate-section">
    <div class="col-lg-5 image-animate">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/Transformation.png" class="service-image"  alt="Transformation.png" />
      </div>
    </div>
    <div class="col-lg-7 text-content content-animate">
      <span class="badge mb-3" style="background: #14a1ffff;">Service Focus</span>
      <h2>Transformation Consulting, Change & Compliance</h2>
      <p>
        Technology transformation is as much about people and processes as it is about systems. We guide organizations through informed decision-making, change adoption, and compliance alignment.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Technology and architecture consulting</li>
        <li>Digital transformation roadmaps</li>
        <li>Change management and adoption support</li>
        <li>Data security, privacy, and regulatory compliance</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Clear, unbiased technology recommendations</li>
        <li>Smoother transitions with higher adoption</li>
        <li>Compliance-ready systems and processes</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
  </div>

  <!-- 6 -->
  <div id="Digital-Marketing" class="row service-block align-items-center animate-section">
    <div class="col-lg-7 text-content content-animate order-lg-1 order-2">
      <span class="badge mb-3" style="background: #72b8e7ff;">Service Focus</span>
      <h2>Digital Marketing & Growth Enablement</h2>
      <p>
       Our digital marketing services are designed to enable sustainable growth and measurable outcomes, tightly aligned with your technology platforms and business goals.
      </p>
      <h6><b>What We Do</b></h6>
      <ul>
        <li>Digital marketing strategy and consulting</li>
        <li>Organic digital marketing (SEO, content, community & brand building)</li>
        <li>SEO and content marketing</li>
        <li>Paid advertising and campaign management</li>
      </ul>
      <h6><b>How We Add Value</b></h6>
      <ul>
        <li>Data-driven, process-led execution</li>
        <li>Marketing aligned with product and platform goals</li>
        <li>Transparent metrics and continuous optimization</li>
      </ul>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="action-button btn-primary-action">Get In Touch &rarr;</a>
    </div>
    <div class="col-lg-5 image-animate order-lg-2 order-1">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicepage/Digital-Marketing.png" class="service-image"  alt="Transformation.png" />
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
