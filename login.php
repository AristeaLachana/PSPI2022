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
  <title>Εγγραφή</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <style>
       body {background-color:white;}
       h2 {color:black;}
       tr {color:#white;}
       th {color:black;}
  </style>
</head>

<body>

  <div class="logo">
      <a href="firstPage.php">
          <img alt="Improve Your Health" src="logo.png">
      </a>
  </div>
  <br>
  <br>
  <br>
  <div class="login-img">
   <div class="login-container">


     <table>
      <tr>

        <td colspan="6">
          <h2 color:#6495ED;>Σύνδεση</h2>
        </td>

      </tr>
      <tr>

          <td colspan="6">
           <form class="name" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="text" name="username" minlength="5" maxlength="15" placeholder="Username">
           </form>
          </td>

       </tr>
       <tr>

           <td colspan="6">
             <form class="password" action="/sendData" method="post" style="margin:auto;max-width:300px">
               <input type="password" id="password" name="password" minlength="8" maxlength="16" placeholder="Password">
             </form>

           </td>
       </tr>
       <tr>

        <th>

          <div class="submit"></div>
          <a href="mainPage.php"> <button class="btn">Σύνδεση</button> </a>

        </th>


       </tr>


    </table>


  </div>

</div>
<br>
<br>
<br>
<br>



<<?php
include 'footer2.php'
 ?>

</body>
</html>
