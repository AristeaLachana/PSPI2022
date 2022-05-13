
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


    <title>Προσθήκη Αρχείου</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right:  auto;
      }
      body {background-color:white;}
      h1 {color:#125688;}
      h2 {color:#125688;}
      h5 {color:#ED6964;}
      p {color:black;}


     body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
     }


    </style>
  </head>

  <body>

    <?php
    include 'header.php'
     ?>
  <br>


  <br>
  <hr style="border-top:2px solid #90EE90">
           <div class="center">
              <h2><strong>ΠΡΟΣΘΗΚΗ ΑΡΧΕΙΟΥ</strong></h2>
           </div>


    <hr style="border-top:2px solid  #ED6964">
  <div class="add-style">

    <form action="sendData" class="containeradd" method="post" enctype="multipart/form-data">
     <div class="add">

      <h5><label for='fc'> Επιλογή αρχείου </label>
      <input  type='file' id='fc'name="file" ></h5>
      <label for="txtComments"> </label>
      <textarea class="add-style-textbox" id="txtComments" style="margin:auto;max-width:400px" name="comments" rows="15" cols="40" placeholder="Προσθήκη σχολίων..."></textarea>

      <br>
      <br>
      <div class="submit"></div>
      <a> <button class="btn">Υποβολή</button> </a>
     </div>
   </form>
  </div>
  <br>
  </br>
<?php
include 'footer.php'
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
