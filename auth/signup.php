<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup 2</title>
  <link rel="stylesheet" href=".././css/nav.css">
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href=".././css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            Review
          </p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>

      <div class="form-outer">
        <form class="login-form" action="process_signup.php" method="post">
          <div class="page slide-page">
            <div class="title">
              Give your Basic Info:
            </div>
            <div class="profpic">
              <img src="https://i.pinimg.com/originals/0a/5f/ea/0a5feae400fc816c4ca2aca8bd67a168.jpg" />
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
                  <option value="72">Bagerhat</option>
                  <option value="73">Bandarban</option>
                  <option value="74">Barguna</option>
                  <option value="75">Barisal</option>
                  <option value="76">Bhola</option>
                  <option value="77">Bogra</option>
                  <option value="78">Brahmanbaria</option>
                  <option value="79">Chandpur</option>
                  <option value="80">Chapainawabganj</option>
                  <option value="81">Chittagong</option>
                  <option value="82">Chuadanga</option>
                  <option value="84">Cox's Bazar</option>
                  <option value="83">Cumilla</option>
                  <option value="85">Dhaka</option>
                  <option value="86">Dinajpur</option>
                  <option value="87">Faridpur</option>
                  <option value="88">Feni</option>
                  <option value="89">Gaibandha</option>
                  <option value="90">Gazipur</option>
                  <option value="91">Gopalganj</option>
                  <option value="92">Habiganj</option>
                  <option value="93">Jamalpur</option>
                  <option value="94">Jessore</option>
                  <option value="95">Jhalokathi</option>
                  <option value="96">Jhenaidah</option>
                  <option value="97">Joypurhat</option>
                  <option value="98">Khagrachhari</option>
                  <option value="99">Khulna</option>
                  <option value="100">Kishoreganj</option>
                  <option value="101">Kurigram</option>
                  <option value="102">Kushtia</option>
                  <option value="103">Lakshmipur</option>
                  <option value="104">Lalmonirhat</option>
                  <option value="105">Madaripur</option>
                  <option value="106">Magura</option>
                  <option value="107">Manikganj</option>
                  <option value="108">Meherpur</option>
                  <option value="109">Moulvibazar</option>
                  <option value="110">Munshiganj</option>
                  <option value="111">Mymensingh</option>
                  <option value="112">Naogaon</option>
                  <option value="113">Narail</option>
                  <option value="114">Narayanganj</option>
                  <option value="115">Narsingdi</option>
                  <option value="116">Natore</option>
                  <option value="117">Netrokona</option>
                  <option value="118">Nilphamari</option>
                  <option value="119">Noakhali</option>
                  <option value="120">Pabna</option>
                  <option value="121">Panchagarh</option>
                  <option value="122">Patuakhali</option>
                  <option value="123">Pirojpur</option>
                  <option value="124">Rajbari</option>
                  <option value="125">Rajshahi</option>
                  <option value="126">Rangamati</option>
                  <option value="127">Rangpur</option>
                  <option value="128">Satkhira</option>
                  <option value="129">Shariatpur</option>
                  <option value="130">Sherpur</option>
                  <option value="131">Sirajganj</option>
                  <option value="132">Sunamganj</option>
                  <option value="133">Sylhet</option>
                  <option value="134">Tangail</option>
                  <option value="135">Thakurgaon</option>
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
              <button class="next-1 next">Next</button>
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
                      <input type="range" min="1" max="30" value="1" step="1" class="seekbar">
                    </div>
                    <script>
                      const sliderEl = document.querySelector(".seekbar")

                      sliderEl.addEventListener("input", (event) => {
                        const tempSliderValue = event.target.value;

                        lengthSlider.value = tempSliderValue;

                        const progress = (tempSliderValue / sliderEl.max) * 100;

                        sliderEl.style.background = `linear-gradient(to right, #b177ff ${progress}%, rgba(255, 255, 255, 0.1) ${progress}%)`;
                      })
                    </script>

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

            <div class="strength" id="strength"></div>
            <div id="bars">
              <div></div>
            </div>
            <input spellcheck="false" class="control" id="password" name="password" type="password" placeholder="Password" />
            <input spellcheck="false" class="control" id="confirm-password" type="password" placeholder="Confirm Password" name="confirm_password" />
            <div id='pass-length-message' class="alert-message "></div>
            <div id='pass-match-message' class="alert-message "></div>

            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>
          <div class="page">
            <div class="title">
              Review your Selections:
            </div>
            <div class="field">
              <div class="label">
                Username
              </div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">
                Password
              </div>
              <input type="password">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="btn" id="signup-btn" type="submit">
                <p>JOIN NOW</p>
              </button>
            </div>
          </div>
        </form>
      </div>
      <h5 class="already-account">Already have an account? <a href="./login.php">Login now</a></h5>

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
          } else {
            firstNextButton.disabled = true;
          }
        }

        // Initial check when the page loads
        updateFirstNextButtonState();

        // Add event listeners to the name, country code, and mobile number input fields
        nameInput.addEventListener('input', updateFirstNextButtonState);
        countryCodeInput.addEventListener('input', updateFirstNextButtonState);
        mobileNumberInput.addEventListener('input', updateFirstNextButtonState);
      </script>






    </div>
  </div>

  <!-- ==================================================================================== -->

  <script type="text/javascript" src="./main.js"></script>
  <script type="text/javascript" src=".././js/vanilla-tilt.js"></script>
  <script>
    var coll = document.getElementsByClassName("collapsible");
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
  </script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".login-card"), {
      max: 4,
      speed: 400,
      glare: true,
      "max-glare": 0.3,
      scale: 1.0,
      gyroscope: true, // Boolean to enable/disable device orientation detection,
      gyroscopeMinAngleX: -45, // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
      gyroscopeMaxAngleX: 45, // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
      gyroscopeMinAngleY: -45, // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
      gyroscopeMaxAngleY: 45, // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
    });
  </script>
</body>

</html>