<?php
     setcookie("user", $_SESSION['username'], time()+ 3600,'/'); // expires after 1 hour
     if (isset($_COOKIE['user'])){
     echo 'the cookie has been set for 1 hour'; //delete later
    }
    else{
      echo 'Could not set cookie';
    }
?>
