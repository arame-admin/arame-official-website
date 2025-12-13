
<?php get_header(); ?>

<main class="container-xl my-5 py-lg-4">
    <div class="row">
        <div class="col-lg-8">
            <article class="single-post-container fade-in-up">

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="post-featured-image">
                <?php endif; ?>

                <!-- Post Header -->
                <header class="post-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <div class="post-meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span><?php echo get_the_date('F j, Y'); ?></span>
                        </div>
                        <div class="post-meta-item">
                            <i class="fas fa-user"></i>
                            <span><?php the_author(); ?></span>
                        </div>
                        <div class="post-meta-item">
                            <i class="fas fa-clock"></i>
                            <span><?php echo estimated_reading_time(); ?> min read</span>
                        </div>
                    </div>
                </header>

                <!-- Post Categories -->
                <div class="post-categories">
                    <?php
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" class="category-badge">' . $category->name . '</a>';
                    }
                    ?>
                </div>

                <!-- Post Content -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <!-- Post Tags -->
                <?php 
                $tags = get_the_tags();
                if ($tags) :
                ?>
                <div class="post-tags">
                    <h4>Tags</h4>
                    <div class="post-tags-list">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag"><?php echo $tag->name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Author Bio -->
                <div class="author-bio">
                    <h4>About the Author</h4>
                    <div class="author-info">
                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 60)); ?>" alt="<?php the_author(); ?>" class="author-avatar">
                        <div class="author-details">
                            <h5><?php the_author(); ?></h5>
                            <p><?php echo get_the_author_meta('description') ?: 'Tech enthusiast and writer sharing insights on the latest technology trends.'; ?></p>
                        </div>
                    </div>
                </div>

            </article>

            <!-- Related Posts -->
            <section class="related-posts">
                <h3>Related Articles</h3>
                <div class="row row-cols-1 row-cols-md-2 g-4">
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
                        <article class="related-post-card scale-in">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="related-post-image">
                            <?php endif; ?>
                            <div class="related-post-content">
                                <h4 class="related-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p class="related-post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <div class="related-post-date">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    <?php echo get_the_date(); ?>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-center">No related posts found.</p>';
                    endif;
                    ?>
                </div>
            </section>

            <!-- Post Navigation -->
            <nav class="post-navigation">
                <div class="nav-links">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <div class="nav-previous">
                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="nav-link">
                                <div class="nav-subtitle">Previous Article</div>
                                <div class="nav-title"><?php echo get_the_title($prev_post); ?></div>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="nav-next">
                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="nav-link">
                                <div class="nav-subtitle">Next Article</div>
                                <div class="nav-title"><?php echo get_the_title($next_post); ?></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>

            <!-- Back to Blog -->
            <div class="text-center mt-4">
                <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-left me-2"></i>Back to All Articles
                </a>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            
            <!-- Category and Tag Filters -->
            <div class="filters sidebar-item">
                <h6 class="fw-bold mb-3">Filter Articles</h6>
                <form method="GET" action="<?php echo get_permalink(get_page_by_path('blog')); ?>">
                    <div class="mb-3">
                        <label class="form-label">Categories</label>
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
                    <div class="mb-3">
                        <label class="form-label">Tags</label>
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

<?php
// Helper function for estimated reading time
function estimated_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Assuming 200 words per minute
    return $reading_time;
}
?>

<?php get_footer(); ?>
