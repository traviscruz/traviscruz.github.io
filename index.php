<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travis Cruz</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display" />
</head>
<body>

<?php include 'header.html'; ?>


    <section class="hero fade-up">
        <img src="assets/images/hero-vector.png" alt="Hero image" />
    </section>

    <!-- Intro Section -->
    <section class="intro fade-up">
        <h1>
            <span class="h1-right">I am a Motion Graphics</span>
            <span class="h1-left">
                and Web Designer passionate about<br />
                blending creativity with functionality.
            </span>
        </h1>
    </section>

    <section class="section-title-right fade-up">
        <h1>
            Motion Design
        </h1>
    </section>

    <!-- Projects Section -->
    <section class="projects fade-up">
        <div class="project-card">
            <a href="https://www.tiktok.com" target="_blank" class="glass-card-link">
                <video src="assets/videos/1036.mp4" muted autoplay loop playsinline></video>
            </a>
            <h2>10:36</h2>
            <p class="desc">Beabadoobee Motion Graphics & Typography</p>
            <p class="category">After Effects, Blender 3d</p>
        </div>

        <div class="project-card">
            <a href="https://www.tiktok.com" target="_blank" class="glass-card-link">
                <video src="assets/videos/gameboy.mp4" muted autoplay loop playsinline></video>
            </a>
            <h2>GAMEBOY</h2>
            <p class="desc">KATSEYE 3d Scene Edit</p>
            <p class="category">Blender 3d</p>
        </div>

        <div class="project-card">
            <a href="https://www.tiktok.com" target="_blank" class="glass-card-link">
                <video src="assets/videos/mars.mp4" muted autoplay loop playsinline></video>
            </a>
            <h2>MARS</h2>
            <p class="desc">TWICE Motion Graphics & Typography Edit</p>
            <p class="category">After Effects</p>
        </div>
    </section>

    <!-- More Work Section -->
    <section class="more-work fade-up">
        <div class="more-work-text">
            <span class="more-work-top">Looking for more? <br /></span>
            <span class="more-work-bottom">See some other work I have done</span>
        </div>
       <div class="buttons">
            <button class="btn primary more-projects-btn" onclick="window.location.href='projects.php'">
                <img src="assets/icons/new-arrow-up.png" alt="Arrow icon" />
            </button>
        </div>

    </section>

    <!-- Intro Section -->
    <section class="section-title fade-up">
        <h1>
            Web Design
        </h1>
    </section>

    <!-- Projects Section -->
    <section class="web-projects fade-up">
        <div class="web-project-card">
            <img src="assets/images/zystay01.webp">
            <p class="web-desc">ZyStay, a Website for Zymonne's Agritourim Park</p>
            <p class="web-category">HTML, CSS, JavaScript, PHP, MySQL</p>
        </div>
    </section>

    <!-- More Work Section -->
    <section class="more-work fade-up">
        <div class="more-work-text">
            <span class="more-work-top">Wanna see more? <br /></span>
            <span class="more-work-bottom">Look at other websites I've built</span>
        </div>
        <div class="buttons">
            <button class="btn primary more-projects-btn" onclick="window.location.href='websites.php'">
                <img src="assets/icons/new-arrow-down.png" alt="Arrow icon" />
            </button>
        </div>
    </section>

    <section class="about fade-up" id="about">
        <div class="about-container">
            <div class="about-marquee">
                <div class="about-track">
                    <h1 class="about-title">
                        ABOUT ABOUT ABOUT ABOUT ABOUT
                    </h1>
                    <h1 class="about-title">
                        ABOUT ABOUT ABOUT ABOUT ABOUT
                    </h1>
                </div>
            </div>
            <!-- About Text -->
            <p class="about-text">
            <span class="about-main">I’m Travis, a Web and Motion Graphics Designer.</span>  
            Currently a junior college student based in the Philippines, I enjoy exploring the intersection of design and technology. My work ranges from creating smooth motion graphics and 3D visuals to building functional, user-friendly websites.  
            <br><br>
            I’m passionate about blending creativity with coding—transforming ideas into interactive experiences that not only look good but also work seamlessly.  
            <br><br>
            Always curious and eager to grow, I continue to learn, experiment, and refine my craft in motion design, animation, and web development.
            <br><br>Let's work together!</p>


            <!-- Trail container -->
            <div class="head-trail"></div>
        </div>
    </section>

    <hr class="services-divider">

    <!-- Technologies Section -->
    <section class="technologies fade-up">
        <p class="tech-title-label">(TECHNOLOGIES)</p>
        <div class="tech-logos">
            <img src="assets/icons/html.png" alt="HTML" />
            <img src="assets/icons/css.png" alt="CSS" />
            <img src="assets/icons/js.png" alt="JavaScript" />
            <img src="assets/icons/php.png" alt="PHP" />
            <img src="assets/icons/firebase.png" alt="Firebase" />
            <img src="assets/icons/mysql.png" alt="MySQL" />
            <img src="assets/icons/ae.png" alt="After Effects" />
            <img src="assets/icons/blender.png" alt="Blender 3D" />
            <img src="assets/icons/figma.png" alt="Figma" />
        </div>
    </section>

    <hr class="services-divider">

    <section class="services-container fade-up" id="services">
        <div class="services-top">
        <!-- Label -->
        <p class="services-label">(SERVICES)</p>

        <!-- Big Description -->
        <h1 class="services-heading">
            Designing and building digital experiences that blend creativity with functionality.
        </h1>
    </div>

        <!-- Service Categories -->
        <div class="services-bottom">
            <div class="service-category">
                <h2>Creative Design</h2>
                <ul>
                    <li>Web and App Design</li>
                    <li>Motion and Interaction</li>
                    <li>Light 3D Scene Animation</li>
                    <li>Visual Storytelling</li>
                    <li>Introductory Design Systems</li>
                </ul>
            </div>

            <div class="service-category">
                <h2>Development</h2>
                <ul>
                    <li>Website Development</li>
                    <li>UI/UX Implementation</li>
                    <li>Front-end and Back-end</li>
                    <li>Database Integration</li>
                    <li>Personal and Project Websites</li>
                </ul>
            </div>
        </div>
  </section>

  <hr class="services-divider">



    <!-- Floating Custom Cursor -->
    <div id="custom-cursor">
        <div class="cursor-circle">
            <img src="assets/icons/arrow up.svg" alt="Arrow icon" />
        </div>
        <div class="glass-card cursor-card">
            <span>View Project</span>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="head-trail.js"></script>
</body>
</html>

<?php include 'contact.html'; ?>
<?php include 'footer.html'; ?>
