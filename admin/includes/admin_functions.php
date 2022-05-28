<?php
error_reporting(0);

//συνδεθείτε στη βάση δεδομένων

// Admin user variables
$user_id = 0;
$isEditingUser = false;
$username = "";
$email    = "";
$firstname= "";
$surname  = "";
$date1     = "";
$isExpert = "";
$experttitle = "";
$expertcategories = "";
$errors = array();
/* - - - - - - - - - -
-  Admin users actions
- - - - - - - - - - -*/
// if user clicks the create admin button
if (isset($_POST['create_user'])) {
	createUser($_POST);
}
// if user clicks the Edit admin button
if (isset($_GET['edit-user'])) {
	$isEditingUser = true;
	$user_id = $_GET['edit-user'];
	editUser($user_id);
}
// if user clicks the update admin button
if (isset($_POST['update_user'])) {
	updateUser($_POST,$user_id);
}
// if user clicks the Delete admin button
if (isset($_GET['delete-user'])) {
	$user_id = $_GET['delete-user'];
	deleteUser($user_id);
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* - Returns all admin users and their corresponding roles
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function getUsers(){
	global $conn, $roles;
	$sql = "SELECT * FROM users WHERE admin=0";
	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* - Returns all messages
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function getMessages(){
	global $conn;
	$sql = "SELECT * FROM emails";
	$result = mysqli_query($conn, $sql);
	$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $messages;
}

/* * * * * * * * * * * * * * * * * * * * *
* - Escapes form submitted value, hence, preventing SQL injection
* * * * * * * * * * * * * * * * * * * * * */

// Receives a string like 'Some Sample String'
// and returns 'some-sample-string'
function makeSlug(String $string){
	$string = strtolower($string);
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}

/* - - - - - - - - - - - -
-  Admin users functions
- - - - - - - - - - - - -*/
/* * * * * * * * * * * * * * * * * * * * * * *
* - Receives new admin data from form
* - Create new admin user
* - Returns all admin users with their roles
* * * * * * * * * * * * * * * * * * * * * * */
function createUser($request_values){
	global $conn;// λάβετε όλες τις τιμές εισαγωγής από τη φόρμα
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$date1 = mysqli_real_escape_string($conn, $_POST['date1']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$passwordverification= mysqli_real_escape_string($conn, $_POST['passwordverification']);
$isExpert = mysqli_real_escape_string($conn, $_POST['expert']);
$experttitle = mysqli_real_escape_string($conn, $_POST['experttitle']);
$expertcategories = mysqli_real_escape_string($conn, $_POST['expertcategories']);

/* επικύρωση φόρμας: βεβαιωθείτε ότι η φόρμα έχει συμπληρωθεί σωστά ...
 προσθέτοντας το αντίστοιχο σφάλμα (array_push()) στον πίνακα $errors
if (empty($username)) { array_push($errors,"*username απαιτείται"); }
if (empty($email)) { array_push($errors, "*email απαιτείται"); }
if (empty($firstname)) { array_push($errors, "*Όνομα απαιτείται"); }
if (empty($surname)) { array_push($errors, "*Επώνυμο απαιτείται"); }
if (empty($date1)) { array_push($errors, "*Ημερομηνία Γέννησης απαιτείται"); }
if (empty($password)) { array_push($errors, "*Password απαιτείται"); }
if (empty($passwordverification)) { array_push($errors, "*Επιβεβαίωση κωδικού απαιτείται"); }
*/
if ($password != $passwordverification) {
array_push($errors, "Οι δύο κωδικοί πρόσβασης δεν ταιριάζουν");
}

/*ελέγξτε πρώτα τη βάση δεδομένων για να βεβαιωθείτε
 δεν υπάρχει ήδη χρήστης με το ίδιο όνομα χρήστη και/ή email*/
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
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
/*if (count($errors) == 0) {
	$password = md5($password); *///κρυπτογραφήστε τον κωδικό πρόσβασης πριν τον αποθηκεύσετε στη βάση δεδομένων
if (count($errors) == 0) {
	$query = "INSERT INTO users (username, email, name, surname, dateOfBirth , password, expert, expert_title, expert_category)
				VALUES('$username', '$email', '$firstname', '$surname', '$date1' ,'$password', '$isExpert', '$experttitle', '$expertcategories')";
	mysqli_query($conn, $query);

	$_SESSION['message'] = "User successfully created";
	header('location: users.php');
	exit(0);
}
}

/* * * * * * * * * * * * * * * * * * * * *
* - Takes admin id as parameter
* - Fetches the admin from database
* - sets admin fields on form for editing
* * * * * * * * * * * * * * * * * * * * * */
function editUser($user_id)
{
	global $conn, $username,$password, $isEditingUser, $user_id,$firstname,$surname,$experttitle,$date1, $email;

	$sql = "SELECT * FROM users WHERE id=$user_id LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);

	// set form values ($username and $email) on the form to be updated
	$username = $user['username'];
	$email = $user['email'];
	$firstname = $user['name'];
	$surname = $user['surname'];
	$date1 = $user['dateOfBirth'];
	$password = $user['password'];

	$experttitle = $user['expert_title'];
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* - Receives admin request from form and updates in database
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function updateUser($request_values,$user_id){
	global $conn;
	// set edit state to false
	$isEditingUser = false;
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$date1 = mysqli_real_escape_string($conn, $_POST['date1']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$passwordverification= mysqli_real_escape_string($conn, $_POST['passwordverification']);
	$isExpert = mysqli_real_escape_string($conn, $_POST['expert']);
	$experttitle = mysqli_real_escape_string($conn, $_POST['experttitle']);
	$expertcategories = mysqli_real_escape_string($conn, $_POST['expertcategories']);
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		//encrypt the password (security purposes)
		//$password = md5($password);

		$query = "UPDATE users SET username='$username',name='$firstname', surname='$surname', email='$email', expert='$isExpert', password='$password', expert_title='$experttitle', dateOfBirth='$date1',
		 expert_category='$expertcategories'  WHERE id='$user_id'";
		 mysqli_query($conn, $query);

		$_SESSION['message'] = "User successfully updated";
		header('location: users.php');
		exit(0);
	}
}
// delete admin user
function deleteUser($user_id) {
	global $conn;
	$sql = "DELETE FROM users WHERE id=$user_id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "User successfully deleted";
		header("location: users.php");
		exit(0);
	}
}
?>
