function initSlider() {

  const slideContentInner = document.getElementById("slide-content-inner");
  const slideDotsContainer = document.getElementById("slide-dots");
  const mainImage = document.getElementById("mainImage");
  const secondaryImage = document.getElementById("secondaryImage");
  const mainImageContainer = document.getElementById("mainImageContainer");
  const secondaryImageContainer = document.getElementById("secondaryImageContainer");

  if (
    !slideContentInner ||
    !slideDotsContainer ||
    !mainImage ||
    !secondaryImage ||
    !mainImageContainer ||
    !secondaryImageContainer
  ) {
    return;
  }

  const slides = [
    {
      title: "Visionary Strategy",
      subtitle: "We define the future.",
      text: "We begin every project by deeply understanding your goals, crafting a clear, long-term strategic vision that ensures maximum relevance and impact for your business in the evolving digital landscape.",
      mainImage:"/wp-content/themes/arame/assets/images/about/future1.webp",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/future2.avif",
    },
    {
      title: "Precision Engineering",
      subtitle: "Code that delivers.",
      text: "Our dedicated engineers follow rigorous quality standards, ensuring every line of code is optimized for performance, security, and scalability. We build solutions that last.",
      mainImage:"/wp-content/themes/arame/assets/images/about/Precision1.jpg",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/Precision2.webp",
    },
    {
      title: "Client Partnership",
      subtitle: "Success is shared.",
      text: "We believe in transparent, collaborative partnership. From initial concept to final deployment and maintenance, we work side-by-side with you to ensure your vision is realized exactly as planned.",
      mainImage:"/wp-content/themes/arame/assets/images/about/Partnership1.webp",
      secondaryImage:"/wp-content/themes/arame/assets/images/about/Partnership2.jpg",
    },
  ];

  let currentSlide = 0;
  let isAnimating = false;

  const getContentHTML = (slide) => `
    <p class="fw-bold text-uppercase mb-2" style="color:#3B82F6;">${slide.subtitle}</p>
    <h2 class="display-4 fw-bold mb-3" style=" font-family: 'Oswald', sans-serif;">${slide.title}</h2>
    <p class="fs-5 text-secondary">${slide.text}</p>
  `;

  const createDots = () => {
    slideDotsContainer.innerHTML = "";
    slides.forEach((_, index) => {
      const dot = document.createElement("div");
      dot.className = "slide-dot";
      if (index === currentSlide) dot.classList.add("active");
      dot.onclick = () => switchSlide(index);
      slideDotsContainer.appendChild(dot);
    });
  };

  const updateDots = () => {
    [...slideDotsContainer.children].forEach((dot, i) =>
      dot.classList.toggle("active", i === currentSlide)
    );
  };

  const applyCenterState = () => {
    const slide = slides[currentSlide];

    slideContentInner.innerHTML = getContentHTML(slide);
    mainImage.src = slide.mainImage;
    secondaryImage.src = slide.secondaryImage;

    requestAnimationFrame(() => {
      slideContentInner.className = "slide-center";
      mainImageContainer.className = "image-box image-center";
      secondaryImageContainer.className = "image-box image-center";
    });

    updateDots();
    isAnimating = false;
  };

  const switchSlide = (index) => {
    if (isAnimating || index === currentSlide) return;
    isAnimating = true;

    slideContentInner.className = "slide-exit";
    mainImageContainer.className = "image-box image-exit";
    secondaryImageContainer.className = "image-box image-exit";

    setTimeout(() => {
      currentSlide = index;
      applyCenterState();
    }, 600);
  };

  // INIT
  createDots();
  applyCenterState();

  setInterval(() => {
    switchSlide((currentSlide + 1) % slides.length);
  }, 7000);
}

document.addEventListener("DOMContentLoaded", initSlider);
document.addEventListener("componentsLoaded", initSlider);