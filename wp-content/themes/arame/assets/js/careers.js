document.addEventListener("DOMContentLoaded", () => {

    const applyForm = document.getElementById("applyForm");
    if (!applyForm) return;

    //  Prevent duplicate bindings
    if (applyForm.dataset.bound === "true") return;
    applyForm.dataset.bound = "true";

    // Open modal
    document.querySelectorAll(".apply-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const card = btn.closest(".job-card");
            document.getElementById("applyJobTitle").value = card.dataset.title;
            document.getElementById("applyModal").style.display = "flex";
        });
    });

    // Close modal
    document.querySelectorAll(".modal-close").forEach(btn => {
        btn.addEventListener("click", () => {
            btn.closest(".modal-overlay").style.display = "none";
        });
    });

    // Submit form
    applyForm.addEventListener("submit", async e => {
        e.preventDefault();

        const submitBtn = applyForm.querySelector("button[type='submit']");
        if (submitBtn.disabled) return;

        submitBtn.disabled = true;
        submitBtn.textContent = "Submitting...";

        const formData = new FormData(applyForm);
        formData.append("action", "submit_job_application");
        formData.append("security", CAREERS_AJAX.nonce);

        try {
            const res = await fetch(CAREERS_AJAX.ajax_url, {
                method: "POST",
                body: formData
            });

            const data = await res.json();

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit Application";

            if (data.success) {
                alert(data.data);
                applyForm.reset();
                document.getElementById("applyModal").style.display = "none";
            } else {
                alert("Error: " + data.data);
            }

        } catch (err) {
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit Application";
            alert("Network error. Try again.");
            console.error(err);
        }
    });

});
