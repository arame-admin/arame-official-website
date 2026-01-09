document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-btn");
  const items = document.querySelectorAll(".tech-item");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const category = tab.dataset.category;

      items.forEach(item => {
        item.classList.remove("show");
        if (item.classList.contains(category)) {
          item.classList.add("show");
        }
      });
    });
  });
});
