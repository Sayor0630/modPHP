<!-- <?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=mod000Auth', 'root', '');

// Start a session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['logged_in'])) {
    // Redirect the user to the home page
    header('Location: index.php');
    exit();
}

// Process the sign-in form
if (isset($_POST['sign-in'])) {
    // Validate the sign-in form data
    $errors = [];
    if (empty($_POST['username'])) {
        $errors[] = 'Username is required.';
    }
    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    }

    // If there are no errors, try to log the user in
    if (empty($errors)) {
        // Get the user's credentials from the database
        $sql = 'SELECT * FROM users WHERE username = :username';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        $user = $stmt->fetch();

        // If the user is not found, display an error message
        if (!$user) {
            $errors[] = 'Invalid username or password.';
        }

        // If the user is found, verify their password
        else {
            if (!password_verify($_POST['password'], $user['password'])) {
                $errors[] = 'Invalid username or password.';
            }

            // If the password is valid, log the user in
            else {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect the user to the home page
                header('Location: index.php');
                exit();
            }
        }
    }
}

// Process the login form
if (isset($_POST['login'])) {
    // Validate the login form data
    $errors = [];
    if (empty($_POST['email'])) {
        $errors[] = 'Email is required.';
    }
    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    }

    // If there are no errors, try to log the user in
    if (empty($errors)) {
        // Get the user's credentials from the database
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->execute();
        $user = $stmt->fetch();

        // If the user is not found, display an error message
        if (!$user) {
            $errors[] = 'Invalid email or password.';
        }

        // If the user is found, verify their password
        else {
            if (!password_verify($_POST['password'], $user['password'])) {
                $errors[] = 'Invalid email or password.';
            }

            // If the password is valid, log the user in
            else {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect the user to the home page
                header('Location: index.php');
                exit();
            }
        }
    }
}

// Display any errors
if (!empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
}

?>-->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup 2</title>
  <link rel="stylesheet" href=".././css/nav.css">
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href=".././css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- <link rel="stylesheet" href=".././css/theme.css"> -->
  <link rel="stylesheet" href="theme.css">
  <script src="./theme.js" defer></script>

</head>

