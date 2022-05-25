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


    <title>Improve Your Health | Επικοινωνία</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right:  auto;
      }
      body {background-color:white;}
      h1 {color:#125688;}
      h2 {color:black;}
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
  include 'includes\header.php';
     ?>
  <br>
  <br>
    <div class="center">
            <h2><strong>ΕΠΙΚΟΙΝΩΝΙΑ</strong></h2>

</div>
 <div class="bg-img1">
   <form action="send_message.php" method="post" class="containercontact">
     <input class="contact-style-textbox" type="email" style="margin:auto;max-width:400px" name="email"  placeholder="Email">
     <br>
     <br>
     <input class="contact-style-textbox" type="text" style="margin:auto;max-width:400px"  name="subject"  placeholder="Θέμα">
     <br>
     <br>
     <label for="txtComments"> </label>
     <textarea  class="contact-style-textbox" id="txtComments" style="margin:auto;max-width:400px" name="comments" rows="10" cols="20" placeholder="Γράψτε το μήνυμά σας...."></textarea>
     <br>
     <a> <button class="btn" type="submit" name="send_message_btn">Αποστολή</button> </a>  

    </form>

    <br>
    <br>

</div>
</body>
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
