<?php

$db = mysqli_connect('localhost', 'root', '', 'improveyourhealth');

//initialise variables
$theme = "";
$body = "";
$errors = array();

//send message to the admin
if (isset($_POST['send_message_btn'])) {

  //get values from form
  $theme = $_POST['theme']; //message subject
  $body = $_POST['body']; //body - message

  //user's email
  $email_from = $_SESSION['email'];

  if (empty($theme)) { array_push($errors, "*Συμπληρώστε Θέμα"); }
  if (empty($body)) { array_push($errors, "*Συμπληρώστε το μήνυμά σας"); }

  if (count($errors) == 0) {
    $query = "INSERT INTO emails (theme, body, email_from) VALUES ('$theme', '$body', '$email_from')";
    mysqli_query($db, $query);
    header('location: contactpage.php');
    include('admin\success.php');
  }
}
?>
