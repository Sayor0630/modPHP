<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup 2</title>
  <link rel="stylesheet" href=".././css/nav.css">
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href=".././css/footer.css" />


</head>

<body>
  <div class="login-card">
    <img src="https://i.pinimg.com/originals/0a/5f/ea/0a5feae400fc816c4ca2aca8bd67a168.jpg" />
    <h2>Sign In</h2>
    <h3>Enter your credentials</h3>
    <form class="login-form">
      <div class="email">
        <input autocomplete="off" spellcheck="false" class="control" type="email" placeholder="Email or Phone Number" name="credentials" />
        <div id="spinner" class="spinner"></div>
      </div>
      <input spellcheck="false" class="control" id="password" type="password" placeholder="Password" onkeyup="handleChange()" />
      <div id="bars">
        <div></div>
      </div>
      <button class="btn" id="signup-btn" type="submit">
        <p>Login</p>
      </button>
      <h5>Do not have an account? <a href="./signup.php">Sign Up now</a> </h5>
    </form>
  </div>
  <script>
      const emailOrPhoneInput = document.querySelector('input[name="credentials"]');

      emailOrPhoneInput.addEventListener('input', () => {
        const value = emailOrPhoneInput.value;

        if (/[a-zA-Z]/.test(value)) {
          // The user is entering an email address.
          emailOrPhoneInput.type = 'email';
          // Set the cursor position to the end of the value.
          emailOrPhoneInput.setSelectionRange(value.length, value.length);
        } else if (/\d/.test(value) && !/@/.test(value)) {
          // The user is entering a phone number.
          emailOrPhoneInput.type = 'tel';
          // Set the cursor position to the end of the value.
          emailOrPhoneInput.setSelectionRange(value.length, value.length);
        } else {
          // The user is entering invalid input.
        }
      });
    </script>


  <script type="text/javascript" src="./main.js"></script>
  <script type="text/javascript" src="./pass-gen.js"></script>
  <script type="text/javascript" src=".././js/vanilla-tilt.js"></script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".login-card"), {
      max: 4,
      speed: 400,
      glare: true,
      "max-glare": 0.3,
      scale: 1.0,
    });
  </script>
</body>

</html>