jQuery(document).ready(function($) {
    'use strict';
    
    const $form = $('#newsletterForm');
    const $successMessage = $('#successMessage');
    const $submitBtn = $form.find('.btn-subscribe');
    const $btnText = $submitBtn.find('.btn-text');
    const $btnLoading = $submitBtn.find('.btn-loading');
    
    // Form submission handler
    $form.on('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const name = $('#subscriberName').val().trim();
        const email = $('#subscriberEmail').val().trim();
        const consent = $('#newsletterConsent').is(':checked');
        
        // Validate form
        if (!validateForm(name, email, consent)) {
            return;
        }
        
        // Show loading state
        showLoadingState(true);
        
        // Simulate API call (replace with actual AJAX call to your backend)
        simulateNewsletterSubmission(name, email)
            .then(function(response) {
                // Success
                showSuccessMessage();
                $form[0].reset();
            })
            .catch(function(error) {
                // Error handling
                showError('Something went wrong. Please try again.');
                console.error('Newsletter subscription error:', error);
            })
            .finally(function() {
                // Reset loading state
                showLoadingState(false);
            });
    });
    
    // Form validation
    function validateForm(name, email, consent) {
        let isValid = true;
        
        // Clear previous errors
        clearErrors();
        
        // Validate name
        if (!name) {
            showFieldError('#subscriberName', 'Please enter your name');
            isValid = false;
        } else if (name.length < 2) {
            showFieldError('#subscriberName', 'Name must be at least 2 characters');
            isValid = false;
        }
        
        // Validate email
        if (!email) {
            showFieldError('#subscriberEmail', 'Please enter your email address');
            isValid = false;
        } else if (!isValidEmail(email)) {
            showFieldError('#subscriberEmail', 'Please enter a valid email address');
            isValid = false;
        }
        
        // Validate consent
        if (!consent) {
            showFieldError('#newsletterConsent', 'Please agree to receive newsletter emails');
            isValid = false;
        }
        
        return isValid;
    }
    
    // Email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Show loading state
    function showLoadingState(loading) {
        if (loading) {
            $submitBtn.prop('disabled', true);
            $btnText.addClass('d-none');
            $btnLoading.removeClass('d-none');
        } else {
            $submitBtn.prop('disabled', false);
            $btnText.removeClass('d-none');
            $btnLoading.addClass('d-none');
        }
    }
    
    // Show success message
    function showSuccessMessage() {
        $form.addClass('d-none');
        $successMessage.removeClass('d-none');
        
        // Add animation class
        $successMessage.addClass('animate-in');
        
        // Auto close modal after 3 seconds
        setTimeout(function() {
            $('#newsletterModal').modal('hide');
            resetModal();
        }, 3000);
    }
    
    // Show error message
    function showError(message) {
        // Remove existing error messages
        $('.error-message').remove();
        
        // Create error message element
        const $errorDiv = $('<div class="error-message alert alert-danger d-flex align-items-center" role="alert">' +
            '<i class="fas fa-exclamation-triangle me-2"></i>' +
            '<span>' + message + '</span>' +
            '</div>');
        
        // Insert error message before form
        $form.before($errorDiv);
        
        // Auto remove after 5 seconds
        setTimeout(function() {
            $errorDiv.fadeOut(300, function() {
                $(this).remove();
            });
        }, 5000);
    }
    
    // Show field-specific error
    function showFieldError(fieldSelector, message) {
        const $field = $(fieldSelector);
        
        // Add error class
        $field.addClass('is-invalid');
        
        // Create error message
        const $errorDiv = $('<div class="invalid-feedback d-block">' + message + '</div>');
        $field.parent().append($errorDiv);
    }
    
    // Clear all errors
    function clearErrors() {
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        $('.error-message').remove();
    }
    
    // Reset modal to initial state
    function resetModal() {
        $form.removeClass('d-none');
        $successMessage.addClass('d-none');
        $successMessage.removeClass('animate-in');
        clearErrors();
        $form[0].reset();
        showLoadingState(false);
    }
    
    // Simulate newsletter submission (replace with actual AJAX call)
    function simulateNewsletterSubmission(name, email) {
        return new Promise(function(resolve, reject) {
            // Simulate network delay
            setTimeout(function() {
                // Simulate success (90% success rate for demo)
                if (Math.random() > 0.1) {
                    console.log('Newsletter subscription:', { name: name, email: email });
                    resolve({ success: true });
                } else {
                    reject(new Error('Server error'));
                }
            }, 2000); // 2 second delay
        });
    }
    
    // Real AJAX implementation example (uncomment and modify for actual backend)
    /*
    function submitNewsletterSubscription(name, email) {
        return $.ajax({
            url: '/wp-admin/admin-ajax.php',
            method: 'POST',
            data: {
                action: 'newsletter_subscribe',
                name: name,
                email: email,
                nonce: newsletterAjax.nonce
            },
            dataType: 'json'
        });
    }
    */
    
    // Real-time validation on field blur
    $('#subscriberName, #subscriberEmail').on('blur', function() {
        const $field = $(this);
        const value = $field.val().trim();
        
        // Clear previous errors for this field
        $field.removeClass('is-invalid');
        $field.parent().find('.invalid-feedback').remove();
        
        // Validate name field
        if ($field.attr('id') === 'subscriberName') {
            if (value && value.length < 2) {
                showFieldError('#subscriberName', 'Name must be at least 2 characters');
            }
        }
        
        // Validate email field
        if ($field.attr('id') === 'subscriberEmail') {
            if (value && !isValidEmail(value)) {
                showFieldError('#subscriberEmail', 'Please enter a valid email address');
            }
        }
    });
    
    // Checkbox validation on change
    $('#newsletterConsent').on('change', function() {
        const $checkbox = $(this);
        const $feedback = $checkbox.parent().find('.invalid-feedback');
        
        if ($checkbox.is(':checked')) {
            $checkbox.removeClass('is-invalid');
            $feedback.remove();
        }
    });
    
    // Reset modal when hidden
    $('#newsletterModal').on('hidden.bs.modal', function() {
        resetModal();
    });
    
    // Add smooth animations
    function addAnimations() {
        // Add CSS for animations if not already present
        if (!$('#newsletter-modal-animations').length) {
            $('<style id="newsletter-modal-animations">' +
                '.animate-in {' +
                'animation: slideInUp 0.6s ease-out;' +
                '}' +
                '@keyframes slideInUp {' +
                'from {' +
                'transform: translateY(20px);' +
                'opacity: 0;' +
                '}' +
                'to {' +
                'transform: translateY(0);' +
                'opacity: 1;' +
                '}' +
                '}' +
                '.error-message {' +
                'animation: shake 0.5s ease-in-out;' +
                '}' +
                '@keyframes shake {' +
                '0%, 100% { transform: translateX(0); }' +
                '25% { transform: translateX(-5px); }' +
                '75% { transform: translateX(5px); }' +
                '}' +
                '</style>').appendTo('head');
        }
    }
    
    // Initialize animations
    addAnimations();
    
    // Enhanced form interactions
    $('.form-control-custom').on('focus', function() {
        $(this).parent().addClass('focused');
    });
    
    $('.form-control-custom').on('blur', function() {
        $(this).parent().removeClass('focused');
        if ($(this).val()) {
            $(this).parent().addClass('filled');
        } else {
            $(this).parent().removeClass('filled');
        }
    });
    
    // Add subtle hover effects
    $('.benefit-item').hover(
        function() {
            $(this).find('i').addClass('pulse');
        },
        function() {
            $(this).find('i').removeClass('pulse');
        }
    );
    
    // Track modal interactions (analytics)
    $('#newsletterModal').on('shown.bs.modal', function() {
        console.log('Newsletter modal opened');
        // Add analytics tracking here
    });
    
    $('#newsletterModal').on('hidden.bs.modal', function() {
        console.log('Newsletter modal closed');
        // Add analytics tracking here
    });
});
