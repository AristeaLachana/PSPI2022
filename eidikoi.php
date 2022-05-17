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

  <title>Η ΟΜΑΔΑ ΜΑΣ</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <style>
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
      <hr style="border-top:2px solid #90EE90">
          <h2><strong>Η ΟΜΑΔΑ ΜΑΣ</strong></h2>
    <hr style="border-top:2px solid  #ED6964">
      </div><br>

      <div class="dropdown" style="margin-left:10%">
      <button class="dropbtn">Επιλογές</button>
      <div class="dropdown-content">
        <a href="eidikoi.php">ΔΙΑΤΡΟΦΟΛΟΓΟΙ</a>
        <a href="eidikoigym.php">ΓΥΜΝΑΣΤΕΣ</a>
        <a href="eidikoiph.php">ΨΥΧΟΛΟΓΟΙ</a>
      </div>
    </div>

    <br>

    <h3>ΔΙΑΤΡΟΦΟΛΟΓΟΙ</h3>
    <div class="row-eidikoi">
      <div class="column-eidikoi">
        <div class="card">
             <img src="eidikos.jpg" alt="Έφη" style="width:100%">
             <h1>Έφη Κ.</h1>
             <p class="title1">Κλινική Διαιτολόγος - Διατροφολόγος </p>
             <p>Χαροκοπείου Πανεπιστημίου Αθηνών</p>
             <div style="margin: 24px 0;">
               <a1 href="#"><i class="fa fa-dribbble"></i></a1>
               <a1 href="#"><i class="fa fa-twitter"></i></a1>
               <a1 href="#"><i class="fa fa-linkedin"></i></a1>
               <a1 href="#"><i class="fa fa-facebook"></i></a1>
               <p></p>
             </div>
           </div>
      </div>
      <div class="column-eidikoi">
        <div class="card">
             <img src="eidikos.jpg" alt="Μαρία" style="width:100%">
             <h1>Μαρία Μ.</h1>
             <p class="title1">Κλινική Διαιτολόγος - Διατροφολόγος</p>
             <p>Χαροκοπείου Πανεπιστημίου Αθηνών</p>
             <div style="margin: 24px 0;">
               <a1 href="#"><i class="fa fa-dribbble"></i></a1>
               <a1 href="#"><i class="fa fa-twitter"></i></a1>
               <a1 href="#"><i class="fa fa-linkedin"></i></a1>
               <a1 href="#"><i class="fa fa-facebook"></i></a1>
               <p></p>
             </div>
           </div>
      </div>
      <div class="column-eidikoi">
        <div class="card">
             <img src="eidikos.jpg" alt="Ναταλία" style="width:100%">
             <h1>Ναταλία Τ.</h1>
             <p class="title1">Διαιτολόγος – Διατροφολόγος</p>
             <p>King’s College of London</p>
             <div style="margin: 24px 0;">
               <a1 href="#"><i class="fa fa-dribbble"></i></a1>
               <a1 href="#"><i class="fa fa-twitter"></i></a1>
               <a1 href="#"><i class="fa fa-linkedin"></i></a1>
               <a1 href="#"><i class="fa fa-facebook"></i></a1>
               <p></p>
             </div>
            </div>
      </div>

</div>









<br>
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
