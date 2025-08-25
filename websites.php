<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web Projects</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display" />
  <style>
    body { cursor: none; }

    section.projects, section.single-project {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 5rem;
      padding: 5rem 2rem;
      max-width: 1400px;
      margin: 0 auto;
      box-sizing: border-box;
    }

    .project-card {
      flex: 1;
      max-width: 800px;
      min-width: 300px;
    }

    .project-card a {
        cursor: none; 
        display: block;
        }


    /* Carousel container */
    .carousel {
      position: relative;
      width: 100%;
      max-width: 100%;
      overflow: hidden;
      border-radius: 1rem;
    }

    .carousel img {
      width: 100%;
      display: none;
      border-radius: 1rem;
      transition: opacity 1s ease-in-out;
    }

    .carousel img.active {
      display: block;
      opacity: 1;
    }

    h2 {
      margin: 1rem 0 0.5rem;
      font-size: 1.5rem;
    }

    .project-card.second {
      margin-top: 6rem;
      transform: scale(1.08);
      transform-origin: center;
    }

    .project-card.second .carousel {
      margin-top: 2rem;
    }

    .single-project .project-card {
      max-width: 1100px;
    }
  </style>
</head>

<?php include 'header.html'; ?>

<body>
  <section class="section-title-right">
    <h1> Web Development </h1>
  </section>

  <!-- Top row projects -->
  <section class="projects">
    <!-- First Project -->
    <div class="project-card first">
    <a href="project1.php">
        <div class="carousel" data-carousel>
        <img src="assets/images/zystay01.webp" class="active" alt="Portfolio Project Screenshot 1">
        <img src="assets/images/zystay01.webp" alt="Portfolio Project Screenshot 2">
        <img src="assets/images/zystay01.webp" alt="Portfolio Project Screenshot 3">
        </div>
    </a>
    <h2>ZyStay</h2>
    <p class="desc">A booking website for Zymonne's Agritourism Park.</p>
    <p class="category">HTML, CSS, JavaScript, PHP, MySQL</p>
    </div>

    <!-- Second Project -->
    <div class="project-card second">
    <a href="project2.php">
        <div class="carousel" data-carousel>
        <img src="assets/images/zystay01.webp" class="active" alt="Portfolio Project Screenshot 1">
        <img src="assets/images/zystay01.webp" alt="Portfolio Project Screenshot 2">
        <img src="assets/images/zystay01.webp" alt="Portfolio Project Screenshot 3">
        </div>
    </a>
    <h2>Dynamic Blog Platform</h2>
    <p class="desc">A PHP & MySQL powered blog system with user authentication, CRUD posts, and a clean responsive design.</p>
    <p class="category">PHP, MySQL, Bootstrap</p>
    </div>
  </section>

  <!-- New Rectangle Cursor -->
  <div id="rect-cursor">
    <div class="rect-card">
      <span>VIEW</span>
    </div>
  </div>

  <!-- JS for carousel -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const carousels = document.querySelectorAll("[data-carousel]");

      carousels.forEach(carousel => {
        const images = carousel.querySelectorAll("img");
        let index = 0;

        setInterval(() => {
          images[index].classList.remove("active");
          index = (index + 1) % images.length;
          images[index].classList.add("active");
        }, 3000); // 3 sec per image
      });
    });
  </script>

  <hr class="services-divider">
  <script src="script-projects.js"></script>
</body>
</html>

<?php include 'contact.html'; ?>
<?php include 'footer.html'; ?>
