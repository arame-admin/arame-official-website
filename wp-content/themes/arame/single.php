<?php get_header(); ?>

<main class="container-xl my-5 py-lg-4">
    <div class="row justify-content-center">
        <div class="">

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

            <div class="mt-5 pt-4 border-top text-center">
                <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="btn btn-outline-primary fw-bold">← Back to All Articles</a>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>