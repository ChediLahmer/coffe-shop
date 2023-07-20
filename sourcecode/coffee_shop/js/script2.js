document.addEventListener('DOMContentLoaded', function() {
  const readMoreButton = document.getElementById('read-more-btn');
  const extraText = document.getElementById('extra-text');

  if (readMoreButton && extraText) {
    readMoreButton.addEventListener('click', function() {
      extraText.style.display = 'block';
      readMoreButton.style.display = 'none';
    });
  }
});