<body>

      <div class="theme-toggle" id="theme-btn">
        <span id="themebtnText">Dark</span>
        <div id="themebtnIcon"></div>
      </div>
  <!--  -->

  <div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
      <!-- SIGN UP -->
      <div class="col align-items-center flex-col sign-up">
        <div class="form-wrapper align-items-center">
          <div class="form sign-up">
            <div class="login-card">

              <h2>Sign Up</h2>
              <h3>Enter your credentials</h3>

              <div class="progress-bar">
                <div class="step">
                  <p>
                    Basic
                  </p>
                  <div class="bullet">
                    <span>1</span>
                  </div>
                  <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                  <p>
                    Bio-Data
                  </p>
                  <div class="bullet">
                    <span>2</span>
                  </div>
                  <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                  <p>
                    Password
                  </p>
                  <div class="bullet">
                    <span>3</span>
                  </div>
                  <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                  <p>
                    Preview
                  </p>
                  <div class="bullet">
                    <span>4</span>
                  </div>
                  <div class="check fas fa-check"></div>
                </div>
              </div>

              <div class="form-outer">
                <form class="login-form" action="sign-in.php" method="post">
                  <div class="page slide-page">
                    <div class="title">
                      Give your Basic Info:
                    </div>
                    <div class="profpic" id="profpic" >
                    <input type="file" name="image" accept="image/*">
                    <input type="submit" value="Upload Image">
                      <p>Select your Profile Picture</p>
                      <div id='profpic-message' class="alert-message"></div>
                    </div>
                    <div class="username">
                      <input autocomplete="off" spellcheck="false" class="control" type="text" id="name" name="name" placeholder="Username" />
                      <div id="spinner" class="spinner"></div>
                      <div id='name-message' class="alert-message"></div>
                    </div>
                    <div class="mobile-number">
                      <div class="phone-input">
                        <select name="countryCode" id="countryCode" class="control countryCode" disabled>
                          <option value="+880">+880 (BD)</option>
                        </select>
                        <input autocomplete="off" spellcheck="false" class="control mobileNumber" type="tel" id="mobile_number" name="mobile_number" placeholder="Mobile Number" />
                      </div>
                      <div id='mobile-number-message' class="alert-message"></div>
                    </div>
                    <div class="field">
                      <button class="firstNext next" id="firstNext">Next</button>
                    </div>
                    <h5 class="already-account">Already have an account?<b onclick="toggle()" class="pointer">Sign in here</b></h5>


                  </div>
                  <div class="page">
                    <div class="title">
                      Give your Bio-Data:
                    </div>
                    <div class="gender">
                      <div class="gender-input">
                        <select name="gender" id="gender" class="control gender">
                          <option value="">Select Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                      <div id='gender-message' class="alert-message"></div>
                    </div>
                    <div class="grade">
                      <div class="grade-input">
                        <select name="grade" id="grade" class="control grade">
                          <option value="">Select Grade or Level</option>
                          <option value="eight">Eight</option>
                          <option value="nine">Nine</option>
                          <option value="ten">Ten</option>
                          <option value="eleven">Eleven</option>
                          <option value="twelve">twelve</option>
                          <option value="mt">Model Test</option>
                          <option value="admission">Admission</option>
                          <option value="ud">Under Graduate</option>
                          <option value="graduate">Graduate</option>
                        </select>
                      </div>
                      <div id='grade-message' class="alert-message"></div>
                    </div>
                    <div class="religion">
                      <div class="religion-input">
                        <select name="religion" id="religion" class="control religion">
                          <option value="">Select Religion</option>
                          <option value="islam">Islam</option>
                          <option value="hinduism">Hinduism</option>
                          <option value="christianity">Christianity</option>
                          <option value="buddhism">Buddhism</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                      <div id='religion-message' class="alert-message"></div>
                    </div>
                    <div class="district">
                      <div class="district-input">
                        <select name="district" id="district" class="control district">
                          <option value="">Select District</option>
                          <option value="bagerhat">Bagerhat</option>
                          <option value="bandarban">Bandarban</option>
                          <option value="barguna">Barguna</option>
                          <option value="barisal">Barisal</option>
                          <option value="bhola">Bhola</option>
                          <option value="bogra">Bogra</option>
                          <option value="brahmanbaria">Brahmanbaria</option>
                          <option value="chandpur">Chandpur</option>
                          <option value="chapainawabganj">Chapainawabganj</option>
                          <option value="chittagong">Chittagong</option>
                          <option value="chuadanga">Chuadanga</option>
                          <option value="coxsBazar">Cox's Bazar</option>
                          <option value="cumilla">Cumilla</option>
                          <option value="dhaka">Dhaka</option>
                          <option value="dinajpur">Dinajpur</option>
                          <option value="faridpur">Faridpur</option>
                          <option value="feni">Feni</option>
                          <option value="gaibandha">Gaibandha</option>
                          <option value="gazipur">Gazipur</option>
                          <option value="gopalganj">Gopalganj</option>
                          <option value="habiganj">Habiganj</option>
                          <option value="jamalpur">Jamalpur</option>
                          <option value="jessore">Jessore</option>
                          <option value="jhalokathi">Jhalokathi</option>
                          <option value="jhenaidah">Jhenaidah</option>
                          <option value="joypurhat">Joypurhat</option>
                          <option value="khagrachhari">Khagrachhari</option>
                          <option value="khulna">Khulna</option>
                          <option value="kishoreganj">Kishoreganj</option>
                          <option value="kurigram">Kurigram</option>
                          <option value="kushtia">Kushtia</option>
                          <option value="lakshmipur">Lakshmipur</option>
                          <option value="lalmonirhat">Lalmonirhat</option>
                          <option value="madaripur">Madaripur</option>
                          <option value="magura">Magura</option>
                          <option value="manikganj">Manikganj</option>
                          <option value="meherpur">Meherpur</option>
                          <option value="moulvibazar">Moulvibazar</option>
                          <option value="munshiganj">Munshiganj</option>
                          <option value="mymensingh">Mymensingh</option>
                          <option value="naogaon">Naogaon</option>
                          <option value="narail">Narail</option>
                          <option value="narayanganj">Narayanganj</option>
                          <option value="narsingdi">Narsingdi</option>
                          <option value="natore">Natore</option>
                          <option value="netrokona">Netrokona</option>
                          <option value="nilphamari">Nilphamari</option>
                          <option value="noakhali">Noakhali</option>
                          <option value="pabna">Pabna</option>
                          <option value="panchagarh">Panchagarh</option>
                          <option value="patuakhali">Patuakhali</option>
                          <option value="pirojpur">Pirojpur</option>
                          <option value="rajbari">Rajbari</option>
                          <option value="rajshahi">Rajshahi</option>
                          <option value="rangamati">Rangamati</option>
                          <option value="rangpur">Rangpur</option>
                          <option value="satkhira">Satkhira</option>
                          <option value="shariatpur">Shariatpur</option>
                          <option value="sherpur">Sherpur</option>
                          <option value="sirajganj">Sirajganj</option>
                          <option value="sunamganj">Sunamganj</option>
                          <option value="sylhet">Sylhet</option>
                          <option value="tangail">Tangail</option>
                          <option value="thakurgaon">Thakurgaon</option>
                        </select>
                      </div>
                      <div id='district-message' class="alert-message"></div>
                    </div>
                    <div class="email">
                      <input autocomplete="off" spellcheck="false" class="control" type="email" id="email" name="email" placeholder="Email" />
                      <div id="spinner" class="spinner"></div>
                      <div id='email-message' class="alert-message "></div>
                      <div id='email-message-1' class="alert-message "></div>
                    </div>
                    <div class="field btns">
                      <button class="prev-1 prev">Previous</button>
                      <button class="next-1 next" id="next-1">Next</button>
                    </div>
                  </div>
                  <div class="page">
                    <div class="title">
                      Set your Password:
                    </div>
                    <div class="collapsible">
                      <p>Password Generator</p>
                      <i class="fas"></i>
                    </div>
                    <div class="collapsibleContent">
                      <div class="s">
                        <div class="collapsible-container">
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
                              <input type="range" min="1" max="30" value="1" step="1" class="seekbar">
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


                          </div>
                          <button class="btn generate-btn" type="button">
                            <p>Generate Password</p>
                          </button>
                        </div>

                        <script>
                          const sliderEl = document.querySelector(".seekbar")

                          sliderEl.addEventListener("input", (event) => {
                            const tempSliderValue = event.target.value;

                            lengthSlider.value = tempSliderValue;

                            const progress = (tempSliderValue / sliderEl.max) * 100;

                            sliderEl.style.background = `linear-gradient(to right, #b177ff ${progress}%, rgba(255, 255, 255, 0.1) ${progress}%)`;
                          })
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

                    <div class="strength" id="strength"></div>
                    <div id="bars">
                      <div></div>
                    </div>
                    <div id='pass-length-message' class="alert-message"></div>
                    <div id='pass-match-message' class="alert-message"></div>
                    <div class="password-container">
                      <input spellcheck="false" class="control" id="password" name="password" type="password" placeholder="Password" />
                      <div class="password-toggle show" onclick="togglePassword('password')"></div>
                    </div>

                    <div class="password-container">
                      <input spellcheck="false" class="control" id="confirm-password" type="password" placeholder="Confirm Password" name="confirm_password" />
                      <div class="password-toggle show" onclick="togglePassword('confirm-password')"></div>
                    </div>

                    <div class="field btns">
                      <button class="prev-2 prev">Previous</button>
                      <button class="next-2 next" id="next-2">Next</button>
                    </div>
                  </div>
                  <!-- Preview Section -->
                  <div class="page">
                    <div class="preview">
                      <div class="title">
                        Preview your Selections:
                      </div>
                      <!-- Add a preview section for selected data -->

                      <table class="desktop-table">
                        <tr>
                          <th colspan="2" class="label"><strong>Profile Picture:</strong></th>
                          <td colspan="2"><img class="profilePicPreview" id="profilePicPreview" data-target="#profpic" /></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Username<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewUsername"></span></td>
                          <th class="label"><strong>Mobile<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewMobileNumber"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Grade<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewGrade"></span></td>
                          <th class="label"><strong>Gender<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewGender"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Religion<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewReligion"></span></td>
                          <th class="label"><strong>District<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewDistrict"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Email:</strong></td>
                          <td colspan="6"> <span class="preview-text" id="previewEmail"></span></td>
                        </tr>
                      </table>

                      <table class="mobile-table">
                        <tr>
                          <th class="label"><strong>Profile Picture:</strong></th>
                          <td><img class="profilePicPreview" id="profilePicPreview1" data-target="#profpic" /></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Username<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewUsername1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Mobile<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewMobileNumber1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Grade<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewGrade1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Gender<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewGender1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Religion<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewReligion1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>District<sup class="required-sign">*</sup>:</strong></td>
                          <td> <span class="preview-text" id="previewDistrict1"></span></td>
                        </tr>
                        <tr>
                          <th class="label"><strong>Email:</strong></td>
                          <td> <span class="preview-text" id="previewEmail1"></span></td>
                        </tr>
                      </table>

                    </div>

                    <div class="field btns">
                      <button class="prev-3 prev">Previous</button>
                    </div>
                    <button class="btn signup-btn" id="signup-btn" type="submit" name="sign-in">
                      <p>JOIN NOW</p>
                    </button>
                  </div>
                </form>
              </div>


              <script>
                const slidePage = document.querySelector(".slide-page");
                const nextBtnFirst = document.querySelector(".firstNext");
                const prevBtnSec = document.querySelector(".prev-1");
                const nextBtnSec = document.querySelector(".next-1");
                const prevBtnThird = document.querySelector(".prev-2");
                const nextBtnThird = document.querySelector(".next-2");
                const prevBtnFourth = document.querySelector(".prev-3");
                const progressText = document.querySelectorAll(".step p");
                const progressCheck = document.querySelectorAll(".step .check");
                const bullet = document.querySelectorAll(".step .bullet");
                let current = 1;

                nextBtnFirst.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "-25%";
                  bullet[current - 1].classList.add("active");
                  progressCheck[current - 1].classList.add("active");
                  progressText[current - 1].classList.add("active");
                  current += 1;
                });
                nextBtnSec.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "-50%";
                  bullet[current - 1].classList.add("active");
                  progressCheck[current - 1].classList.add("active");
                  progressText[current - 1].classList.add("active");
                  current += 1;
                });
                nextBtnThird.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "-75%";
                  bullet[current - 1].classList.add("active");
                  progressCheck[current - 1].classList.add("active");
                  progressText[current - 1].classList.add("active");
                  current += 1;
                });
                prevBtnSec.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "0%";
                  bullet[current - 2].classList.remove("active");
                  progressCheck[current - 2].classList.remove("active");
                  progressText[current - 2].classList.remove("active");
                  current -= 1;
                });
                prevBtnThird.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "-25%";
                  bullet[current - 2].classList.remove("active");
                  progressCheck[current - 2].classList.remove("active");
                  progressText[current - 2].classList.remove("active");
                  current -= 1;
                });
                prevBtnFourth.addEventListener("click", function(event) {
                  event.preventDefault();
                  slidePage.style.marginLeft = "-50%";
                  bullet[current - 2].classList.remove("active");
                  progressCheck[current - 2].classList.remove("active");
                  progressText[current - 2].classList.remove("active");
                  current -= 1;
                });

                // Get the elements

                // Define your phone number patterns
                const phoneNumberPatterns = {
                  '+880': {
                    pattern: /^[0-9]{3,}$/,
                    minLength: 10,
                    maxLength: 11
                  }, // Bangladesh
                  '+1': {
                    pattern: /^[0-9]{3,}$/,
                    minLength: 10,
                    maxLength: 10
                  }, // USA
                  '+44': {
                    pattern: /^[0-9]{5,}$/,
                    minLength: 10,
                    maxLength: 11
                  }, // UK
                  // Add more country patterns here
                };

                // Get references to your input elements
                const nameInput = document.getElementById('name');
                const firstNextButton = document.getElementById('firstNext');
                const countryCodeInput = document.getElementById('countryCode');
                const mobileNumberInput = document.getElementById('mobile_number');
                const mobileNumberDiv = document.getElementById('mobile-number-message');

                // Function to check the username validation criteria
                function checkName() {
                  const validPattern = /^[a-zA-Z0-9_]*$/;

                  return (
                    nameInput.value.length >= 3 &&
                    nameInput.value.length <= 15 &&
                    validPattern.test(nameInput.value)
                  );
                }

                // Function to check phone number validation
                document.addEventListener("DOMContentLoaded", function() {
                  function handleMobileNumberInput() {
                    const mobileInput = document.getElementById("mobile_number");
                    if (mobileInput.value.startsWith("0")) {
                      mobileInput.value = mobileInput.value.substring(1); // Remove the first character (0)
                    }
                  }

                  document.getElementById("mobile_number").addEventListener("input", handleMobileNumberInput);
                });

                function checkMobileNumber() {
                  const countryCode = countryCodeInput.value;
                  const {
                    pattern,
                    minLength,
                    maxLength
                  } = phoneNumberPatterns[countryCode];

                  return (
                    mobileNumberInput.value.length >= minLength &&
                    mobileNumberInput.value.length <= maxLength &&
                    pattern.test(mobileNumberInput.value)
                  );
                }

                // Function to enable or disable the "Next" button based on both checks
                function updateFirstNextButtonState() {
                  const isNameValid = checkName();
                  const isMobileNumberValid = checkMobileNumber();

                  if (isNameValid && isMobileNumberValid) {
                    firstNextButton.disabled = false;
                    document.getElementById("firstNext").innerHTML = "Next";
                  } else {
                    firstNextButton.disabled = true;
                    document.getElementById("firstNext").innerHTML = "Please fillup all the requied fields ";
                  }
                }

                // Initial check when the page loads
                updateFirstNextButtonState();

                // Add event listeners to the name, country code, and mobile number input fields
                nameInput.addEventListener('input', updateFirstNextButtonState);
                countryCodeInput.addEventListener('input', updateFirstNextButtonState);
                mobileNumberInput.addEventListener('input', updateFirstNextButtonState);

                //Gender Validation
                const genderSelector = document.getElementById("gender");

                genderSelector.addEventListener("change", function() {
                  const selectedOption = genderSelector.options[genderSelector.selectedIndex];

                  if (selectedOption.value !== "") {
                    genderSelector.options[0].disabled = true;
                  }
                });

                //Grade Validation
                const gradeSelector = document.getElementById("grade");

                gradeSelector.addEventListener("change", function() {
                  const selectedOption = gradeSelector.options[gradeSelector.selectedIndex];

                  if (selectedOption.value !== "") {
                    gradeSelector.options[0].disabled = true;
                  }
                });

                //Religion Validation
                const religionSelector = document.getElementById("religion");

                religionSelector.addEventListener("change", function() {
                  const selectedOption = religionSelector.options[religionSelector.selectedIndex];

                  if (selectedOption.value !== "") {
                    religionSelector.options[0].disabled = true;
                  }
                });

                //District Validation
                const districtSelector = document.getElementById("district");

                districtSelector.addEventListener("change", function() {
                  const selectedOption = districtSelector.options[districtSelector.selectedIndex];

                  if (selectedOption.value !== "") {
                    districtSelector.options[0].disabled = true;
                  }
                });

                // Load functions after loading the page
                window.addEventListener('load', function() {
                  // Define the select elements and the next button.
                  const genderSelect = document.querySelector('#gender');
                  const gradeSelect = document.querySelector('#grade');
                  const religionSelect = document.querySelector('#religion');
                  const districtSelect = document.querySelector('#district');
                  const next1Button = document.querySelector('#next-1');

                  // Disable the next button initially.
                  next1Button.disabled = true;
                  document.getElementById("next-1").innerHTML = "Please fillup all the requied fields ";

                  // Add event listeners to the select elements to listen for changes.
                  genderSelect.addEventListener('change', validateAndEnableNext1Button);
                  gradeSelect.addEventListener('change', validateAndEnableNext1Button);
                  religionSelect.addEventListener('change', validateAndEnableNext1Button);
                  districtSelect.addEventListener('change', validateAndEnableNext1Button);

                  // Function to validate the select elements and enable the next button if all of the elements are valid.
                  function validateAndEnableNext1Button() {
                    // Check if the value of any of the select elements is empty.
                    if (genderSelect.value === '' || gradeSelect.value === '' || religionSelect.value === '' || districtSelect.value === '') {
                      // Disable the next button.
                      next1Button.disabled = true;
                      document.getElementById("next-1").innerHTML = "Please fillup all the requied fields ";
                    } else {
                      // Enable the next button.
                      next1Button.disabled = false;
                      document.getElementById("next-1").innerHTML = "Next";
                      // Remove any existing error messages.
                      document.querySelector('#gender-message').innerHTML = '';
                      document.querySelector('#grade-message').innerHTML = '';
                      document.querySelector('#religion-message').innerHTML = '';
                      document.querySelector('#district-message').innerHTML = '';
                    }
                  }

                  // Add an event listener to the next button to show the error messages if the button is clicked and it is disabled.
                  next1Button.addEventListener('click', function() {
                    if (next1Button.disabled) {
                      // Show the error messages.
                      // document.getElementById("next-1").innerHTML = "Please fillup all the requied fields ";
                    }
                  });
                });

                //Password validation
                document.addEventListener("DOMContentLoaded", function() {
                  const passwordInput = document.querySelector("#password");
                  const confirmPassInput = document.querySelector("#confirm-password");
                  const passMatchDiv = document.querySelector("#pass-match-message");
                  const passLengthDiv = document.querySelector("#pass-length-message");
                  const next2Button = document.querySelector("#next-2");

                  // Function to check if passwords match and meet length criteria
                  function checkPasswordCriteria() {
                    const password = passwordInput.value;
                    const confirmPassword = confirmPassInput.value;
                    const isPasswordEmpty = password.trim() === '';
                    const isPasswordShort = password.length < 8;
                    const doPasswordsMatch = password === confirmPassword;

                    if (!isPasswordEmpty && doPasswordsMatch && !isPasswordShort) {
                      next2Button.disabled = false; // Enable the "Next" button
                      document.getElementById("next-2").innerHTML = "Next ";
                    } else {
                      next2Button.disabled = true; // Disable the "Next" button
                      document.getElementById("next-2").innerHTML = "8+ character matching password required to continue";
                    }
                  }

                  // Call the initial check function on page load
                  checkPasswordCriteria();

                  // Add input event listeners to the password and confirm password fields
                  passwordInput.addEventListener("input", checkPasswordCriteria);
                  confirmPassInput.addEventListener("input", checkPasswordCriteria);
                });

                // Function to update the preview based on user input
                function updatePreview() {
                  const username = document.getElementById("name").value;
                  const countryCode = document.getElementById("countryCode").value;
                  const mobileNumber = countryCode + document.getElementById("mobile_number").value;
                  const genderSelect = document.getElementById("gender");
                  const gender = genderSelect.options[genderSelect.selectedIndex].text;
                  const gradeSelect = document.getElementById("grade");
                  const grade = gradeSelect.options[gradeSelect.selectedIndex].text;
                  const religionSelect = document.getElementById("religion");
                  const religion = religionSelect.options[religionSelect.selectedIndex].text;
                  const districtSelect = document.getElementById("district");
                  const district = districtSelect.options[districtSelect.selectedIndex].text;
                  const email = document.getElementById("email").value;

                  document.getElementById("previewUsername").textContent = username;
                  document.getElementById("previewMobileNumber").textContent = mobileNumber;
                  document.getElementById("previewGender").textContent = gender;
                  document.getElementById("previewGrade").textContent = grade;
                  document.getElementById("previewReligion").textContent = religion;
                  document.getElementById("previewDistrict").textContent = district;
                  document.getElementById("previewEmail").textContent = email;
                }

                // Attach the updatePreview function to form inputs' change events
                document.getElementById("name").addEventListener("input", updatePreview);
                document.getElementById("mobile_number").addEventListener("input", updatePreview);
                document.getElementById("gender").addEventListener("change", updatePreview); // Use change event for select elements
                document.getElementById("grade").addEventListener("change", updatePreview);
                document.getElementById("religion").addEventListener("change", updatePreview);
                document.getElementById("district").addEventListener("change", updatePreview);
                document.getElementById("email").addEventListener("input", updatePreview);



                function updatePreview1() {
                  const username = document.getElementById("name").value;
                  const countryCode = document.getElementById("countryCode").value;
                  const mobileNumber = countryCode + document.getElementById("mobile_number").value;
                  const genderSelect = document.getElementById("gender");
                  const gender = genderSelect.options[genderSelect.selectedIndex].text;
                  const gradeSelect = document.getElementById("grade");
                  const grade = gradeSelect.options[gradeSelect.selectedIndex].text;
                  const religionSelect = document.getElementById("religion");
                  const religion = religionSelect.options[religionSelect.selectedIndex].text;
                  const districtSelect = document.getElementById("district");
                  const district = districtSelect.options[districtSelect.selectedIndex].text;
                  const email = document.getElementById("email").value;

                  document.getElementById("previewUsername1").textContent = username;
                  document.getElementById("previewMobileNumber1").textContent = mobileNumber;
                  document.getElementById("previewGender1").textContent = gender;
                  document.getElementById("previewGrade1").textContent = grade;
                  document.getElementById("previewReligion1").textContent = religion;
                  document.getElementById("previewDistrict1").textContent = district;
                  document.getElementById("previewEmail1").textContent = email;
                }

                // Attach the updatePreview function to form inputs' change events
                document.getElementById("name").addEventListener("input", updatePreview1);
                document.getElementById("mobile_number").addEventListener("input", updatePreview1);
                document.getElementById("gender").addEventListener("change", updatePreview1); // Use change event for select elements
                document.getElementById("grade").addEventListener("change", updatePreview1);
                document.getElementById("religion").addEventListener("change", updatePreview1);
                document.getElementById("district").addEventListener("change", updatePreview1);
                document.getElementById("email").addEventListener("input", updatePreview1);


                // Get references to the "JOIN NOW" button and all the "Next" buttons
                const joinNowButton = document.getElementById("signup-btn");
                const next1Button = document.getElementById("next-1");
                const next2Button = document.getElementById("next-2");

                // Function to update the state of the "JOIN NOW" button
                function updateJoinNowButtonState() {
                  const isFirstNextEnabled = !firstNextButton.disabled;
                  const isNext1Enabled = !next1Button.disabled;
                  const isNext2Enabled = !next2Button.disabled;

                  if (isFirstNextEnabled && isNext1Enabled && isNext2Enabled) {
                    joinNowButton.disabled = false;
                  } else {
                    joinNowButton.disabled = true;
                  }
                }

                // Add event listeners to the "Next" buttons to update the state of the "JOIN NOW" button
                firstNextButton.addEventListener("click", updateJoinNowButtonState);
                next1Button.addEventListener("click", updateJoinNowButtonState);
                next2Button.addEventListener("click", updateJoinNowButtonState);

                // Initial check when the page loads
                updateJoinNowButtonState();
              </script>






            </div>
          </div>
        </div>

      </div>
      <!-- END SIGN UP -->
      <!-- SIGN IN -->
      <div class="col align-items-center flex-col sign-in">
        <div class="form-wrapper align-items-center">
          <div class="form sign-in">
            <div class="login-card">
              <img src="https://i.pinimg.com/originals/0a/5f/ea/0a5feae400fc816c4ca2aca8bd67a168.jpg" />
              <h2>Sign In</h2>
              <h3>Enter your credentials</h3>
              <form class="login-form" action="login.php" method="post">
                <div class="email">
                  <input autocomplete="off" spellcheck="false" class="control" type="email" name="email" placeholder="Email or Phone Number" name="credentials" />
                  <div id="spinner" class="spinner"></div>
                </div>
                <input spellcheck="false" class="control" id="password-1" type="password" name="password" placeholder="Password" onkeyup="handleChange()" />
                <div id="bars-1">
                  <div></div>
                </div>
                <button class="btn signin-btn" id="signin-btn" 
                " name="login">
                  <p>Login</p>
                </button>
                <h5>Do not have an account?<b onclick="toggle()" class="pointer">Sign up here</b></h5>
              </form>
            </div>
          </div>
        </div>
        <div class="form-wrapper">

        </div>
      </div>
      <!-- END SIGN IN -->
    </div>
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
      <!-- SIGN IN CONTENT -->
      <div class="col align-items-center flex-col">
        <div class="text sign-in">
          <h2>
            Welcome
          </h2>

        </div>
        <div class="img sign-in">

        </div>
      </div>
      <!-- END SIGN IN CONTENT -->
      <!-- SIGN UP CONTENT -->
      <div class="col align-items-center flex-col">
        <div class="img sign-up">

        </div>
        <div class="text sign-up">
          <h2>
            Join with us
          </h2>

        </div>
      </div>
      <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
  </div>
  <!-- ==================================================================================== -->

  <script type="text/javascript" src="./main.js"></script>
  <script src="../js/see-pass-two.js"></script>
  <script type="text/javascript" src=".././js/vanilla-tilt.js"></script>
  <script>
    let container = document.getElementById('container')

    toggle = () => {
      container.classList.toggle('sign-in')
      container.classList.toggle('sign-up')
    }

    setTimeout(() => {
      container.classList.add('sign-in')
    }, 200)
    // Get the collapsible elements
    var coll = document.querySelectorAll('.collapsible');
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }

    // Get the next2Button and prev2Button buttons
    var prev2Button = document.querySelector('.prev-2');

    // Add an event listener to the next2Button and prev2Button buttons
    next2Button.addEventListener('click', function() {
      // Hide the collapsible contents
      for (var i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;
        content.style.maxHeight = null;
      }
    });

    prev2Button.addEventListener('click', function() {
      // Hide the collapsible contents
      for (var i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;
        content.style.maxHeight = null;
      }
    });
  </script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".login-card"), {
      max: 4,
      speed: 400,
      glare: true,
      "max-glare": 0.1,
      scale: 1.0,
    });
    let destroyBox = document.querySelectorAll(".login-card");

    // Get the device width
    const deviceWidth = window.innerWidth;

    // Disable vanilla tilt if device width is less than 400px
    if (deviceWidth < 400) {
      VanillaTilt.init(destroyBox, {
        mouse: false,
        touch: false
      });
    } else {
      VanillaTilt.init(destroyBox);
    }
  </script>
</body>

</html>