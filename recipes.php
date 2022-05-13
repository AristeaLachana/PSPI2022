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

  <title>RECIPES</title>
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
    include 'header.php'
     ?>
    <br>


    <div class="center">
      <hr style="border-top:2px solid #90EE90">
          <h2><strong>ΔΙΑΤΡΟΦΗ</strong></h2>
    <hr style="border-top:2px solid  #ED6964">
      </div><br>

      <div class="dropdown">
      <button class="dropbtn">Επιλογές</button>
      <div class="dropdown-content">
        <a href="recipes.php">Συνταγές</a>
        <a href="allArticlesNutrition.php">Άρθρα</a>
      </div>
    </div>

    <br>

    <h3>ΣΥΝΤΑΓΕΣ</h3>

        <!--first article-->
        <div class="containerBlog">
          <br>

          <p>
            <a class="containerBlog__img_link" href="readmorequinoapesto.php">
              <img class="containerBlog__img" src="κινοα.jpg"/>
            </a>
    <a href="readmorequinoapesto.php"><strong>Quinoa Risotto με πέστο ρόκας-δυόσμου</strong></a><br><br>
    Μία ιδέα για το πώς να εντάξετε τη κινόα στη διατροφή σας, που είναι μια εξαιρετική πηγή μαγνησίου, φυλλικού οξέος, καλίου, σιδήρου και ψευδαργύρου, ασβεστίου και φυτικών ινών.<a href="readmorequinoapesto.php" style="color:grey;">...Διαβάστε περισσότερα</a>

    </p>

    </div>

    <!--second article-->
        <div class="containerBlog">
          <br>

          <p>
            <a class="containerBlog__img_link" href="readmoregranola.php">
              <img class="containerBlog__img" src="granola.jpg"/>
            </a>

            <a href="readmoregranola.php"><strong>Τραγανή granola με αποξηραμένα φρούτα και ξηρούς καρπούς</strong></a><br><br>
            Τί θα λέγατε για ένα γευστικό συνδυασμό που μας κρατάει πλήρεις και μας προσφέρει απλόχερα όλα τα θρεπτικά συστατικά που χρειάζεται ο οργανισμός μας για να ξεκινήσει δυναμικά η μέρα μας;<a href="readmoregranola.php" style="color:grey;">...Διαβάστε περισσότερα</a>
        </p>

        </div>
        <br>
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

  </html>
