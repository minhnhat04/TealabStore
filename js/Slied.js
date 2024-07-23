// const slider = document.querySelector('.slider');
// const prevBtn = document.querySelector('.prev-btn');
// const nextBtn = document.querySelector('.next-btn');

// let slideIndex = 0;

// prevBtn.addEventListener('click', () => {
//   slideIndex--;
//   if (slideIndex < 0) {
//     slideIndex = slider.children.length - 1;
//   }
//   slide();
// });

// nextBtn.addEventListener('click', () => {
//   slideIndex++;
//   if (slideIndex === slider.children.length) {
//     slideIndex = 0;
//   }
//   slide();
// });

// function slide() {
//   const slideWidth = slider.clientWidth;
//   slider.style.transform = `translateX(${-slideWidth * slideIndex}px)`;
// }

// window.addEventListener('resize', slide);
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1; }
  if (n < 1) { slideIndex = slides.length; }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

let slideInterval = setInterval(function() {
  plusSlides(1); 
}, 3000); 

function changeImage(imagePath) {
  // Lấy thẻ hình ảnh lớn
  var largeImage = document.getElementById('largeImage');

  // Thay đổi ảnh lớn
  largeImage.src = imagePath;
}