<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/courses.css">
    <link rel="stylesheet" type="text/css" href="./css/button.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
          <img src="./img/logo/logo.png" alt="Logo">
        </div>
        <ul class="navigation">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./courses.html" class="active">Courses</a></li>
          <li><a href="./team.php">Team</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
        <div class="signin">
          <a href="./auth/login.php">Sign In</a>
        </div>
      </nav>
      <!-- ================================================================================================= -->

      <div class="container">
        <div class="card">
          <div class="content">
            <div class="sing__content">
              <h2>01</h2>
              <h3>White Aprone 2022</h3>
              <p>Full Medical Package for HSC 2022 Candidates</p>
            </div> 
            <div class="banner"><img src="./img/courses/wa.jpg" alt=""></div>
            <div class="btn"><a href="./enroll_page.html">Enroll Now</a></div>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="sing__content">
              <h2>02</h2>
              <h3>White Aprone 2022</h3>
              <p>Full Medical Package for HSC 2022 Candidates</p>
            </div> 
            <div class="banner"><img src="./img/courses/wa.jpg" alt=""></div>
            <div class="btn"><a href="./enroll_page.html">Enroll Now</a></div>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="sing__content">
              <h2>03</h2>
              <h3>White Aprone 2022</h3>
              <p>Full Medical Package for HSC 2022 Candidates</p>
            </div> 
            <div class="banner"><img src="./img/courses/wa.jpg" alt=""></div>
            <div class="btn"><a href="./enroll_page.html">Enroll Now</a></div>
          </div>
        </div>
      </div>

      
      <!-- ==================================================================================================================== -->

      <footer>
        <div class="top-section">
          <div class="left-subsection">
            <img src="./img/logo/logo.png" alt="Logo">
          </div>
          <div class="middle-subsection">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg> +880 18**-******</p>
    
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
    </svg>afsana_apu@gmail.com</p>
          </div>
          <div class="right-subsection">
            <h4>Developed by <a href="https://www.facebook.com/oyenja/">Oyenja</a></h4>
          </div>
        </div>
        <div class="bottom-section">
          <p>&copy; 2023 All rights reserved.</p>
        </div>
      </footer>
      <!-- js files -->
      <script src="./js/nav.js"></script>
      <script type="text/javascript" src="./js/vanilla-tilt.js"></script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
      max: 4,
      speed: 400,
      glare: true,
      "max-glare": 0.3,
      scale: 1.1,
    });
  </script>

</body>
</html>