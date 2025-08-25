document.addEventListener("DOMContentLoaded", () => {
  let lastScrollY = window.scrollY;
  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", () => {
    if (window.scrollY > lastScrollY && window.scrollY > 100) {
      // scrolling down
      header.classList.add("hide");
    } else {
      // scrolling up
      header.classList.remove("hide");
    }
    lastScrollY = window.scrollY;
  });
});
