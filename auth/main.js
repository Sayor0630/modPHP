document.addEventListener("DOMContentLoaded", function () {
  const bars = document.querySelector("#bars"),
    strengthDiv = document.querySelector("#strength"),
    nameInput = document.querySelector("#name"),
    nameDiv = document.querySelector("#name-message"),
    emailInput = document.querySelector("#email"),
    emailDiv = document.querySelector("#email-message"),
    emailDiv1 = document.querySelector("#email-message-1"),
    mobileNumberInput = document.querySelector("#mobile_number"),
    mobileNumberDiv = document.querySelector("#mobile-number-message"),
    countryCodeSelector = document.getElementById('countryCode'),
    passwordInput = document.querySelector("#password"),
    confirmPasswordInput = document.querySelector("#confirm-password"),
    passMatchDiv = document.querySelector("#pass-match-message"),
    signupBtn = document.querySelector("#signup-btn"),
    passLengthDiv = document.querySelector("#pass-length-message");

  const strength = {
    1: "weak",
    2: "medium",
    3: "strong",
  };

  const getIndicator = (password, strengthValue) => {
    for (let index = 0; index < password.length; index++) {
      let char = password.charCodeAt(index);
      if (!strengthValue.upper && char >= 65 && char <= 90) {
        strengthValue.upper = true;
      } else if (!strengthValue.numbers && char >= 48 && char <= 57) {
        strengthValue.numbers = true;
      } else if (!strengthValue.lower && char >= 97 && char <= 122) {
        strengthValue.lower = true;
      }
    }
    let strengthIndicator = 0;
    for (let metric in strengthValue) {
      if (strengthValue[metric] === true) {
        strengthIndicator++;
      }
    }
    return strength[strengthIndicator] ?? "";
  };

  const getStrength = (password) => {
    let strengthValue = {
      upper: false,
      numbers: false,
      lower: false,
    };
    return getIndicator(password, strengthValue);
  };

  const handleChange = () => {
    let { value: password } = passwordInput;
    const strengthText = getStrength(password);
    strengthDiv.innerText = "";
    bars.className = "";
    if (strengthText) {
      strengthDiv.innerText = `${strengthText} Password`;
      bars.classList.add(strengthText);
    }
    // Trigger checkPassword when password is changed
    checkPasswordsMatch();
  };

  function checkPasswordsMatch() {
    const message =
      passwordInput.value === confirmPasswordInput.value
        ? ""
        : "Passwords do not match";
    passMatchDiv.textContent = message;
    signupBtn.disabled = message !== "" || passwordInput.value === "" || passwordInput.value.length < 8;
  }

  //username validation
  function checkName() {
    const validPattern = /^[a-zA-Z0-9_]*$/;

    if (nameInput.value.length >= 3 && nameInput.value.length <= 15 && validPattern.test(nameInput.value)) {
      nameDiv.textContent = '';
      this.style.borderColor = '';
      document.getElementById('signup-btn').disabled = false; // Enable button when all criteria are met
    } else if (nameInput.value.length < 3) {
      nameDiv.textContent = 'Username must be at least 3 characters long';
      this.style.borderColor = 'red';
      document.getElementById('signup-btn').disabled = true; // Disable button when length is less than three
    } else if (!validPattern.test(nameInput.value)) {
      nameDiv.textContent = 'Username can only contain letters (a-z, A-Z), numbers (0-9) or underscore "_"';
      this.style.borderColor = 'red';
      document.getElementById('signup-btn').disabled = true; // Disable button when invalid pattern matched 
    } else {
      nameDiv.textContent = 'Username must be no longer than 15 characters';
      this.style.borderColor = 'red';
      document.getElementById('signup-btn').disabled = true; //Disable button When character count exceeds fifteen
    }
  }

  //email validation
  function checkEmail() {
    const validPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/;

    if (emailInput.value.match(validPattern)) {

      // Split the email into parts and get the domain part
      const [_, domain] = emailInput.value.split('@');

      // Set an array of accepted domains here 
      const acceptedDomains = ["gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "aol.com", "icloud.com", "protonmail.ch", "mail.com"];

      // Check that domain is in array of whitelisted domains
      if (acceptedDomains.includes(domain)) {
        // The whole string only contains letters, numbers, periods,
        // underscores or hyphens before @sign
        emailDiv.textContent = '';
        emailDiv1.textContent = '';
        this.style.borderColor = '';
        document.getElementById("signup-btn").disabled = false;
      }
      else {
        emailDiv.textContent = 'Invalid Email Domain.';
        this.style.borderColor = 'red';
        document.getElementById('signup-btn').disabled = true;
      }

    } else {
      emailDiv1.textContent = 'Invalid Email. Please enter a valid email address.';
      this.style.borderColor = 'red';
      document.getElementById("signup-btn").disabled = true;
    }
  }

  //phone number validation
  const phoneNumberPatterns = {
    '+880': { pattern: /^[0-9]{3,}$/, minLength: 10, maxLength: 11 }, // Bangladesh
    '+1': { pattern: /^[0-9]{3,}$/, minLength: 10, maxLength: 10 }, // USA
    '+44': { pattern: /^[0-9]{5,}$/, minLength: 10, maxLength: 11 }, // UK
    // Add more country patterns here
  };

  function checkMobileNumber() {
    const countryCode = document.getElementById('countryCode').value;
    const { pattern, minLength, maxLength } = phoneNumberPatterns[countryCode];
    const mobileNumberInput = document.getElementById('mobile_number');
    const mobileNumberDiv = document.getElementById('mobile-number-message');
    const signupBtn = document.getElementById('signup-btn');

    if (
      mobileNumberInput.value.length >= minLength &&
      mobileNumberInput.value.length <= maxLength &&
      pattern.test(mobileNumberInput.value)
    ) {
      mobileNumberDiv.textContent = '';
      mobileNumberInput.style.borderColor = '';
      signupBtn.disabled = false;
    } else if (mobileNumberInput.value.length < minLength) {
      mobileNumberDiv.textContent = `Phone Number must be at least ${minLength} characters long`;
      mobileNumberInput.style.borderColor = 'red';
      signupBtn.disabled = true;
    } else if (!pattern.test(mobileNumberInput.value)) {
      mobileNumberDiv.textContent = 'Phone Number can only contain numbers (0-9)';
      mobileNumberInput.style.borderColor = 'red';
      signupBtn.disabled = true;
    } else {
      mobileNumberDiv.textContent = `Phone Number must be no longer than ${maxLength} characters`;
      mobileNumberInput.style.borderColor = 'red';
      signupBtn.disabled = true;
    }
  }


  //password length validation
  function checkPasswordLength() {
    if (passwordInput.value.length >= 8) {
      passLengthDiv.textContent = '';
    } else {
      passLengthDiv.textContent = 'Password must be at least 8 characters long';
    }
    checkPasswordsMatch();
  }


  // Hook up event listeners
  passwordInput.addEventListener("input", handleChange);
  confirmPasswordInput.addEventListener("input", checkPasswordsMatch);
  nameInput.addEventListener('input', checkName);
  emailInput.addEventListener('input', checkEmail);
  mobileNumberInput.addEventListener('input', checkMobileNumber);
  countryCodeSelector.addEventListener('change', checkMobileNumber);
  passwordInput.addEventListener('input', checkPasswordLength);










  document.querySelector('#signup-btn').addEventListener('click', function (event) {
    checkName();
    checkEmail();
    checkMobileNumber();
    checkPasswordLength();
  });
});



// img handling
const image = document.querySelector('#profpic img');
const profilePicPreview = document.querySelector('#profilePicPreview');

// Execute the code on page load.
window.addEventListener('load', function () {
  // Load the image from the profpic div into the profilePicPreview image.
  profilePicPreview.src = image.src;
});

// Update the profile picture preview image when the user clicks on the image in the profpic div.
image.addEventListener('click', function () {
  // Create a new file input element.
  const fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.accept = 'image/*';

  // Listen for the user to select an image file.
  fileInput.addEventListener('change', function () {
    // Get the selected image file.
    const file = fileInput.files[0];

    // Validate the selected image file.
    if (!file.type.match('image/*')) {
      alert('Please select an image file.');
      return;
    }

    // Create a new FileReader object.
    const reader = new FileReader();

    // Add an event listener to track the progress of the image upload.
    reader.addEventListener('progress', function (event) {
      // Update the progress bar.
      // ...
    });

    // Read the selected image file.
    reader.onload = function () {
      // Set the src attribute of the image element to the data URL of the selected image file.
      image.src = reader.result;

      // Update the profile picture preview image.
      profilePicPreview.src = reader.result;
    };

    reader.onerror = function (event) {
      alert('An error occurred while uploading the image file.');
      console.log(event.error);
    };

    reader.readAsDataURL(file);
  });

  // Click the file input element to open the file selection dialog.
  fileInput.click();
});
