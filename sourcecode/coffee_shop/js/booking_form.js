const form = document.querySelector('.booking-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const guestsInput = document.getElementById('guests');
const messageInput = document.getElementById('message');
const formBtn = document.getElementById('form-btn');

form.addEventListener('submit', function() {
    event.preventDefault(); 
  if (nameInput.value === '') {
    alert('Please enter your name');
    return false;
  }

  if (emailInput.value === '') {
    alert('Please enter your email');
    return false;
  } else if (!isValidEmail(emailInput.value)) {
    alert('Please enter a valid email');
    return false;
  }

  if (phoneInput.value === '') {
    alert('Please enter your phone number');
    return false;
  } else if (!isValidPhone(phoneInput.value)) {
    alert('Please enter a valid phone number');
    return false;
  }

  if (dateInput.value === '') {
    alert('Please select a date');
    return false;
  }

  if (timeInput.value === '') {
    alert('Please select a time');
    return false;
  }

  if (guestsInput.value === '') {
    alert('Please enter the number of guests');
    return false;
  } else if (guestsInput.value < 1 || guestsInput.value > 10) {
    alert('Please enter a number between 1 and 10');
    return false;
  }
  
  return false;
});

function isValidEmail(email) {
  const re = /\S+@\S+\.\S+/;
  return re.test(email);
}

function isValidPhone(phone) {
  const re = /^\d{8}$/;
  return re.test(phone);
}

