<?php include('mustLogin.php')?>
<?php require_once('config.php')?>
<?php include('upload.php')?>
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
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
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
    include 'includes\header.php';
     ?>

  <br>
      <div class="center">
        <h2><strong>ΠΡΟΣΘΗΚΗ ΠΕΡΙΕΧΟΜΕΝΟΥ</strong></h2>
     </div>
     <div class="add-style">

    <form action="" method="post" class="containercontact" style="text-align:center; position:relative; margin: auto; float: center;">
     <div class="container">
       <h5 style="color:white;"><label for='fc'>Επιλογή Εικόνας </label><br>
       <input type='file' id='fc' name="file" value="<?php echo $fileName?>"></h5>
       <input class="contact-style-textbox" type="text" style="margin:auto;width:400px" name="article_title"  placeholder="Τίτλος  Άρθρου" value="<?php echo $article_title?>" required>
       <br><br>
      <label for="txtComments"> </label>
      <textarea class="add-style-textbox" id="article_body" style="margin:auto;width:500px" name="article_body" rows="15" cols="40" placeholder="Γράψτε το άρθρο σας..." value="<?php echo $article_body?>" required></textarea>
      <br>
      <div class="expertcategories" style="margin:auto;width:300px">
       <select id="article-category" name="article_category" style="background-color:#f1f1f1" required>
         <option value="null" selected>Κατηγορία Άρθρου</option>
         <option value="nuttrition">Διατροφή</option>
         <option value="exercise">Σωματική Άσκηση</option>
         <option value="psychology">Ψυχολογία</option>
       </select>
      </div>
      <h5 style="color:white;">Αν ανήκει στη κατηγορία "Διατροφή",<br> είναι συνταγή;<br>
        <label for="recipe">Ναι</label> <input type='checkbox' id="recipe" name="recipe" value="1">
      </h5>
      <button type="submit" name="submit" class="btn">Υποβολή</button>
     </div>
   </form>

  </br>
  </div>
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
