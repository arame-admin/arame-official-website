<?php
/*
Template Name: Blog
*/
get_header();
?>

<section id="blog-hero">
    <div class="container-xl">
        <div class="hero-content">
            <h1 class="hero-title">Technology Insights & Industry Trends</h1>
            <p class="hero-text">
                Stay ahead with expert insights on Cloud Computing, AI & Machine Learning, 
                Cybersecurity, and Emerging Technologies. Learn from our experienced team 
                about the latest trends shaping the digital future.
            </p>
            <div class="row mt-4">
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-primary text-white rounded">
                        <i class="fas fa-cloud fa-2x mb-2"></i>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-success text-white rounded">
                        <i class="fas fa-brain fa-2x mb-2"></i>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-danger text-white rounded">
                        <i class="fas fa-shield-alt fa-2x mb-2"></i>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-info text-white rounded">
                        <i class="fas fa-rocket fa-2x mb-2"></i>
                    </div>
                </div>
            </div>
            <a href="#recent-articles" class="btn btn-primary btn-lg fw-bold">Explore Articles</a>
        </div>
    </div>
</section>

<main class="container-xl mb-5">
    <div class="row">


        <div class="col-lg-8" id="recent-articles">

            <h3 class="fw-bold mb-4 text-dark">Recent Articles</h3>


            <div id="blog-posts-container" class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                // Get initial posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                );
                
                // Check for category filtering from URL parameters
                if (isset($_GET['category']) && !empty($_GET['category'])) {
                    $category_ids = is_array($_GET['category']) ? $_GET['category'] : array($_GET['category']);
                    $args['category__in'] = array_map('intval', $category_ids);
                }
                
                // Check for tag filtering from URL parameters
                if (isset($_GET['tag']) && !empty($_GET['tag'])) {
                    $tag_ids = is_array($_GET['tag']) ? $_GET['tag'] : array($_GET['tag']);
                    $args['tag__in'] = array_map('intval', $tag_ids);
                }
                
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>


                <div class="col">
                    <div class="card h-100 post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="post-image" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <?php 
                            $default_image = get_post_meta(get_the_ID(), '_default_featured_image', true);
                            if ($default_image) : ?>
                                <img src="<?php echo esc_url($default_image); ?>" class="post-image" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <div class="post-image-placeholder">
                                    <i class="fas fa-image placeholder-icon"></i>
                                    <div class="placeholder-overlay">
                                        <span class="placeholder-text">Technology Article</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="card-body-custom">
                            <span class="badge bg-primary mb-2"><?php the_category(', '); ?></span>
                            <h4 class="card-title"><a href="<?php the_permalink(); ?>" class="read-more-link"><?php the_title(); ?></a></h4>
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <small class="text-muted"><?php echo get_the_date(); ?></small>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>
            </div>

        </div>

        <div class="col-lg-4 mt-5 mt-lg-0">


            <div class="promo-block">
                <h5 class="fw-bold">Level up your skills.</h5>
                <p class="mb-3">Subscribe to our newsletter for weekly tech deep dives and exclusive content.</p>
                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#newsletterModal">Subscribe Now</button>
            </div>


            <!-- Category and Tag Filters -->
            <div class="filters mt-4">
                <h6 class="fw-bold mb-3">Filter Articles</h6>
                <form id="blog-filter-form">

                    <div class="mb-4">
                        <div class="filter-section-header">
                            <i class="fas fa-folder-open filter-icon"></i>
                            <label class="form-label enhanced-label">Categories</label>
                        </div>
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            $checked = (isset($_GET['category']) && in_array($category->term_id, $_GET['category'])) ? 'checked' : '';
                            echo '<div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" name="category[]" value="' . $category->term_id . '" ' . $checked . '>
                                <label class="form-check-label">' . $category->name . '</label>
                            </div>';
                        }
                        ?>
                    </div>

                    <?php $tags = get_tags(); if (!empty($tags)) : ?>
                    <div class="mb-4">
                        <div class="filter-section-header">
                            <i class="fas fa-tags filter-icon"></i>
                            <label class="form-label enhanced-label">Tags</label>
                        </div>
                        <?php
                        foreach ($tags as $tag) {
                            $checked = (isset($_GET['tag']) && in_array($tag->term_id, $_GET['tag'])) ? 'checked' : '';
                            echo '<div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" name="tag[]" value="' . $tag->term_id . '" ' . $checked . '>
                                <label class="form-check-label">' . $tag->name . '</label>
                            </div>';
                        }
                        ?>
                    </div>

                    <?php endif; ?>
                </form>
            </div>

        </div>

    </div>
</main>

<!-- Newsletter Subscription Modal -->
<div class="modal fade newsletter-modal" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 position-relative">
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-header-content text-center w-100">
                    <div class="modal-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h5 class="modal-title" id="newsletterModalLabel">Stay Ahead of the Tech Curve</h5>
                    <p class="modal-subtitle">Get exclusive insights delivered to your inbox</p>
                </div>
            </div>
            <div class="modal-body">
                <div class="newsletter-benefits">
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Weekly tech deep dives</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Exclusive industry insights</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Early access to new content</span>
                    </div>
                </div>
                
                <form class="newsletter-form" id="newsletterForm">
                    <div class="form-group-custom">
                        <div class="input-group-custom">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" class="form-control-custom" id="subscriberName" placeholder="Your Name" required>
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <div class="input-group-custom">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control-custom" id="subscriberEmail" placeholder="Your Email Address" required>
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <div class="form-check-custom">
                            <input class="form-check-input-custom" type="checkbox" id="newsletterConsent" required>
                            <label class="form-check-label-custom" for="newsletterConsent">
                                I agree to receive newsletter emails and updates
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-subscribe w-100">
                        <span class="btn-text">Subscribe Now</span>
                        <span class="btn-loading d-none">
                            <i class="fas fa-spinner fa-spin"></i>
                            Subscribing...
                        </span>
                    </button>
                </form>
                
                <div class="success-message d-none" id="successMessage">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h6>Welcome to the Community!</h6>
                    <p>You've successfully subscribed to our newsletter. Get ready for amazing content!</p>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <small class="text-muted">
                    <i class="fas fa-shield-alt"></i>
                    We respect your privacy. Unsubscribe at any time.
                </small>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
