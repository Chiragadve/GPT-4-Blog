const nav = document.querySelector(".nav");

const fixNav = () => {
  if (window.scrollY > nav.offsetHeight + 150) nav.classList.add("active");
  else nav.classList.remove("active");
};

window.addEventListener("scroll", fixNav);

// JavaScript to toggle 'active' class on click
document.querySelectorAll(".gpt-button").forEach((item) => {
  item.addEventListener("click", function () {
    // Remove 'active' class from all elements
    document
      .querySelectorAll(".gpt-button")
      .forEach((li) => li.classList.remove("active"));
    // Add 'active' class to the clicked element
    this.classList.add("active");
  });
});
