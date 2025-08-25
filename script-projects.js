document.addEventListener("DOMContentLoaded", () => {
  const videos = document.querySelectorAll("video");
  const rectCursor = document.getElementById("rect-cursor");
  const projectSections = document.querySelectorAll(".projects, .single-project");

  let cursorActive = false;

  // Track mouse only if inside projects section
  document.addEventListener("mousemove", (e) => {
    if (cursorActive && rectCursor) {
      rectCursor.style.left = e.clientX + "px";
      rectCursor.style.top = e.clientY + "px";
    }
  });

  projectSections.forEach((section) => {
    section.addEventListener("mouseenter", () => {
      document.body.style.cursor = "none";   // hide system cursor
      rectCursor.style.display = "block";    // show custom cursor
      cursorActive = true;
    });

    section.addEventListener("mouseleave", () => {
      document.body.style.cursor = "auto";   // restore normal cursor
      rectCursor.style.display = "none";     // hide custom cursor
      cursorActive = false;
    });
  });

  // Video hover play/pause
  videos.forEach((video) => {
    video.pause();

    video.addEventListener("mouseenter", () => {
      video.play().catch((err) => console.log("Play blocked:", err));
    });

    video.addEventListener("mouseleave", () => {
      video.pause();
    });
  });
});
