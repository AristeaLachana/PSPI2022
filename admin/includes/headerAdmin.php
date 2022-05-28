<html>
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

  <link rel="icon" type="image/x-icon" href="uploads\favicon.png">

  <style>

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  /*a{text-decoration: none;}*/
  </style>
</head>
<div class="upperBackground">
  <div class="logo logoSmall" >
      <a href="menu.php"> <img alt="Improve Your Health" src="../uploads\logo.png"
         width="400" height="100"></a>
  </div>
<br><br>
  <?php if (isset($_SESSION['username'])) : ?>
<div class="dropdown" style="float:right;margin-right:5%">
<button class="dropbtn" style="border-radius: 100px 10px / 120px;">Ο λογαριασμός μου</button>
<div  class="dropdown-content">

  <a href="#" style="cursor:default;"><?php echo $_SESSION['username']?></a>
  <a href="../logout.php">Αποσύνδεση</a>

</div>

</div>
<?php endif; ?>
  <form class="search" style="margin:auto;max-width:400px;" action="../search.php" method="get">
    <input type="text"  placeholder="Search.." name="search">
    <button type="submit" name="submit-search" value="search"> <i class="fa fa-search"></i></button>
  </form>
</div>

  <div class="page">
    <nav class="page__menu page__custom-settings menu">

      <ul class="menu__list r-list">
        <li class="menu__group"><a href="menu.php" class="menu__link r-link text-underlined">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a></li>
        <li class="menu__group"><a href="../categories.php" class="menu__link r-link text-underlined">ΠΕΡΙΕΧΟΜΕΝΟ</a></li>
        <li class="menu__group"><a href="../eidikoi.php" class="menu__link r-link text-underlined">Η ΟΜΑΔΑ ΜΑΣ</a></li>
        <li class="menu__group"><a href="users.php" class="menu__link r-link text-underlined">ΧΡΗΣΤΕΣ</a></li>
        <li class="menu__group"><a href="messages.php" class="menu__link r-link text-underlined">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li class="menu__group"><a href="posts.php" class="menu__link r-link text-underlined">ΑΝΑΡΤΗΣΕΙΣ</a></li>

      </ul>

      <ul class="smallScreenMenu">
        <li class="menu__group"><a href="menu.php" class="">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a></li>
        <li class="menu__group"><a href="../categories.php" class="">ΠΕΡΙΕΧΟΜΕΝΟ</a></li>
        <li class="menu__group"><a href="../eidikoi.php" class="">Η ΟΜΑΔΑ ΜΑΣ</a></li>
        <li class="menu__group"><a href="users.php" class="">ΧΡΗΣΤΕΣ</a></li>
        <li class="menu__group"><a href="messages.php" class="">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li class="menu__group"><a href="posts.php" class="">ΑΝΑΡΤΗΣΕΙΣ</a></li>
      </ul>
    </nav>
  </div>

</html>
