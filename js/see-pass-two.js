const passwordField = document.getElementById('password');
const passwordFieldtwo = document.getElementById('confirm_password');
const togglePassword = document.getElementById('toggle-password');

togglePassword.addEventListener('click', function() {
  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
  const type2 = passwordFieldtwo.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordField.setAttribute('type', type);
  passwordFieldtwo.setAttribute('type', type2);
  togglePassword.classList.toggle('fa-eye-slash');
  togglePasswordtwo.classList.toggle('fa-eye-slash');
});
