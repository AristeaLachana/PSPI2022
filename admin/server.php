
// LOGIN USER
<?php
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username απαιτείται");
  }
  if (empty($password)) {
  	array_push($errors, "Password απαιτείται");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Είστε πλέον συνδεδεμένοι";
  	  header('location: mainPage.php');
  	}else {
  		array_push($errors, "Λανθασμένος συνδυασμός ονόματος χρήστη/κωδικού πρόσβασης");
  	}
  }
}
?>
<?php
session_start();

//αρχικοποίηση μεταβλητών
$username = "";
$email    = "";
$firstname= "";
$surname  = "";
$errors = array();

//συνδεθείτε στη βάση δεδομένων
$db = mysqli_connect('localhost', 'root', '', 'registration');

// ΕΓΓΡΑΦΗ ΧΡΗΣΤΗ
if (isset($_POST['signup'])) {
  // λάβετε όλες τις τιμές εισαγωγής από τη φόρμα
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $passwordverification= mysqli_real_escape_string($db, $_POST['passwordverification']);

  /* επικύρωση φόρμας: βεβαιωθείτε ότι η φόρμα έχει συμπληρωθεί σωστά ...
   προσθέτοντας το αντίστοιχο σφάλμα (array_push()) στον πίνακα $errors*/
  if (empty($username)) { array_push($errors, "Username απαιτείται"); }
  if (empty($email)) { array_push($errors, "Email απαιτείται"); }
  if (empty($firstname)) { array_push($errors, "Firstname απαιτείται"); }
  if (empty($surname)) { array_push($errors, "Surname απαιτείται"); }
  if (empty($password)) { array_push($errors, "Password απαιτείται"); }
  if (empty($passwordverification)) { array_push($errors, "Password Verification απαιτείται"); }
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
  if (count($errors) == 0) {
  	$password = md5($password);//κρυπτογραφήστε τον κωδικό πρόσβασης πριν τον αποθηκεύσετε στη βάση δεδομένων

  	$query = "INSERT INTO users (username, email, firstname, surname, password)
  			  VALUES('$username', '$email', '$firstname', '$surname', '$date' '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Είστε πλέον συνδεδεμένοι";
  	header('location: mainPage.php');
  }
}