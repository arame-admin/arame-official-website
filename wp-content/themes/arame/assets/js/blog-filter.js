

// Blog filtering functionality with AJAX
jQuery(document).ready(function($) {
    const $container = $('#blog-posts-container');
    const $loader = $('<div class="text-center my-4"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>');

    function filterPosts() {
        const categories = [];
        const tags = [];

        // Get selected checkboxes
        $('input[name="category[]"]:checked').each(function() {
            categories.push($(this).val());
        });

        $('input[name="tag[]"]:checked').each(function() {
            tags.push($(this).val());
        });

        // Show loading
        $container.html($loader);

        // Make AJAX request
        $.ajax({
            url: blogAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'blog_filter',
                nonce: blogAjax.nonce,
                categories: categories,
                tags: tags
            },
            success: function(response) {
                if (response.success) {
                    $container.html(response.data);
                    updateURL(categories, tags);
                } else {
                    $container.html('<p>Error loading posts.</p>');
                }
            },
            error: function() {
                $container.html('<p>Error loading posts.</p>');
            }
        });
    }

    function updateURL(categories, tags) {
        const params = new URLSearchParams();
        
        if (categories.length > 0) {
            params.append('category', categories.join(','));
        }
        
        if (tags.length > 0) {
            params.append('tag', tags.join(','));
        }
        
        const newURL = params.toString() ? 
            window.location.pathname + '?' + params.toString() : 
            window.location.pathname;
        
        history.pushState({}, '', newURL);
    }


    // Trigger filter on checkbox change
    $(document).on('change', 'input.filter-checkbox', function() {
        filterPosts();
    });
});
