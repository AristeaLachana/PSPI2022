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
  <?php require_once('config.php') ?>
  <title>Improve Your Health | Η Ομάδα μας</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <style>
  a{
    text-decoration: none;
    color: black;
  }
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  </style>
  </head>
  <body>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php $experts = getExerciseExperts(); ?>
    <?php
  include 'includes\header.php';
     ?>



<div class="content-experts">
    <div class="pagination" style="align-items:center;">
      <a href="eidikoi.php">Διατροφολόγοι</a>
      <a href="eidikoigym.php" style="text-decoration:underline; text-decoration-color:#6495ED; color:#6495ED">Γυμναστές</a>
      <a href="eidikoiph.php">Ψυχολόγοι</a>
    </div>


    <br>

    <?php foreach ($experts as $expert): ?>
        <div class="row-eidikoi">
          <div class="column-eidikoi">
            <div class="card">
                 <img src="eidikos.jpg" alt="<?php echo $expert['name']?>" style="width:100%;cursor:auto">
                 <h1><?php echo $expert['name']?> <?php echo $expert['surname']?></h1>
                 <p><?php echo $expert['expert_title']?> </p>
                 <p class="title1"><?php echo $expert['email']?></p>
                 <div style="margin: 24px 0;padding:6px">
                   <a href="https://twitter.com/?lang=el"><i class="fa fa-twitter"></i></a>
                   <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                   <a href="https://el-gr.facebook.com/"><i class="fa fa-facebook"></i></a>
                 </div>
               </div>
          </div>
        </div>
    <?php endforeach ?>
    <br>
</div>


</body>
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
