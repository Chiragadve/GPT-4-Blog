document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    const offsetTop = targetElement.offsetTop - 100;

    window.scrollTo({
      top: offsetTop,
      behavior: "smooth",
    });
  });
});

document.querySelectorAll(".post-titles a").forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const postId = this.getAttribute("data-id");

    fetch(`get_post.php?id=${postId}`)
      .then((response) => response.json())
      .then((data) => {
        document.querySelector(".blog-title").textContent = data.title;
        document.querySelector(".blog-content").innerHTML = data.content;
      })
      .catch((error) => console.error("Error:", error));
  });
});

const hamburgerMenu = document.getElementById("hamburger-menu");
const navLinks = document.getElementById("nav-links");

hamburgerMenu.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});
