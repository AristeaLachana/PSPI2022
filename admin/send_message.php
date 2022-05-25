<?php
if (isset($_POST['send_message_btn'])) {
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['comments'];
  /*Το Content-Type βοηθά το πρόγραμμα-πελάτη email να αναλύει το αρχείο ως HTML
   επομένως διατήρηση στυλ*/
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('katerinasaiti01@gmail.com', $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>
