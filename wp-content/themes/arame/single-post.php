<?php
get_header();
?>

<main class="container-xl my-5 py-lg-4">
    <div class="row">
        <div class="col-12">

            <!-- Breadcrumb Navigation -->
            <nav class="breadcrumb-nav modern-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo wp_trim_words(get_the_title(), 8); ?>
                    </li>
                </ol>
            </nav>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article class="single-post-container fade-in-up blog-card">

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image-wrapper mb-4">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="post-featured-image rounded">
                    </div>
                <?php else : ?>
                    <?php 
                    $default_image = get_post_meta(get_the_ID(), '_default_featured_image', true);
                    if ($default_image) : ?>
                        <div class="featured-image-wrapper mb-4">
                            <img src="<?php echo esc_url($default_image); ?>" alt="<?php the_title(); ?>" class="post-featured-image rounded">
                        </div>
                    <?php else : ?>
                        <div class="post-image-placeholder mb-4">
                            <i class="fas fa-image placeholder-icon"></i>
                            <div class="placeholder-overlay">
                                <span class="placeholder-text">Technology Article</span>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- Post Header -->
                <header class="post-header mb-3">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta text-muted small d-flex flex-wrap gap-3">
                        <div class="post-meta-item"><i class="fas fa-calendar-alt me-1"></i><?php echo get_the_date(); ?></div>
                        <div class="post-meta-item"><i class="fas fa-user me-1"></i><?php the_author(); ?></div>
                        <div class="post-meta-item"><i class="fas fa-folder me-1"></i>
                            <?php 
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            }
                            ?>
                        </div>
                    </div>
                </header>

                <!-- Post Categories -->
                <div class="post-categories mb-3">
                    <?php
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" class="badge-category">' . $category->name . '</a>';
                    }
                    ?>
                </div>

                <!-- Post Content -->
                <div class="post-body mb-4 content-text">
                    <?php the_content(); ?>
                </div>

                <!-- Post Tags -->
                <?php 
                $tags = get_the_tags();
                if ($tags) : ?>
                <div class="post-tags mb-4">
                    <h6 class="fw-bold">Tags:</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-link">#<?php echo $tag->name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Author Bio -->
                <div class="author-bio mb-5">
                    <h4>About the Author</h4>
                    <div class="author-info d-flex align-items-center gap-3 mt-3">
                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 60)); ?>" alt="<?php the_author(); ?>" class="author-avatar rounded-circle">
                        <div class="author-details">
                            <h5><?php the_author(); ?></h5>
                            <p><?php echo get_the_author_meta('description') ?: 'Tech enthusiast and writer sharing insights on the latest technology trends.'; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Post Navigation -->
                <nav class="post-navigation mt-5">
                    <div class="d-flex justify-content-between flex-wrap gap-3">
                        <div class="nav-previous">
                            <?php previous_post_link('%link', '<i class="fas fa-arrow-left me-1"></i> Previous Post'); ?>
                        </div>
                        <div class="nav-next">
                            <?php next_post_link('%link', 'Next Post <i class="fas fa-arrow-right ms-1"></i>'); ?>
                        </div>
                    </div>
                </nav>

            </article>

            <?php endwhile; else : ?>
                <p class="alert alert-info">Sorry, no post found.</p>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
