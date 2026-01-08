// const jobs = {
//     pm: {
//         title: "Junior Technical PM",
//         description: "You will manage technical projects, collaborate with engineers, and ensure smooth delivery.",
//         details: [
//             "2+ years experience",
//             "Remote – India",
//             "Part Time"
//         ]
//     },
//     nextjs: {
//         title: "Senior Next.js Developer",
//         description: "Lead the development of scalable, high-performance web applications using Next.js.",
//         details: [
//             "3+ years experience",
//             "Trivandrum, Kerala",
//             "Part Time"
//         ]
//     }
// };

// function openJobModal(key) {
//     const job = jobs[key];
//     document.getElementById("jobTitle").innerText = job.title;
//     document.getElementById("jobDescription").innerText = job.description;

//     const details = document.getElementById("jobDetails");
//     details.innerHTML = "";
//     job.details.forEach(d => {
//         const li = document.createElement("li");
//         li.textContent = d;
//         details.appendChild(li);
//     });

//     document.getElementById("jobModal").style.display = "flex";
// }

// function closeJobModal() {
//     document.getElementById("jobModal").style.display = "none";
// }

// function openApplyModal() {
//     closeJobModal();
//     document.getElementById("applyModal").style.display = "flex";
// }

// function closeApplyModal() {
//     document.getElementById("applyModal").style.display = "none";
// }

document.addEventListener("submit", function (e) {

    // Only target the apply form
    if (!e.target || e.target.id !== "applyForm") return;

    e.preventDefault();

    const name = document.getElementById("fullName").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const resume = document.getElementById("resume").files[0];
    const message = document.getElementById("message").value.trim();

    if (name.length < 3) {
        alert("Please enter your full name");
        return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return;
    }

    if (phone && !/^\d{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number");
        return;
    }

    if (!resume) {
        alert("Please upload your resume");
        return;
    }

    const allowedTypes = [
        "application/pdf",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ];

    if (!allowedTypes.includes(resume.type)) {
        alert("Resume must be PDF or Word file");
        return;
    }

    if (message.length < 10) {
        alert("Please explain why we should hire you");
        return;
    }

    alert("Application submitted successfully!");
    e.target.reset();
    document.getElementById("applyModal").style.display = "none";
});





// document.addEventListener("submit", function (e) {
//     if (!e.target || e.target.id !== "applyForm") return;
//     e.preventDefault();

//     const name = document.getElementById("fullName").value.trim();
//     const email = document.getElementById("email").value.trim();
//     const phone = document.getElementById("phone").value.trim();
//     const resume = document.getElementById("resume").files[0];
//     const message = document.getElementById("message").value.trim();
//     const jobTitle = document.getElementById("applyJobTitle").value.trim();

//     // Validation
//     if (name.length < 3) { alert("Enter your full name"); return; }
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailPattern.test(email)) { alert("Enter valid email"); return; }
//     if (phone && !/^\d{10}$/.test(phone)) { alert("Enter 10-digit phone"); return; }
//     if (!resume) { alert("Upload resume"); return; }
//     if (message.length < 10) { alert("Write why we should hire you"); return; }

//     const allowedTypes = [
//         "application/pdf",
//         "application/msword",
//         "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
//     ];
//     if (!allowedTypes.includes(resume.type)) { alert("Resume must be PDF or Word"); return; }

//     // FormData
//     const formData = new FormData();
//     formData.append('action', 'submit_career_form');
//     formData.append('fullName', name);
//     formData.append('email', email);
//     formData.append('phone', phone);
//     formData.append('applyJobTitle', jobTitle);
//     formData.append('message', message);
//     formData.append('resume', resume);
//     formData.append('nonce', career_ajax.nonce); // <-- include nonce

//     fetch(career_ajax.ajaxurl, { method: 'POST', body: formData })
//         .then(res => res.json())
//         .then(response => {
//             if (response.success) {
//                 alert(response.data);
//                 e.target.reset();
//                 document.getElementById("applyModal").style.display = "none";
//             } else {
//                 alert(response.data || "Something went wrong!");
//             }
//         })
//         .catch(err => { console.error(err); alert("Something went wrong!"); });
// });
