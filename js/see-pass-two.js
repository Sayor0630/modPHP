function togglePassword(inputId) {
    var passwordInput = document.getElementById(inputId);
    var passwordToggle = document.querySelector(`#${inputId} + .password-toggle`);

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordToggle.classList.remove('show');
      passwordToggle.classList.add('hide');
    } else {
      passwordInput.type = "password";
      passwordToggle.classList.remove('hide');
      passwordToggle.classList.add('show');
    }
  }