<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href=".././css/nav.css">
  <link rel="stylesheet" href=".././css/footer.css">
  <link rel="stylesheet" href=".././css/signIn.css">
  
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- ============================================ -->

  <nav>
    <div class="logo">
      <img src="./img/logo/logo.png" alt="Logo">
    </div>
    <div class="signin">
      <a href="./index.html">Home</a></li>
    </div>
  </nav>

<!-- ============================================ -->

  <div class="container">
    <div class="form">
      <h2>Sign In</h2>
      <form action="process_signup.php" method="post">
        <div class="input-group">
          <label for="name">Full name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
          <label for="mobile_number">Mobile Number:</label>
          <input type="tel" id="mobile_number" name="mobile_number" required>
        </div>
        <div class="input-group">
          <label for="password">Password:<span><i id="toggle-password" class="fa fa-eye"></i></span></label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="button-group">
          <button type="submit">Sign Up</button>
        </div>
      </form>
 
<br><br>
<h4 style="font-size: 1.125rem; font-weight: 600; color: #333; margin-bottom: 0.5rem;">
    Already a member? 
    <a href=".././signin/singin.php" style="color: #0078d7; text-decoration: none;">
      Log IN
    </a> 
    from this link.
  </h4>
  
    </div>
  </div>

<!-- ============================================ -->

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

  <!-- js file -->
  <script src=".././js/see-pass-two.js"></script>
</body>
</html>
