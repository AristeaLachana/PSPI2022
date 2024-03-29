<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    error_reporting(0);

//συνδεθείτε στη βάση δεδομένων
$db = mysqli_connect('localhost', 'root', '', 'improveyourhealth');

//αρχικοποίηση μεταβλητών
$username = "";
$email    = "";
$firstname= "";
$surname  = "";
$date1     = "";
$isExpert = "";
$experttitle = "";
$expertcategories = "";
$errors = array();

// ΕΓΓΡΑΦΗ ΧΡΗΣΤΗ
if (isset($_POST['signup'])) {
  // λάβετε όλες τις τιμές εισαγωγής από τη φόρμα
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $date1 = mysqli_real_escape_string($db, $_POST['date1']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $passwordverification= mysqli_real_escape_string($db, $_POST['passwordverification']);
  $isExpert = mysqli_real_escape_string($db, $_POST['expert']);
  $experttitle = mysqli_real_escape_string($db, $_POST['experttitle']);
  $expertcategories = mysqli_real_escape_string($db, $_POST['expertcategories']);

  if ($password != $passwordverification) {
	   array_push($errors, "Οι δύο κωδικοί πρόσβασης δεν ταιριάζουν");
  }

  /*ελέγξτε πρώτα τη βάση δεδομένων για να βεβαιωθείτε
   δεν υπάρχει ήδη χρήστης με το ίδιο όνομα χρήστη και/ή email*/
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // εάν υπάρχει χρήστης
    if ($user['username'] === $username) {
      array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Το email υπάρχει ήδη");
    }
  }

// Τέλος, εγγραφείτε χρήστη εάν δεν υπάρχουν σφάλματα στη φόρμα
//κρυπτογραφήστε τον κωδικό πρόσβασης πριν τον αποθηκεύσετε στη βάση δεδομένων
if (count($errors) == 0) {
  	$query = "INSERT INTO users (username, email, name, surname, dateOfBirth , password, expert, expert_title, expert_category)
  			  VALUES('$username', '$email', '$firstname', '$surname', '$date1' ,'$password', '$isExpert', '$experttitle', '$expertcategories')";
  	mysqli_query($db, $query);
    $_SESSION['admin']=0;
    $_SESSION['expert']= $isExpert;
    $_SESSION['email'] = $email;
  	$_SESSION['username'] = $username;
  	header('location: mainPage.php');
  }
}

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
      array_push($errors, "*Username απαιτείται");
  }
  if (empty($password)) {
    array_push($errors, "*Password απαιτείται");
  }

  if (count($errors) == 0) {
  // to make more secure, but in this project we dont want to	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $currentUser = mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
      $isExpert=$currentUser['expert'];
      $email = $currentUser['email'];
      $admin=$currentUser['admin'];
      $_SESSION['admin']=$admin;
      $_SESSION['expert'] = $isExpert;
      $_SESSION['email'] = $email;
  	  $_SESSION['username'] = $username;
  	  header('location: mainPage.php');
  	}else {
      array_push($errors, "*Λανθασμένος συνδυασμός ονόματος χρήστη/κωδικού πρόσβασης");
  	}
  }
}
?>
