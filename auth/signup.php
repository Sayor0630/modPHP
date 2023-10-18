<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup 2</title>
  <link rel="stylesheet" href=".././css/nav.css">
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href=".././css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css"
    integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script> -->


<link rel="stylesheet" href=".././css/theme.css">

</head>

<body>



  <div class="hero-T">
    <div class="login-card">
      
      <h2>Sign Up</h2>
      <h3>Enter your credentials</h3>

      <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>






      <form class="login-form" action="process_signup.php" method="post">
      <img src="https://i.pinimg.com/originals/0a/5f/ea/0a5feae400fc816c4ca2aca8bd67a168.jpg" />
        <div class="page">
        <div class="username">
          <input autocomplete="off" spellcheck="false" class="control" type="text" id="name" name="name"
            placeholder="Username" />
          <div id="spinner" class="spinner"></div>
          <div id='name-message' class="alert-message"></div>
        </div>
        <div class="email">
          <input autocomplete="off" spellcheck="false" class="control" type="email" id="email" name="email" placeholder="Email" />
          <div id="spinner" class="spinner"></div>
          <div id='email-message' class="alert-message "></div>
          <div id='email-message-1' class="alert-message "></div>
        </div>
        <div class="mobile-number">
        <div class="phone-input">
          <select name="countryCode" id="countryCode" class="control countryCode" disabled>
            <option value="+880">+880 (BD)</option>
          </select>
          <input autocomplete="off" spellcheck="false" class="control mobileNumber" type="tel" id="mobile_number"
            name="mobile_number" placeholder="Mobile Number" />
        </div>
        <div id='mobile-number-message' class="alert-message"></div>
        </div>

        <!-- ==================================================================================== -->
        <div class="collapsible">
          <p>Password Generator</p>
          <i class="fas"></i>
        </div>
        <div class="collapsibleContent">
          <div class="s">
            <div class="container">
              <div class="wrapper">
                <div class="input-box">
                  <input type="text" disabled>
                  <span class="material-symbols-rounded"><i class="fa-regular fa-copy"></i></span>
                </div>
                <div class="pass-indicator"></div>
                <div class="pass-length">
                  <div class="details">
                    <label class="title">Password Length</label>
                    <span></span>
                  </div>
                  <input type="range" min="1" max="30" value="15" step="1" class="seekbar">
                </div>
                <div class="pass-settings">
                  <label class="title">Password Settings</label>
                  <ul class="options">
                    <li class="option">
                      <input type="checkbox" id="lowercase" checked>
                      <label for="lowercase">Lowercase (a-z)</label>
                    </li>
                    <li class="option">
                      <input type="checkbox" id="uppercase">
                      <label for="uppercase">Uppercase (A-Z)</label>
                    </li>
                    <li class="option">
                      <input type="checkbox" id="numbers">
                      <label for="numbers">Numbers (0-9)</label>
                    </li>
                    <li class="option">
                      <input type="checkbox" id="symbols">
                      <label for="symbols">Symbols (!-$^+)</label>
                    </li>
                    <li class="option">
                      <input type="checkbox" id="exc-duplicate">
                      <label for="exc-duplicate">Exclude Duplicate</label>
                    </li>
                    <li class="option">
                      <input type="checkbox" id="spaces">
                      <label for="spaces">Include Spaces</label>
                    </li>
                  </ul>
                </div>
                <button class="btn generate-btn" type="button">
                  <p>Generate Password</p>
                </button>

              </div>
            </div>

            <script>

              const lengthSlider = document.querySelector(".pass-length input"),
                options = document.querySelectorAll(".option input"),
                copyIcon = document.querySelector(".input-box span"),
                passwordInput = document.querySelector(".input-box input"),
                passIndicator = document.querySelector(".pass-indicator"),
                generateBtn = document.querySelector(".generate-btn");

              const characters = { // object of letters, numbers & symbols
                lowercase: "abcdefghijklmnopqrstuvwxyz",
                uppercase: "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
                numbers: "0123456789",
                symbols: "^!$%&|[](){}:;.,*+-#@<>~"
              }

              const generatePassword = () => {
                let staticPassword = "",
                  randomPassword = "",
                  excludeDuplicate = false,
                  passLength = lengthSlider.value;

                options.forEach(option => { // looping through each option's checkbox
                  if (option.checked) { // if checkbox is checked
                    // if checkbox id isn't exc-duplicate && spaces
                    if (option.id !== "exc-duplicate" && option.id !== "spaces") {
                      // adding particular key value from character object to staticPassword
                      staticPassword += characters[option.id];
                    } else if (option.id === "spaces") { // if checkbox id is spaces
                      staticPassword += `  ${staticPassword}  `; // adding space at the beginning & end of staticPassword
                    } else { // else pass true value to excludeDuplicate
                      excludeDuplicate = true;
                    }
                  }
                });

                for (let i = 0; i < passLength; i++) {
                  // getting random character from the static password
                  let randomChar = staticPassword[Math.floor(Math.random() * staticPassword.length)];
                  if (excludeDuplicate) { // if excludeDuplicate is true
                    // if randomPassword doesn't contains the current random character or randomChar is equal 
                    // to space " " then add random character to randomPassword else decrement i by -1
                    !randomPassword.includes(randomChar) || randomChar == " " ? randomPassword += randomChar : i--;
                  } else { // else add random character to randomPassword
                    randomPassword += randomChar;
                  }
                }
                passwordInput.value = randomPassword; // passing randomPassword to passwordInput value
              }

              const upadatePassIndicator = () => {
                // if lengthSlider value is less than 8 then pass "weak" as passIndicator id else if lengthSlider 
                // value is less than 16 then pass "medium" as id else pass "strong" as id
                passIndicator.id = lengthSlider.value <= 8 ? "weak" : lengthSlider.value <= 16 ? "medium" : "strong";
              }

              const updateSlider = () => {
                // passing slider value as counter text
                document.querySelector(".pass-length span").innerText = lengthSlider.value;
                generatePassword();
                upadatePassIndicator();
              }
              updateSlider();

              const copyPassword = () => {
                navigator.clipboard.writeText(passwordInput.value); // copying random password
                copyIcon.innerHTML = '<i class="fa-solid fa-check"></i>'; // changing copy icon to tick
                copyIcon.style.color = "#4285F4";
                setTimeout(() => { // after 1500 ms, changing tick icon back to copy
                  copyIcon.innerHTML = '<i class="fa-regular fa-copy"></i>';
                  copyIcon.style.color = "#707070";
                }, 1500);
              }

              copyIcon.addEventListener("click", copyPassword);
              lengthSlider.addEventListener("input", updateSlider);
              generateBtn.addEventListener("click", generatePassword);
            </script>
          </div>
        </div>

        <!-- ==================================================================================== -->

        <input spellcheck="false" class="control" id="password" name="password" type="password" placeholder="Password"/>
<input spellcheck="false" class="control" id="confirm-password" type="password" placeholder="Confirm Password" name="confirm_password"/>
<div id='pass-match-message' class="alert-message "></div>


<div id="bars">
  <div></div>
</div>
<div class="strength" id="strength"></div>
<div id='pass-length-message' class="alert-message "></div>

        <button class="btn" id="signup-btn" type="submit">
          <p>JOIN NOW</p>
        </button>
      
       <h5>Already have an account? <a href="./login.php">Login now</a> </h5>
       </form>
    </div>
  </div>


  <!-- ==================================================================================== -->

  <script type="text/javascript" src="./main.js"></script>
  <script type="text/javascript" src=".././js/vanilla-tilt.js"></script>
  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  </script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".login-card"), {
      max: 4,
      speed: 400,
      glare: true,
      "max-glare": 0.3,
      scale: 1.0,
      gyroscope: true,   // Boolean to enable/disable device orientation detection,
      gyroscopeMinAngleX: -45,    // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
      gyroscopeMaxAngleX: 45,     // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
      gyroscopeMinAngleY: -45,    // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
      gyroscopeMaxAngleY: 45,     // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
    });
  </script>
</body>

</html>