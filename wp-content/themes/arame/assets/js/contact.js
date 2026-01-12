document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    if (!form) return;

    //  PREVENT DOUBLE BINDING
    if (form.dataset.bound === "true") return;
    form.dataset.bound = "true";

    const nameInput = document.getElementById("contactName");
    const emailInput = document.getElementById("contactEmail");
    const messageInput = document.getElementById("contactMessage");

    const nameError = document.getElementById("error-name");
    const emailError = document.getElementById("error-email");
    const messageError = document.getElementById("error-message");
    const generalError = document.getElementById("error-general");
    const successMsg = document.getElementById("success-msg");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Clear previous messages
        nameError.textContent = '';
        emailError.textContent = '';
        messageError.textContent = '';
        generalError.textContent = '';
        successMsg.textContent = '';

        let hasError = false;

        // FRONT-END VALIDATION
        const nameVal = nameInput.value.trim();
        const emailVal = emailInput.value.trim();
        const messageVal = messageInput.value.trim();

        if (nameVal.length < 3) {
            nameError.textContent = "Please enter your full name (min 3 characters).";
            hasError = true;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailVal)) {
            emailError.textContent = "Please enter a valid email address.";
            hasError = true;
        }

        if (messageVal.length < 10) {
            messageError.textContent = "Message should be at least 10 characters.";
            hasError = true;
        }

        if (hasError) return;

        // AJAX submission
        const submitBtn = form.querySelector("button[type='submit']");
        submitBtn.disabled = true;
        submitBtn.textContent = "Submitting...";

        const formData = new FormData(form);
        formData.append("action", "submit_contact_form");
        formData.append("security", CONTACT_AJAX.nonce);

        try {
            const res = await fetch(CONTACT_AJAX.ajax_url, {
                method: "POST",
                body: formData
            });

            const data = await res.json();

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";

            if (data.success) {
                successMsg.textContent = data.data;
                form.reset();
            } else {
                const errors = data.data || {};
                if (errors.general) generalError.textContent = errors.general;
                if (errors.name) nameError.textContent = errors.name;
                if (errors.email) emailError.textContent = errors.email;
                if (errors.message) messageError.textContent = errors.message;
            }
        } catch (err) {
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
            generalError.textContent = "Network error. Please try again.";
            console.error("Fetch error:", err);
        }
    });
});
