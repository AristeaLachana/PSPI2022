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


    <title>Improve Your Health | Προσθήκη Αρχείου</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right:  auto;
      }
      body {background-color:white;}
      h5 {color:black;}
      p {color:black;}


     body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
     }


    </style>
  </head>

  <body>
    <?php
    include 'includes\headerSpecialists.php';
     ?>
  <br>


  <br>
          <div class="center">
            <h2><strong>ΠΡΟΣΘΗΚΗ ΑΡΧΕΙΟΥ</strong></h2>
         </div>
  <div class="add-style">
    <form action="/sendData" method="post" class="containercontact">
     <div class="add">
      <h5 style="color:white;"><label for='fc'> Επιλογή αρχείου </label>
      <input  type='file' id='fc'name="file" ></h5>
      <label for="txtComments"> </label>
      <textarea class="add-style-textbox" id="txtComments" style="margin:auto;width:500px" name="comments" rows="15" cols="40" placeholder="Γράψτε το άρθρο σας..."></textarea>
      <br>
      <br>
      <a> <button class="btn">Υποβολή</button> </a>
     </div>
   </form>
  </div>
  <br>
  </br>
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
