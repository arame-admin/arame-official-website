    <?php wp_footer(); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll("[include-html]");
            let total = elements.length;
            let loaded = 0;

            elements.forEach((el) => {
                const file = el.getAttribute("include-html");

                fetch(file)
                    .then((response) => response.text())
                    .then((data) => {
                        el.innerHTML = data;

                        const tempDiv = document.createElement("div");
                        tempDiv.innerHTML = data;

                        const scripts = tempDiv.querySelectorAll("script");

                        scripts.forEach((oldScript) => {
                            const newScript = document.createElement("script");

                            if (oldScript.src) {
                                newScript.src = oldScript.src;
                            } else {
                                newScript.textContent = oldScript.textContent;
                            }

                            document.body.appendChild(newScript);
                        });

                        loaded++;

                        // Trigger event after all components finish loading
                        if (loaded === total) {
                            document.dispatchEvent(new Event("componentsLoaded"));
                        }
                    })
                    .catch((err) => {
                        el.innerHTML = `<p style="color:red;">Error loading ${file}</p>`;
                        loaded++;
                        if (loaded === total) {
                            document.dispatchEvent(new Event("componentsLoaded"));
                        }
                    });
            });
        });
    </script>
    <script>
        const slides = [
            {
                title: "Visionary Strategy",
                subtitle: "We define the future.",
                text: "We begin every project by deeply understanding your goals, crafting a clear, long-term strategic vision that ensures maximum relevance and impact for your business in the evolving digital landscape.",
                mainImage:
                    "https://images.unsplash.com/photo-1542744196-18a72982d61b?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                secondaryImage:
                    "https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            },
            {
                title: "Precision Engineering",
                subtitle: "Code that delivers.",
                text: "Our dedicated engineers follow rigorous quality standards, ensuring every line of code is optimized for performance, security, and scalability. We build solutions that last.",
                mainImage:
                    "https://images.unsplash.com/photo-1542831371-29b0f74f945e?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                secondaryImage:
                    "https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            },
            {
                title: "Client Partnership",
                subtitle: "Success is shared.",
                text: "We believe in transparent, collaborative partnership. From initial concept to final deployment and maintenance, we work side-by-side with you to ensure your vision is realized exactly as planned.",
                mainImage:
                    "https://images.unsplash.com/photo-1550525811-e5869dd03032?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                secondaryImage:
                    "https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            },
        ];

        let currentSlide = 0;
        const slideContentInner = document.getElementById("slide-content-inner");
        const slideDotsContainer = document.getElementById("slide-dots");
        const mainImage = document.getElementById("mainImage");
        const secondaryImage = document.getElementById("secondaryImage");
        const mainImageContainer = document.getElementById("mainImageContainer");
        const secondaryImageContainer = document.getElementById(
            "secondaryImageContainer"
        );

        //HTML Template for Content
        const getContentHTML = (slide) => `
                <p class="text-opti-blue fw-bold mb-2 text-uppercase" style="letter-spacing: 0.1em;">${slide.subtitle}</p>
                <h2 class="display-4 fw-bold mb-4 text-gray-800">${slide.title}</h2>
                <p class="fs-5 text-secondary">${slide.text}</p>
                <a href="<?php echo get_permalink(get_page_by_path('about-details')); ?>" class="btn btn-opti-blue mt-4 py-3 px-5 fw-bold" style="border-radius: 0.3rem;">Read Our Story <i class="fas fa-arrow-right ms-2"></i></a>
            `;

        //Animation Logic
        const applyCenterState = () => {
            const slide = slides[currentSlide];
            slideContentInner.innerHTML = getContentHTML(slide);
            mainImage.src = slide.mainImage;
            secondaryImage.src = slide.secondaryImage;

            setTimeout(() => {
                slideContentInner.className = "slide-center";
                mainImageContainer.className = "image-box image-center";
                secondaryImageContainer.className = "image-box image-center";
            }, 50);

            updateDots();
        };

        const switchSlide = (newIndex) => {
            if (newIndex === currentSlide) return;

            slideContentInner.className = "slide-exit";
            mainImageContainer.className = "image-box image-enter";
            secondaryImageContainer.className = "image-box image-enter";

            setTimeout(() => {
                currentSlide = newIndex;
                applyCenterState();
            }, parseFloat(getComputedStyle(slideContentInner).transitionDuration) * 1000);
        };

        //Navigation Dots Logic
        const createDots = () => {
            slideDotsContainer.innerHTML = "";
            slides.forEach((_, index) => {
                const dot = document.createElement("div");
                dot.classList.add("slide-dot");
                if (index === currentSlide) {
                    dot.classList.add("active");
                }
                dot.addEventListener("click", () => switchSlide(index));
                slideDotsContainer.appendChild(dot);
            });
        };

        const updateDots = () => {
            document.querySelectorAll(".slide-dot").forEach((dot, index) => {
                dot.classList.toggle("active", index === currentSlide);
            });
        };

        //Initialization
        document.addEventListener("DOMContentLoaded", () => {
            createDots();
            applyCenterState();

            setInterval(() => {
                let nextSlide = (currentSlide + 1) % slides.length;
                switchSlide(nextSlide);
            }, 7000);
        });
    </script>
</body>
</html>