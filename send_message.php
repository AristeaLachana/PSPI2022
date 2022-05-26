<?php

require_once('config.php');

//send message to the admin
if (isset($_POST['send_message_btn'])) {
  $errors = array();

  $theme = $_POST['subject']; //email subject
  $body = $_POST['msg']; //body - email

  //user's email
  $email_from = $_SESSION['email'];

  if (empty($theme)) { array_push($errors, "*Συμπληρώστε Θέμα"); }
  if (empty($body)) { array_push($errors, "*Συμπληρώστε το μήνυμά σας"); }

  if (count($errors) == 0) {
    $query = "INSERT INTO emails (theme, body, email_from) VALUES ('$theme', '$body', 'email_from')";
  }
}
  // Content-Type helps email client to parse file as HTML
  // therefore retaining styles
  //$headers = 'MIME-Version: 1.0' ;
//  $headers .= 'Content-type:text/html;charset=UTF-8' ;
//  $headers = "To: $email_to";
//  $headers = "From: $email_from" . "\r\n" . "CC: $email_to";
  /*$header = implode('\r\n', $headers);
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";*/
  /*if (mail($email_to, $subject, $msg, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}*/
?>
