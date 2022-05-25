<?php
if (isset($_POST['send_message_btn'])) {

  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  $to = "katerinasaiti01@gmail.com"
  // Content-Type helps email client to parse file as HTML
  // therefore retaining styles
  $headers = 'MIME-Version: 1.0' ;
  $headers .= 'Content-type:text/html;charset=UTF-8' ;
  $headers[] = "To: $to";
  $headers[] = "From: $email";
  $header = implode('\r\n', $headers);
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail($to, $subject, $message, $header)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>
