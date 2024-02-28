// const slides = document.querySelectorAll('.slide_col');
// let currentSlide = 0;

// // Set the first slide to active
// slides[currentSlide].classList.add('active');

// function nextSlide() {
//     // Remove the active class from the current slide
//     slides[currentSlide].classList.remove('active');

//     // Move to the next slide
//     currentSlide = (currentSlide + 1) % slides.length;

//     // Add the active class to the next slide
//     slides[currentSlide].classList.add('active');
// }

// function prevSlide() {
//     // Remove the active class from the current slide
//     slides[currentSlide].classList.remove('active');

//     // Move to the previous slide
//     currentSlide = (currentSlide - 1 + slides.length) % slides.length;

//     // Add the active class to the previous slide
//     slides[currentSlide].classList.add('active');
// }

// // Add event listeners for the next and previous buttons
// document.querySelector('#next').addEventListener('click', nextSlide);
// document.querySelector('#prev').addEventListener('click', prevSlide);

// // Set an interval to switch to the next slide every 5 seconds
// setInterval(nextSlide, 5000);