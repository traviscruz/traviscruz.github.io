<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Projects</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display" />
  <style>

    body {
        cursor: none;
      }

    /* A universal container for all project sections */
    section.projects,
    section.single-project {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 5rem;
      padding: 5rem 2rem;
      max-width: 1400px; /* prevents row from stretching too wide */
      margin: 0 auto;    /* keeps everything centered */
      box-sizing: border-box;
    }

    /* General project card styles */
    .project-card {
      flex: 1;
      max-width: 800px;
      min-width: 300px;
    }

    .project-video {
      width: 100%;
      border-radius: 1rem;
      overflow: hidden;
    }

    video {
      width: 100%;
      height: auto;
      display: block;
    }

    h2 {
      margin: 1rem 0 0.5rem;
      font-size: 1.5rem;
    }

    /* Staggered look for second card in rows */
    .project-card.second {
      margin-top: 6rem;
      transform: scale(1.08);
      transform-origin: center;
    }

    .project-card.second .project-video {
        margin-top: 2rem;
        }


    /* Bigger width for single project sections */
    .single-project .project-card {
      max-width: 1100px;
    }
  </style>
</head>
<?php include 'header.html'; ?>
<body>
  <section class="section-title-right fade up">
        <h1>
            Motion Design
        </h1>
    </section>
  <!-- Top row projects -->
  <section class="projects fade up">
    <!-- First Project -->
    <div class="project-card first">
      <div class="project-video">
        <video src="assets/videos/1036.mp4" muted  loop playsinline></video>
      </div>
      <h2>10:36</h2>
      <p class="desc">Beabadoobee Motion Graphics & Typography</p>
      <p class="category">After Effects, Blender 3d</p>
    </div>

    <!-- Second Project -->
    <div class="project-card second">
      <div class="project-video">
        <video src="assets/videos/gameboy.mp4" muted  loop playsinline></video>
      </div>
      <h2>GAMEBOY</h2>
      <p class="desc">KATSEYE 3d Scene Edit</p>
      <p class="category">Blender 3d</p>
    </div>
  </section>

  <!-- Single centered project -->
  <section class="single-project">
    <div class="project-card third">
      <div class="project-video">
        <video src="assets/videos/mars.mp4" muted  loop playsinline></video>
      </div>
      <h2>MARS</h2>
      <p class="desc">TWICE Motion Graphics & Typography Edit</p>
      <p class="category">After Effects</p>
    </div>
  </section>

  <!-- Another row -->
  <section class="projects">
    <!-- First Project -->
    <div class="project-card first">
      <div class="project-video">
        <video src="assets/videos/aiah.mp4" muted  loop playsinline></video>
      </div>
      <h2>That's What I Like</h2>
      <p class="desc">BINI Aiah Motion Graphics & Typography Edit</p>
      <p class="category">After Effects</p>
    </div>

    <!-- Second Project -->
    <div class="project-card second">
      <div class="project-video">
        <video src="assets/videos/handlebars.mp4" muted  loop playsinline></video>
      </div>
      <h2>HANDLEBARS</h2>
      <p class="desc">JENNIE Motion Graphics Typography Edit</p>
      <p class="category">After Effects</p>
    </div>
  </section>

  <!-- Single centered project -->
  <section class="single-project">
    <div class="project-card third">
      <div class="project-video">
        <video src="assets/videos/like jennie.mp4" muted  loop playsinline></video>
      </div>
      <h2>LIKE JENNIE</h2>
      <p class="desc">JENNIE Mixed Media Animation</p>
      <p class="category">Print Scans & After Effects</p>
    </div>
  </section>

  <!-- New Rectangle Cursor -->
  <div id="rect-cursor">
    <div class="rect-card">
      <span>PLAY</span>
    </div>
  </div>

  <hr class="services-divider">

  <script src="script-projects.js"></script>
</body>
</html>

<?php include 'contact.html'; ?>
<?php include 'footer.html'; ?>
