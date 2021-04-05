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
<h2> Featured + Must See</h2>
<!-- Slideshow container from w3schools -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
     <a href="aboutus.php">
          <img src="img/passenger-traffic-122999_1920.jpg" style="width:100%">
    <div class="text">About Us</div>
     </a>  
  </div>
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
     <a href="contact.php">
          <img src="img/contact-us-4193637_1920.jpg" style="width:100%">
    <div class="text">Contact Us</div>
     </a>  
  </div>
   


  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
     <a href="auckland.php">
          <img src="img/new-zealand-73230_1920.jpg" style="width:100%">
    <div class="text">Auckland</div>
     </a>  
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
                

     <!-- javascript controls for slideshow !-->
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

<!--aside function for the 3 vertical row of images !-->
<aside class="box">
       <div class="row">
  <div class="column">
    <a href="auckland.php">
    <img src="img/new-zealand-73230_1920.jpg" alt="Auckland" class="responsiveimg">
      </a>
 <a href="wellington.php">
    <img src="img/vacations-2076121_1920.jpg" alt="Vacation" class="responsiveimg">  
      </a>
 <a href="aboutus.php">
    <img src="img/tree-838667_1280.jpeg" alt="about us" class="responsiveimg">  
      </a>
  </div>
</div>
    
    </aside>
<footer class="box">
    
    <h1> Copyright Heeju Shim 2021</h1>
    </footer>
</html>