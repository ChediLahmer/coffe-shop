const form = document.querySelector('.the-form');
const email = document.querySelector('#email');
const password = document.querySelector('#password');

form.addEventListener('submit', (event) => {

  if (email.value.trim() === '' || password.value.trim() === '') {
    alert('Please fill in all required fields');
  } else if (!isValidEmail(email.value.trim())) {
    alert('Please enter a valid email address');
  }
});

function isValidEmail(email) {

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
