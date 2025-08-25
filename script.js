const cursor = document.getElementById("custom-cursor");

document.addEventListener("mousemove", (e) => {
    cursor.style.top = e.clientY + "px";
    cursor.style.left = e.clientX + "px";
});

// Show cursor only when hovering on project links
const projectLinks = document.querySelectorAll(".glass-card-link");

projectLinks.forEach(link => {
    link.addEventListener("mouseenter", () => {
        cursor.style.display = "flex";
    });
    link.addEventListener("mouseleave", () => {
        cursor.style.display = "none";
    });
});

// Hide cursor by default
cursor.style.display = "none";



// Make heads draggable
const heads = document.querySelectorAll(".head");

heads.forEach(head => {
    let isDragging = false;
    let offsetX = 0;
    let offsetY = 0;

    head.style.cursor = "grab"; // visual feedback

    head.addEventListener("mousedown", (e) => {
        isDragging = true;
        offsetX = e.clientX - head.offsetLeft;
        offsetY = e.clientY - head.offsetTop;
        head.style.cursor = "grabbing";
        head.style.zIndex = 1000; // bring to front
    });

    document.addEventListener("mousemove", (e) => {
        if (isDragging) {
            head.style.left = (e.clientX - offsetX) + "px";
            head.style.top = (e.clientY - offsetY) + "px";
        }
    });

    document.addEventListener("mouseup", () => {
        if (isDragging) {
            isDragging = false;
            head.style.cursor = "grab";
            head.style.zIndex = "";
        }
    });
});


// Scroll reveal animations
document.addEventListener("DOMContentLoaded", () => {
    const selectors = [
        ".intro h1",
        ".projects .project-card",
        ".more-work",
        ".web-projects .web-project-card",
        ".web-projects img",
        ".about .about-text"
    ];

    const elements = Array.from(document.querySelectorAll(selectors.join(",")));

    const isInViewport = (el, minVisibleRatio = 0.1) => {
        const rect = el.getBoundingClientRect();
        const viewHeight = window.innerHeight || document.documentElement.clientHeight;
        const visibleY = Math.max(0, Math.min(rect.bottom, viewHeight) - Math.max(rect.top, 0));
        const elementHeight = Math.max(1, rect.height || 1);
        return visibleY / elementHeight >= minVisibleRatio;
    };

    // Gentle stagger for project cards
    const projectCards = document.querySelectorAll(".projects .project-card");
    projectCards.forEach((el, index) => {
        el.style.setProperty("--reveal-delay", `${index * 100}ms`);
    });

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                    obs.unobserve(entry.target);
                }
            });
        },
        {
            root: null,
            rootMargin: "0px 0px -10% 0px",
            threshold: 0.1,
        }
    );

    // Prepare and observe
    elements.forEach((el) => {
        if (isInViewport(el)) {
            // Instantly mark as in-view to avoid flicker
            el.classList.add("animate-on-scroll", "in-view");
        } else {
            el.classList.add("animate-on-scroll");
            observer.observe(el);
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
  const fadeElements = document.querySelectorAll(".fade-up");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  }, { threshold: 0.2 });

  fadeElements.forEach((el) => observer.observe(el));

  // Trigger fade on reload (for elements in viewport immediately)
  fadeElements.forEach((el) => {
    if (el.getBoundingClientRect().top < window.innerHeight) {
      el.classList.add("visible");
    }
  });
});



