<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
        <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/contact.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <!-- Navigation Bar -->
  <nav>
    <div class="logo">
      <img src="./img/logo/logo.png" alt="Logo">
    </div>
    <ul class="navigation">
      <li><a href="./index.html">Home</a></li>
      <li><a href="./about.html">About</a></li>
      <li><a href="./courses.html">Courses</a></li>
      <li><a href="./team.html">Team</a></li>
      <li><a href="./contact.html" class="active">Contact</a></li>
    </ul>
    <div class="signin">
      <a href="./singin.html">Sign In</a>
    </div>
  </nav>

  <!-- Contact Us Form -->
  <section class="contact-us">
    <div class="left-section">
      <h2>Get in Touch</h2>
      <p>Connect with us on social media for updates and news about our services.</p>
      <ul>
        <li class="mb-3">
            <i class="fa-brands fa-facebook mr-2"></i>
          <a href="https://www.facebook.com/groups/339398340583128" target="_blank">Facebook Group</a>
        </li>
        <li class="mb-3">
            <i class="fa-brands fa-square-facebook mr-2"></i>
          <a href="https://www.facebook.com/profile.php?id=100066723823229" target="_blank">Facebook Page</a>
        </li>
        <li class="mb-3">
          <i class="fab fa-youtube mr-2"></i>
          <a href="https://www.youtube.com/@medicalourdream525" target="_blank">YouTube Channel</a>
        </li>
      </ul>
    </div>
    <div class="right-section">
      <h2>Contact Us</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
          <label for="mobile">Mobile Number</label>
          <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
        </div>
        <div class="form-group">
            <label for="email">Gmail</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
        </div>
        
        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>
  </section>

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
  

</body>
</html>
