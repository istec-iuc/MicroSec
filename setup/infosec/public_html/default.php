<?php   

#Gizem Bulut

if (!isset($_SESSION['oturum']))
{
    header("Location: index.php");
    die();
}
?>
<div class="page">
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <a href="https://www.istanbulc.edu.tr/tr/_"> <img src="http://lorempixel.com/800/330/fashion" style="width:100%"></a>
    <div class="text">İstanbul Üniversitesi-Cerrahpaşa</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <a href="https://iste.center/"> <img src="http://lorempixel.com/800/330/nightlife" style="width:100%"></a>
    <div class="text">ISTEC</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <a href="https://www.docker.com/"> <img src="http://lorempixel.com/800/330/fashion" style="width:100%"></a>
    <div class="text">Docker</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <a href="https://www.phpmyadmin.net/"> <img src="http://lorempixel.com/800/330/food" style="width:100%"></a>
    <div class="text">PhpMyAdmin</div>
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
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
<div class="slider-bottom">
    <div class="slider-bottom-text">
        1.yazı alanı
    </div>
    <div class="slider-bottom-text">
        2.yazı alanı
    </div>
</div>
</div>
<style>
* {box-sizing:border-box}

.page{
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    align-items: center;
    margin: 20px;
}

/* Slideshow container */
.slideshow-container {
  width:800px;
  height:330px;
  position: relative;
  margin: auto;
  border-radius: 10px 10px 10px 10px;
}

.slider-bottom{
    display: flex;
    flex-direction: row;
    margin: 0 auto;
    align-items: center;
    margin-left: 0px 50px 0px 50px;
}

.slider-bottom .slider-bottom-text{
    margin: 50px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  background-color: #7386d5;
  display: block;
  font-size: 15px;
  padding: 8px 12px;
  position: relative;
  bottom: 8px;
  
  text-align: center;
  border-radius: 10px 10px 10px 10px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  border-radius: 10px 10px 10px 10px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 10px 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
