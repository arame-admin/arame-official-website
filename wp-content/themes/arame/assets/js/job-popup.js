document.addEventListener("DOMContentLoaded", () => {

  const jobCards = document.querySelectorAll(".job-card");
  const jobModal = document.getElementById("jobModal");
  const applyModal = document.getElementById("applyModal");

  const jobTitle = document.getElementById("jobTitle");
  const jobDescription = document.getElementById("jobDescription");
  const jobExperience = document.getElementById("jobExperience");
  const jobLocation = document.getElementById("jobLocation");
  const jobDepartment = document.getElementById("jobDepartment");
  const jobType = document.getElementById("jobType");
  const jobTypeInfo = document.getElementById("jobTypeInfo");

  const jobResponsibilities = document.getElementById("jobResponsibilities");
  const jobRequirements = document.getElementById("jobRequirements");

  const applyFromDetails = document.getElementById("applyFromDetails");
  const applyJobTitle = document.getElementById("applyJobTitle");

  let currentJob = "";

  jobCards.forEach(card => {
    card.addEventListener("click", () => {

      currentJob = card.dataset.title;

      jobTitle.textContent = card.dataset.title;
      jobDescription.textContent = card.dataset.description;
      jobExperience.textContent = card.dataset.experience;
      jobLocation.textContent = card.dataset.location;
      jobDepartment.textContent = card.dataset.department || "—";
      jobType.textContent = card.dataset.type;
      jobTypeInfo.textContent = card.dataset.type;

      fillList(jobResponsibilities, card.dataset.responsibilities);
      fillList(jobRequirements, card.dataset.requirements);

      jobModal.classList.add("show");
    });

    card.querySelector(".apply-btn").addEventListener("click", e => {
      e.stopPropagation();
      openApply(card.dataset.title);
    });
  });

  applyFromDetails.addEventListener("click", () => {
    jobModal.classList.remove("show");
    openApply(currentJob);
  });

  function openApply(title) {
    applyJobTitle.value = title;
    applyModal.classList.add("show");
  }

  function fillList(container, data) {
    container.innerHTML = "";
    if (!data) return;
    data.split(",").forEach(item => {
      const li = document.createElement("li");
      li.textContent = item.trim();
      container.appendChild(li);
    });
  }

  document.querySelectorAll(".modal-close").forEach(btn => {
    btn.addEventListener("click", () => {
      jobModal.classList.remove("show");
      applyModal.classList.remove("show");
    });
  });

});
