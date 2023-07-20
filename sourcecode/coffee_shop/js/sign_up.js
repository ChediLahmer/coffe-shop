const form = document.querySelector('.the-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');

form.addEventListener('submit', function(event) {
  

  // Name validation
  const nameValue = nameInput.value.trim();
  if (nameValue === '') {
    alert('Please enter your name.');
    return false;
  }
  const nameRegex = /^[A-Za-z]+$/;
  if (!nameRegex.test(nameValue)) {
    alert('Please enter a valid name (letters only).');
    return false;
  }

  // Email validation
  const emailValue = emailInput.value.trim();
  if (emailValue === '') {
    alert('Please enter your email.');
    return false;
  }
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailValue)) {
    alert('Please enter a valid email address.');
    return false;
  }

  // Password validation
  const passwordValue = passwordInput.value.trim();
  if (passwordValue === '') {
    alert('Please enter your password.');
    return false;
  }
  if (passwordValue.length < 8) {
    alert('Your password must be at least 8 characters long.');
    return false;
  }
  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
  if (!passwordRegex.test(passwordValue)) {
    alert('Your password must contain at least one uppercase letter, one lowercase letter, and one number.');
    return false;
  }

  // Confirm Password validation
  const confirmPasswordValue = confirmPasswordInput.value.trim();
  if (confirmPasswordValue === '') {
    alert('Please confirm your password.');
    return false;
  }
  if (confirmPasswordValue !== passwordValue) {
    alert('Your passwords do not match.');
    return false;
  }
});
