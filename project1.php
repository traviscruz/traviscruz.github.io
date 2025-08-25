<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ZyStay Website</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display" />
  <style>
    section.single-project {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
      box-sizing: border-box;
    }

    .single-project img {
      width: 100%;
      max-width: 1000px;
      border-radius: 1rem;
      /* box-shadow: 0 4px 20px rgba(0,0,0,0.15); */
    }

    .project-details {
      margin-top: 2rem;
      text-align: center;
    }

    .project-details h1 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .project-details p {
      max-width: 800px;
      margin: 0 auto;
      font-size: 1rem;
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <?php include 'header.html'; ?>

  <section class="single-project">
    <div class="project-content">
      <img src="assets/web-projects/project1.png" alt="Project 1 Screenshot">
      <div class="project-details">
        <h1>ZyStay</h1>
        <!-- <p>
          This is a responsive and animated personal portfolio project built to showcase my work. 
          It features smooth scrolling, interactive header behavior, custom cursor effects, and a modern UI design.
        </p> -->
      </div>
    </div>
  </section>
  <hr class="services-divider">

  <?php include 'contact.html'; ?>
  <?php include 'footer.html'; ?>
</body>
</html>
