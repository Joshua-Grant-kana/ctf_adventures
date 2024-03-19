document.addEventListener('DOMContentLoaded', function(
) {
  // Add an event listener to the contact form
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
// Get the form data
var name = document.querySelector('input[name="name"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var message = document.querySelector('textarea[name="message"]').value;

    // Display a success message
alert('Your message has been sent!');

    // Clear the form fields
document.querySelector('input[name="name"]').value = '';
    document.querySelector('input[name="email"]').value = '';
    document.querySelector('textarea[name="message"]').value = '';
  });
});

const navSlide = (
) => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', () => {
    //toggle nav
nav.classList.toggle('nav-active');

    //animate links
navLinks.forEach((link, index) => {
      link.style.animation ? link.style.animation = '' : link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
    });
    //burger animation
burger.classList.toggle('toggle');
  });
}

navSlide();

const carousel = document.querySelector('.carousel');
const slides = carousel.querySelectorAll('.slide');
let currentSlide = 0;

const moveLeft = (
) => {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  goToSlide();
}

const moveRight = (
) => {
  currentSlide++;
  if (currentSlide > slides.length - 1) {
    currentSlide = 0;
  }
  goToSlide();
}

const goToSlide = (
) => {
  slides.forEach((slide, index) => {
    if (index === currentSlide) {
      slide.style.display = 'block';
    } else {
      slide.style.display = 'none';
    }
  });
}

carousel.addEventListener('click', (e) => {
  if (e.target.classList.contains('carousel-button')) {
    e.target.classList.contains('left') ? moveLeft() : moveRight();
  }
});
