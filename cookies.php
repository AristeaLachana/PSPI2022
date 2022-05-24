<?php
     setcookie('user', $_SESSION['username'], time()+ 3600*24,'/'); // expires after 1 day
     /*if (isset($_COOKIE['user'])){
     echo 'the cookie has been set for 1 day'; //delete later
    }
    else{
      echo 'Could not set cookie';
    }
    print_r($_COOKIE);*/
?>
