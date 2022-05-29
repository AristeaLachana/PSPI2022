<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../pspi.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Link to your stylesheet -->
   <link rel="stylesheet" href="./styles.css">
   <!-- -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php require_once('../config.php') ?>
<?php require_once('includes/users_functions.php') ?>
    <title>Admin | Μενού</title>
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">
  <style>
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    a{
      color:white;
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
  include 'includes\headerAdmin.php';
   ?>

   <br>
   <br>
   <div class="container">
	<img src="..\uploads\img2.jpeg" style="width:80%;border-radius:7px;"><br><br><br><br>
  <div class="text-block">
    <div class="container" style="font-size:17px;color:white;text-align:center">
      <h3 style="color:white;">Χρήστες</h3>
			<a href="users.php">Users</a>
      <h3 style="color:white;">Αναρτήσεις</h3>
			<a href="posts.php">Posts</a>
      <h3 style="color:white;">Μηνύματα</h3>
			<a href="messages.php">Emails</a>
		<br><br><br>
  </div>
	</div>
</div>
</body>
<?php
include 'includes\footerAdmin.php';
 ?>
</html>
