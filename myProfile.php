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
  <title>Improve Your Health | Το Προφίλ μου</title>
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
    <?php $experts = getNutritionExperts(); ?>
    <?php
    include 'includes\header.php';
     ?>


    <div class="content-experts">  <!--same template as experts pages-->
      <div class="center">
              <h2><strong>ΤΟ ΠΡΟΦΙΛ ΜΟΥ</strong></h2>
      </div>
      <br>



      <div class="card" style="border-radius:10px;">
        <br>
        <img src="uploads/eidikos.jpg" alt="<?php echo $expert['name']?>" style="width:100%;cursor:auto">

        <form  action="myProfile.php" method="post" style="margin:auto;max-width:300px">
          <th>
            <br><label for="username"><strong>Username</strong></label>
          </th>
         <div class="name" style="margin:auto;max-width:300px">
           <input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username" required>
         </div>
       </td>
       <td>

         <th>
           <br><label for="email"><strong>e-mail</strong></label>
         </th>
        <div class="email" style="margin:auto;max-width:300px">
           <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" required>
        </div>
       </td>
    </tr>
    <tr>
       <td>

         <th>
           <br><label for="firstname"><strong>Όνομα</strong></label>
         </th>
          <div class="firstname" style="margin:auto;max-width:300px">
           <input type="text" name="firstname" minlength="3" maxlength="30" placeholder="Όνομα"  value="<?php echo $firstname; ?>" required>
          </div>
       </td>
       <td>
         <th>
           <br><label for="surname"><strong>Επώνυμο</strong></label>
         </th>

         <div class="surname" style="margin:auto;max-width:300px">
          <input type="text" name="surname" minlength="3" maxlength="30" placeholder="Επώνυμο" value="<?php echo $surname; ?>" required>
         </div>

       </td>
    </tr>
    <tr>
       <th>
        <br><label for="date"><strong>Ημερομηνία Γέννησης</strong></label>
       </th>
       <td>

        <div class="date" style="margin:auto;max-width:300px">
         <input  class=date type="date" id="date" name=date1 value="<?php echo $date1; ?>" required>
        </div>
       </td>
    </tr>
    <tr>
      <th>
        <br><label for="password"><strong>Κωδικός</strong></label>
      </th>
      <td>
        <div class="password" style="margin:auto;max-width:300px">
         <input type="text" id="password" name="passwordverification" placeholder="Κωδικός" required>
        </div>
     </td>
    </tr>
  </form>
  <br>
  </div>
  <br>
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
