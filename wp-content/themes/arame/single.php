<?php get_header(); ?>

<main class="container-xl my-5 py-lg-4">
    <div class="row">
        <div class="col-lg-8">

            <article class="single-post-article">

                <div class="text-center article-header">

                    <span class="category-tag mb-3"><?php the_category(', '); ?></span>

                    <h1 class="display-5 fw-bold mb-4 text-dark"><?php the_title(); ?></h1>

                    <div class="post-meta-data text-muted d-flex justify-content-center small mb-5">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="post-header-image mb-5">
                <?php endif; ?>

                <section class="blog-content text-dark">
                    <?php the_content(); ?>
                </section>
            </article>

            <!-- Related Posts -->
            <div class="mt-5 pt-4 border-top">
                <h4 class="mb-4">Related Articles</h4>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <?php
                    $categories = get_the_category();
                    $category_ids = array();
                    foreach ($categories as $category) {
                        $category_ids[] = $category->term_id;
                    }
                    $tags = get_the_tags();
                    $tag_ids = array();
                    if ($tags) {
                        foreach ($tags as $tag) {
                            $tag_ids[] = $tag->term_id;
                        }
                    }
                    $related_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID()),
                        'category__in' => $category_ids,
                        'tag__in' => $tag_ids,
                        'orderby' => 'rand'
                    );
                    $related_query = new WP_Query($related_args);
                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h6 class="card-title"><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a></h6>
                                <p class="card-text small"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No related posts found.</p>';
                    endif;
                    ?>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="btn btn-outline-primary fw-bold">← Back to All Articles</a>
            </div>

        </div>
    </div>

    <div class="col-lg-4 mt-5 mt-lg-0">
        <!-- Category and Tag Filters -->
        <div class="filters">
            <h6 class="fw-bold mb-3">Filter Articles</h6>
            <form method="GET" action="<?php echo get_permalink(get_page_by_path('blog')); ?>">
                <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="' . $category->term_id . '">
                            <label class="form-check-label">' . $category->name . '</label>
                        </div>';
                    }
                    ?>
                </div>
                <?php $tags = get_tags(); if (!empty($tags)) : ?>
                <div class="mb-3">
                    <label class="form-label">Tags</label>
                    <?php
                    foreach ($tags as $tag) {
                        echo '<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tag[]" value="' . $tag->term_id . '">
                            <label class="form-check-label">' . $tag->name . '</label>
                        </div>';
                    }
                    ?>
                </div>
                <?php endif; ?>
            </form>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        this.closest('form').submit();
                    });
                });
            });
            </script>
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>