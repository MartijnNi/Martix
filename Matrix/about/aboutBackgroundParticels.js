// Get carousel elements
const carousel = document.querySelector(".carousel");
const carouselSlides = document.querySelectorAll(".carousel-slide");
const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");
let currentIndex = 0;

// Show the initial slide
carouselSlides[currentIndex].classList.add("active");

// Configure button click events
prevBtn.addEventListener("click", () => {
  carouselSlides[currentIndex].classList.remove("active");
  currentIndex =
    currentIndex === 0 ? carouselSlides.length - 1 : currentIndex - 1;
  carouselSlides[currentIndex].classList.add("active");
});

nextBtn.addEventListener("click", () => {
  carouselSlides[currentIndex].classList.remove("active");
  currentIndex =
    currentIndex === carouselSlides.length - 1 ? 0 : currentIndex + 1;
  carouselSlides[currentIndex].classList.add("active");
});
