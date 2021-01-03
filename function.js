var cta = document.querySelector(".cta");
var i = document.querySelector("i");
var check = 2;

cta.addEventListener('click', function(e){
    var text = e.target.nextElementSibling;
    var loginText = e.target.parentElement;
    text.classList.toggle('show-hide');
    loginText.classList.toggle('expand');
    if(check == 0)
    {
        
        cta.innerHTML = "Log In Now!";
     
        check++;
    }
    else
    {
     
        cta.innerHTML = "Get Started!";
       
        check = 0;
    }
})

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
// window.addEventListener('scroll',() => {
//     const scrollable = document.documentElement.scrollHeight - window.innerHeight;
//     const scroll = window.scrollY;
//     if(Math.ceil(scroll) === scrollable){
//         alert ('nice');
//     }
// })

// function disableScroll() { document.body.style.overflow="hidden";  }
// disableScroll();)
