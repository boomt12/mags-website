<!DOCTYPE html>
<!--Copyright Heeju Shim 2021. All rights reserved. !-->
<!-- code for loading fonts as well as a viewport to fit mobile and smaller screens !-->

<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Roboto+Slab&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device,width, initial-scale=1.0"> 
<link rel=stylesheet href="css/style.css"/>
<title>Tourism in New Zealand</title>

<!--main content !-->
<?php include'src/top.php'; ?>
<html>
 <main class="box">
<h2> test main</h2>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/slideshowrestraunt.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
                

     <!-- script for slideshow !-->
     <script>
var slideIndex = 1;
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
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}

</script>
    </main>

<aside class="box">
    <a class="imgcascade" href="contact.php">
    <img src="img/slideshowrestraunt.jpg" alt="first button" height="0" width="100">
    </a>
    </aside>
<footer class="box">
    
<h2> Copyright Heeju Shim 2021</h2>
    </footer>
</html>


