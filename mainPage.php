<?php include('mustLogin.php')?>
<?php include('cookies.php')?>
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

<title>Improve Your Health | Αρχική Σελίδα</title>
<link rel="icon" type="image/x-icon" href="favicon.png">
<style>
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  body {
    background-color:white;
    font-family: Arial, Helvetica, sans-serif;
  }
  p {color:black;}

</style>
</head>
<body>
  <?php
    include 'includes\header.php';
   ?>
  <br>

  <!-- container - image - description paragraph -->
  <div class="container">
    <img src="img2.jpeg" style="width:80%;border-radius:7px;">
    <div class="text-block">
    <p class="container" style="font-size:17px;color:white;"><strong>Καλώς Ήρθες στην Improve Your Health!</strong><br><br>
Η επιδίωξή μας είναι να βοηθήσουμε στην προσπάθειά σου για ένα υγιεινό τρόπο ζωής.<br> Ως «υγεία», ορίζεται η κατάσταση πλήρους σωματικής, ψυχικής και κοινωνικής ευεξίας.
<br>Με άλλα λόγια υγιής, είναι ο άνθρωπος που αισθάνεται καλά τόσο σωματικά όσο και ψυχικά, με αποτέλεσμα να έχει ομαλές σχέσεις με τους συνανθρώπους του.
Γι αυτό και εμείς παρέχουμε πληροφορίες για τα παραπάνω.<br><br>
<a href="categories.php" style="color:white;"><strong>Δες εδώ περισσότερα για να πετύχεις τους στόχους σου!</strong></a>
</p>
</div>
</div>
<br>
<?php
include 'includes\footer.php';
 ?>
</html>
