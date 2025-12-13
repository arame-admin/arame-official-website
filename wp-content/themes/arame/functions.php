<?php

function arame_enqueue_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    // Enqueue FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

    wp_enqueue_style('googleFonts', "https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap");

    // Enqueue main CSS - assuming it's in theme directory
    wp_enqueue_style('arame-main', get_template_directory_uri() . '/css/style.css');

    // Enqueue other CSS
    wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about.css');
    wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about-details.css');
    wp_enqueue_style('global-css', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('home-css', get_template_directory_uri() . '/assets/css/home.css');
    wp_enqueue_style('navbar-css', get_template_directory_uri() . '/assets/css/navbar.css');
    wp_enqueue_style('navbar-css', get_template_directory_uri() . '/assets/css/careers.css');
    wp_enqueue_style('navbar-css', get_template_directory_uri() . '/assets/css/blog.css');
    wp_enqueue_style('services-css', get_template_directory_uri() . '/assets/css/services.css');
    wp_enqueue_style('skills-css', get_template_directory_uri() . '/assets/css/skills.css');
    wp_enqueue_style('tech-css', get_template_directory_uri() . '/assets/css/tech.css');
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/assets/css/footer.css');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue includes JS
    wp_enqueue_script('includes-js', get_template_directory_uri() . '/assets/js/includes.js', array('jquery'), null, true);

    // Enqueue services-details CSS for the specific page
    if (is_page_template('page-services-details.php')) {
        wp_enqueue_style('services-details-css', get_template_directory_uri() . '/assets/css/services-details.css');
    }

    // Enqueue about-details CSS for the specific page
    if (is_page_template('page-about-details.php')) {
        wp_enqueue_style('about-details-css', get_template_directory_uri() . '/assets/css/about-details.css');
    }

    // Enqueue careers CSS for the specific page
    if (is_page_template('page-careers.php')) {
        wp_enqueue_style('careers-css', get_template_directory_uri() . '/assets/css/careers.css');
    }

    // Enqueue contact CSS for the specific page
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('contact-css', get_template_directory_uri() . '/assets/css/contact.css');
    }

    // Enqueue blog CSS for blog page
    if (is_page('blog')) {
        wp_enqueue_style('blog-css', get_template_directory_uri() . '/assets/css/blog.css');
        wp_enqueue_script('blog-listing-js', get_template_directory_uri() . '/assets/js/blog-listing.js', array('jquery'), null, true);
    }

    // Enqueue single post CSS and JS for single posts
    if (is_single()) {
        wp_enqueue_style('single-post-css', get_template_directory_uri() . '/assets/css/single-post.css');
        wp_enqueue_script('blog-data-js', get_template_directory_uri() . '/assets/js/blog-data.js', array('jquery'), null, true);
        wp_enqueue_script('single-post-loader-js', get_template_directory_uri() . '/assets/js/single-post-loader.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'arame_enqueue_scripts');


// Function to create required pages
function arame_create_required_pages() {
    $pages = array(
        'services' => array(
            'title' => 'Services',
            'template' => 'page-services-details.php',
            'content' => 'This page will display detailed information about our services.'
        ),

        'about' => array(
            'title' => 'About Us',
            'template' => 'page-about-details.php',
            'content' => 'This page will display detailed information about our company.'
        ),
        'careers' => array(
            'title' => 'Careers',
            'template' => '',
            'content' => 'Join our team and build the future with us.'
        ),
        'blog' => array(
            'title' => 'Blog',
            'template' => '',
            'content' => 'Read our latest news and insights.'
        ),
        'contact' => array(
            'title' => 'Contact',
            'template' => '',
            'content' => 'Get in touch with us.'
        )
    );


    foreach ($pages as $slug => $page_data) {
        // Check if page already exists by slug
        $existing_page = get_page_by_path($slug);
        
        // Delete existing page if it exists with wrong structure
        if ($existing_page && strpos(get_permalink($existing_page->ID), '?page_id=') !== false) {
            wp_delete_post($existing_page->ID, true);
            $existing_page = null;
        }
        
        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title'     => $page_data['title'],
                'post_name'      => $slug,
                'post_content'   => $page_data['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_author'    => 1
            ));

            // Set page template if specified
            if (!empty($page_data['template']) && $page_id) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        }
    }
    
    // Flush rewrite rules to ensure clean URLs work
    flush_rewrite_rules();
}

// Hook to run when theme is activated
add_action('after_switch_theme', 'arame_create_required_pages');

// Also run on every page load if pages don't exist (for development)
add_action('init', 'arame_create_required_pages');
?>