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
            <a href="#recent-articles" class="btn btn-primary btn-lg fw-bold">Read Our Story</a>
        </div>
    </div>
</section>

<main class="container-xl mb-5">
    <div class="row">

        <div class="col-lg-8" id="recent-articles">

            <h3 class="fw-bold mb-4 text-dark">Recent Articles</h3>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10, // Adjust as needed
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col">
                    <div class="card h-100">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <span class="badge bg-primary mb-2"><?php the_category(', '); ?></span>
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a></h5>
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

        </div>
    </div>
</main>

<?php get_footer(); ?>