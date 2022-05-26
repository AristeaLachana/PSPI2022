<?php

require_once('config.php');

if (isset($_POST['send_message_btn'])) {

  $subject = $_POST['subject']; //email subject
  $msg = $_POST['msg']; //body - email

  //user's email
  $email_from = $_SESSION['email'];

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
