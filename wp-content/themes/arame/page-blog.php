<?php
/*
Template Name: Blog
*/
get_header();
?>

<section id="blog-hero">
    <div class="container-xl">
        <div class="hero-content">
            <h1 class="hero-title">A Blog for Passionate People and Website Lovers</h1>
            <p class="hero-text">
                We'll share everything we learn about growth, scaling, and the inner workings of building
                amazing digital experiences.
            </p>
        </div>
    </div>
</section>

<main class="container-xl mb-5">
    <div class="row">
        <div class="col-lg-8" id="recent-articles">
            <h3 class="fw-bold mb-4 text-dark">Recent Articles</h3>

            <div id="blog-posts-container" class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                // Build Query Arguments
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 10,
                    'paged'          => $paged
                );

                // Filter by Category
                if (isset($_GET['category']) && !empty($_GET['category'])) {
                    $args['category__in'] = array_map('intval', (array)$_GET['category']);
                }

                // Filter by Tag
                if (isset($_GET['tag']) && !empty($_GET['tag'])) {
                    $args['tag__in'] = array_map('intval', (array)$_GET['tag']);
                }

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <div class="col">
                        <div class="card h-100 post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', [
                                        'class' => 'post-featured-image img-fluid',
                                        'alt'   => get_the_title()
                                    ]); ?>
                                </a>
                            <?php else : ?>
                                <?php 
                                $default_image = get_post_meta(get_the_ID(), '_default_featured_image', true);
                                if ($default_image) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($default_image); ?>" alt="<?php the_title(); ?>" class="post-featured-image img-fluid">
                                    </a>
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
                                <div class="mb-2">
                                    <?php 
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '<span class="badge bg-primary">' . esc_html($categories[0]->name) . '</span>';
                                    }
                                    ?>
                                </div>
                                <h4 class="card-title">
                                    <a href="<?php the_permalink(); ?>" class="read-more-link text-decoration-none text-dark">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                                <div class="mt-auto">
                                    <small class="text-muted"><?php echo get_the_date(); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<div class="col-12"><p class="alert alert-info">No articles match your selection.</p></div>';
                endif;
                ?>
            </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="sidebar-sticky">
                <!-- Hiding this part for future use -->
                <!-- <div class="promo-block mb-4">
                    <h5 class="fw-bold">Level up your skills.</h5>
                    <p class="mb-3 small">Subscribe to our newsletter for weekly tech deep dives.</p>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#newsletterModal">Subscribe Now</button>
                </div> -->

                <div class="sidebar-item">
                    <h6 class="fw-bold mb-3"><i class="fas fa-filter me-2"></i>Filter Articles</h6>
                    <form id="blog-filter-form" method="GET" action="<?php echo esc_url(get_permalink()); ?>">
                        
                        <div class="mb-4">
                            <label class="fw-bold small text-uppercase mb-2 d-block">Categories</label>
                            <?php
                            $cats = get_categories();
                            foreach ($cats as $cat) :
                                $checked = (isset($_GET['category']) && in_array($cat->term_id, (array)$_GET['category'])) ? 'checked' : '';
                            ?>
                                <div class="form-check custom-checkbox">
                                    <input class="form-check-input filter-checkbox" type="checkbox" name="category[]" 
                                           value="<?php echo $cat->term_id; ?>" id="cat-<?php echo $cat->term_id; ?>" <?php echo $checked; ?>>
                                    <label class="form-check-label small" for="cat-<?php echo $cat->term_id; ?>">
                                        <?php echo $cat->name; ?> (<?php echo $cat->count; ?>)
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <?php $tags = get_tags(); if ($tags) : ?>
                        <div class="mb-3">
                            <label class="fw-bold small text-uppercase mb-2 d-block">Tags</label>
                            <div class="d-flex flex-wrap gap-2">
                                <?php foreach ($tags as $tag) : 
                                     $active_tag = (isset($_GET['tag']) && in_array($tag->term_id, (array)$_GET['tag'])) ? 'active-tag' : '';
                                ?>
                                    <div class="tag-filter-item">
                                        <input type="checkbox" name="tag[]" value="<?php echo $tag->term_id; ?>" 
                                               id="tag-<?php echo $tag->term_id; ?>" class="d-none filter-checkbox" 
                                               <?php echo (isset($_GET['tag']) && in_array($tag->term_id, (array)$_GET['tag'])) ? 'checked' : ''; ?>>
                                        <label for="tag-<?php echo $tag->term_id; ?>" class="badge border text-dark <?php echo $active_tag; ?> pointer">
                                            #<?php echo $tag->name; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <button type="submit" class="btn btn-outline-primary btn-sm w-100 mt-2">Apply Filters</button>
                        <?php if(isset($_GET['category']) || isset($_GET['tag'])): ?>
                            <a href="<?php echo get_permalink(); ?>" class="btn btn-link btn-sm w-100 text-muted mt-1">Clear All</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        document.getElementById('blog-filter-form').submit();
    });
});
</script>

<?php get_footer(); ?>