<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pspi.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Link to your stylesheet -->
    <link rel="stylesheet" href="./styles.css">
   <!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php  include('../config.php'); ?>
    <?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
    <?php
      // Get all  messages from DB
      $messages = getMessages();
    ?>
    <title>Admin | Επικοινωνία</title>
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right:  auto;
      }
      body {background-color:white;}
      h1 {color:#125688;}
      h2 {color:black;}
      h5 {color:#ED6964;}
      p {color:black;}
     body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
     }
    </style>
  </head>

  <body>


    <?php
      include 'includes\headerAdmin.php';
     ?>
  <br>
    <div class="center">
            <h2><strong>ΕΠΙΚΟΙΝΩΝΙΑ</strong></h2>
    </div>


 <div class="bg-img1">


   		<!-- Display records from DB-->
   		<div class="table-div" style="width:100%; position:relative">

   			<?php if (empty($messages)): ?>
   				<h1>No messages in the database.</h1>
   			<?php else: ?>
   				<table >
   					<thead>
   						<th><strong>ID</strong></th>
   						<th><strong>Email</strong></th>
              <th><strong>Θέμα</strong></th>
   						<th colspan="2"><strong>Άνοιγμα/ Διαγραφή</strong></th>
   					</thead>
   					<tbody>
   					<?php foreach ($messages as $key => $message): ?>
   						<tr>
   							<td><?php echo $message['id']; ?></td>
   							<td>
   								<?php echo $message['email_from']; ?>
   							</td>
   							<td><?php echo $message['theme']; ?></td>
   							<td>
   								<a class="fa fa-envelope-open-o btn edit"
   									href="messages.php?open-message=<?php echo $message['id'] ?>">
   								</a>
   							</td>
   							<td>
   								<a class="fa fa-trash btn delete"
   								    href="messages.php?delete-message=<?php echo $message['id'] ?>">
   								</a>
   							</td>
   						</tr>
   					<?php endforeach ?>
   					</tbody>
   				</table>
   			<?php endif ?>
   		</div>
         </div>

</div>
</body>
<br>
</br>
<?php
include 'includes\footerAdmin.php';
 ?>


<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
