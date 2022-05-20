<?php include('mustLogin.php')?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="pspi.css">
<!-- Font icons pulled from remix icon CDN (Content delivery network) -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<!-- Link to your stylesheet -->
<link rel="stylesheet" href="./styles.css">
<!-- -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Improve Your Health | Περιεχόμενο</title>
<link rel="icon" type="image/x-icon" href="favicon.png">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
a{
  text-decoration: none;
  color:white;
}
</style>
</head>
<body>

  <?php
  include 'includes\header.php';
   ?>
  <br>
  <div class="center">
            <h2><strong>ΚΑΤΗΓΟΡΙΕΣ</strong></h2>
  </div>
  </br>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <div class="header">
    <a href="allArticlesExercise.php"><img src="workout.jpg" style="width:100%"></a>
    <div class="overlay"><a href="allArticlesExercise.php">ΣΩΜΑΤΙΚΗ ΑΣΚΗΣΗ</a></div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <div class="header">
    <a href="allArticlesNutrition.php"><img src="nutrition.jpg" style="width:100%"></a>
    <div class="overlay"><a href="allArticlesNutrition.php">ΔΙΑΤΡΟΦΗ</a></div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <div class="header">
    <a href="allArticlesPsychology.php"><img src="psychology.jpg" style="width:100%"></a>
    <div class="overlay"><a href="allArticlesPsychology.php">ΨΥΧΟΛΟΓΙΑ</a></div>
  </div>
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
</body>
<br>
<?php
include 'includes\footer.php';
 ?>


<script>

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

</html>
