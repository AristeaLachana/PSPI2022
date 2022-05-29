<!DOCTYPE html>
<?php include('../mustLogin.php')?>
<?php include('includes/onlyAdmin.php')?>
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
    <?php include(ROOT_PATH . '/admin/includes/users_functions.php'); ?>
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
     <div class="content-experts">
  <br>
    <div class="center">
      <h2><strong>ΜΗΝΥΜΑΤΑ</strong></h2>
    </div><br>

 <div class="container center">
   <form action="" method="post" class="containercontact" style="text-align:center; position:relative;   margin: auto;">

     <br>
     <input class="contact-style-textbox" type="text" style="margin:auto;"  name="email_theme" value="<?php echo $email_theme; ?>" placeholder="Θέμα" readonly>
     <br>
     <br>
     <label for="txtComments"> </label>
     <textarea class="contact-style-textbox" id="body" style="resize: both; margin:auto;width:auto" name="email_body" rows="10" cols="20" placeholder="Μήνυμα" readonly></textarea>
     <br>
     <br>
     <input class="contact-style-textbox" type="text" style="margin:auto;"  name="email_from" value="<?php echo $email_from; ?>" placeholder="Από:" readonly>
     <br>
     <br>

    </form>

<br><br><br>

   		<!-- Display records from DB-->
   		<div class="table-div " style="position:relative; margin:auto ">

   			<?php if (empty($messages)): ?>
   				<h1 style="color:white">No messages in the database.</h1>
        </div>
          <button class="btn" style="margin:auto"><a href="menu.php" style="color:white;text-decoration: none;">Επιστροφή στη Διαχείριση</a></button>

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


<br><div class="center">
  <br><button class="btn" onclick="history.back()">&laquo;</button>
</div><br>
</body>
<br>
</br>
</div>
</div>
<?php
include 'includes\footerAdmin.php';
 ?>
</html>

<script>

document.getElementById("body").value += '<?php echo $email_body; ?>';

</script>
