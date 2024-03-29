<?php include ('config.php')?>
  <?php include('admin\server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="pspi.css">
  <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Link to your stylesheet -->
  <link rel="stylesheet" href="./styles.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php require_once('config.php') ?>
  <title>Improve Your Health | Σύνδεση</title>
  <link rel="icon" type="image/x-icon" href="uploads\favicon.png">
  <style>
      img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
       body {background-color:white;}
       h2 {color:white;}
       tr {color:white;}
       th {color:white;}
  </style>
</head>

<body>

  <div class="logo">
      <a href="index.php">
          <img alt="Improve Your Health" src="uploads/logo.png">
      </a>
  </div>


  <div class="containerErrors" style="float:left"> <?php include('admin\errors.php'); ?> </div>

  <div class="login-img">
   <div class="login-container">
     <table>
      <tr>

        <td colspan="6">
          <h2 style="text-align:center;">Σύνδεση</h2>
        </td>

      </tr>
      <tr>

          <td colspan="6">
           <form  action="login.php" method="post" style="margin:auto;max-width:300px">
            <div class="name" style="margin:auto;max-width:300px">
             <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
           </div>
          </td>

       </tr>
       <tr>

           <td colspan="6">
               <div class="password" style="margin:auto;max-width:300px">
                <input type="password" id="password" name="password" maxlength="16" placeholder="Password" required>
               </div>

           </td>
       </tr>
       <tr>
        <th>
            <button type="submit" class="btn" name="login">Login</button>
        </th>
       </tr>


    </table>


  </div>
</div>
<br>
<br>
<br>
<br>



<?php
include 'includes\footer2.php';
 ?>


</body>
</html>
