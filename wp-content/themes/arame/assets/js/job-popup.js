const modal = document.getElementById("jobModal");
const modalTitle = document.getElementById("modalTitle");
const modalDesc = document.getElementById("modalDescription");
const responsibilitiesList = document.getElementById("modalResponsibilities");
const requirementsList = document.getElementById("modalRequirements");
const benefitsList = document.getElementById("modalBenefits");
const applyBtn = document.getElementById("applyBtn");
const closeBtn = document.querySelector(".close-btn");

document.querySelectorAll(".job-card").forEach(card => {
    card.addEventListener("click", () => {

        const title = card.dataset.title;
        const desc = card.dataset.description;
        const responsibilities = card.dataset.responsibilities.split(",");
        const requirements = card.dataset.requirements.split(",");
        const benefits = card.dataset.benefits.split(",");
        const subject = card.dataset.subject;

        modalTitle.textContent = title;
        modalDesc.textContent = desc;

        // Clear old data
        responsibilitiesList.innerHTML = "";
        requirementsList.innerHTML = "";
        benefitsList.innerHTML = "";

        // Populate lists
        responsibilities.forEach(item => {
            responsibilitiesList.innerHTML += `<li>${item}</li>`;
        });

        requirements.forEach(item => {
            requirementsList.innerHTML += `<li>${item}</li>`;
        });

        benefits.forEach(item => {
            benefitsList.innerHTML += `<li>${item}</li>`;
        });

        applyBtn.href =
            `https://mail.google.com/mail/?view=cm&fs=1&to=careers@arameglobal.com&su=${encodeURIComponent(subject)}`;

        modal.style.display = "block";
    });
});


closeBtn.onclick = () => modal.style.display = "none";
window.onclick = e => {
    if (e.target === modal) modal.style.display = "none";
};
