<?php

//συνδεθείτε στη βάση δεδομένων

// Admin user variables
$username="";
$isEditingUser = false;
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

// if user clicks the Edit user button
if (isset($_GET['edit-user'])) {
	$isEditingUser = true;
	$username = $_GET['edit-user'];
	editUser($username);
}
// if user clicks the update user button
if (isset($_POST['update_user'])) {
	updateUser($_POST,$username);
}

function editUser($username)
{
	global $conn, $username,$password, $isEditingUser, $user_id,$firstname,$surname,$experttitle,$date1, $email;

	$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
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

function updateUser($request_values,$username){
	global $conn;
	// set edit state to false
	$isEditingUser = false;
	$old_username=$_SESSION['username'];
	$username=mysqli_real_escape_string($conn, $_POST['username']);
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

		//encrypt the password (security purposes)
		//$password = md5($password);

		$query = "UPDATE users SET username='$username',name='$firstname', surname='$surname', email='$email', expert='$isExpert', password='$password', expert_title='$experttitle', dateOfBirth='$date1',
		 expert_category='$expertcategories'  WHERE username='$old_username'";
		 mysqli_query($conn, $query);

		$_SESSION['message'] = "User successfully updated";
		header('location: mainPage.php');
		exit(0);

}


/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPostsPsychology() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND category='psychology')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getPublishedPostsNutrition() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND category='nutrition')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getPublishedPostsExercise() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND category='exercise')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=1";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	return $post;
}

function getNutritionExperts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM users WHERE (expert_category=1 && expert=1)";
	$result = mysqli_query($conn, $sql);

	// fetch all nutrition experts as an associative array called $experts
	$experts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $experts;
}

function getExerciseExperts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM users WHERE (expert_category=2 && expert=1)";
	$result = mysqli_query($conn, $sql);

	// fetch all exercise experts as an associative array called $experts
	$experts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $experts;
}

function getPsychologyExperts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM users WHERE (expert_category=3 && expert=1)";
	$result = mysqli_query($conn, $sql);

	// fetch all psychologists as an associative array called $experts
	$experts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $experts;
}
?>
