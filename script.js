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
