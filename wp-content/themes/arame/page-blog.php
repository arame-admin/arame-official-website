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
                        <h6>Cloud & DevOps</h6>
                        <small>AWS, Docker, Kubernetes</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-success text-white rounded">
                        <i class="fas fa-brain fa-2x mb-2"></i>
                        <h6>AI & ML</h6>
                        <small>Machine Learning, Deep Learning</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-danger text-white rounded">
                        <i class="fas fa-shield-alt fa-2x mb-2"></i>
                        <h6>Security</h6>
                        <small>Cybersecurity, Privacy, GDPR</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="tech-category-card text-center p-3 bg-info text-white rounded">
                        <i class="fas fa-rocket fa-2x mb-2"></i>
                        <h6>Emerging Tech</h6>
                        <small>Blockchain, IoT, Innovation</small>
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
                            <div class="post-image-placeholder">
                                <i class="fas fa-image placeholder-icon"></i>
                                <div class="placeholder-overlay">
                                    <span class="placeholder-text">Technology Article</span>
                                </div>
                            </div>
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
                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary w-100">Subscribe Now</a>
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

<?php get_footer(); ?>