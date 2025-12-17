const jobs = {
    pm: {
        title: "Junior Technical PM",
        description: "You will manage technical projects, collaborate with engineers, and ensure smooth delivery.",
        details: [
            "2+ years experience",
            "Remote – India",
            "Part Time"
        ]
    },
    nextjs: {
        title: "Senior Next.js Developer",
        description: "Lead the development of scalable, high-performance web applications using Next.js.",
        details: [
            "3+ years experience",
            "Trivandrum, Kerala",
            "Part Time"
        ]
    }
};

function openJobModal(key) {
    const job = jobs[key];
    document.getElementById("jobTitle").innerText = job.title;
    document.getElementById("jobDescription").innerText = job.description;

    const details = document.getElementById("jobDetails");
    details.innerHTML = "";
    job.details.forEach(d => {
        const li = document.createElement("li");
        li.textContent = d;
        details.appendChild(li);
    });

    document.getElementById("jobModal").style.display = "flex";
}

function closeJobModal() {
    document.getElementById("jobModal").style.display = "none";
}

function openApplyModal() {
    closeJobModal();
    document.getElementById("applyModal").style.display = "flex";
}

function closeApplyModal() {
    document.getElementById("applyModal").style.display = "none";
}