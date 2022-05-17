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
  <div class="signup-img">
   <div class="signup-container">

       <h2 color:#6495ED;>Εγγραφή</h2>
     <table>
      <tr>
          <td>
           <form class="name" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="text" name="username" minlength="5" maxlength="15" placeholder="Username">
           </form>
          </td>
          <td>
            <form class="email" action="/sendData" method="post"  style="margin:auto;max-width:300px">
               <input type="email" name="email" placeholder="Email">
             </form>
          </td>
       </tr>
       <tr>
          <td>
            <form class="firstname" action="/sendData" method="post" style="margin:auto;max-width:300px">
              <input type="text" name="firstname" minlength="3" maxlength="30" placeholder="First name">
            </form>
          </td>
          <td>
           <form class="surname" action="/sendData" method="post" style="margin:auto;max-width:300px">
            <input type="text" name="surname" minlength="3" maxlength="30" placeholder="Surname">
           </form>
          </td>
       </tr>
       <tr>
          <th>
           <label for="date">Date birth: </label>
          </th>
          <td>
           <form class="date" action="/sendData" method="post" style="margin:auto;max-width:300px">
            <input type="date" id="date">
           </form>
          </td>
       </tr>
       <tr>
         <th>
           <label for="password">Password: </label>
         </th>
         <td>
           <form class="password" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="password" id="password" name="password" minlength="8" maxlength="16">
           </form>
         </td>
       </tr>
       <tr>
         <th>
           <label for="passwordverification">Password Verification: </label>
         </th>
         <td>
           <form class="passwordverification" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="password" id="passwordverification" name="password" minlength="8" maxlength="16">
           </form>
         </td>
       </tr>
       <tr>
         <th>Expert</th>
         <th>
           <label for="rdchoiceyes">Yes</label> <input type='radio' id="rdchoiceyes" name="choice" value="yes">
           <label for="rdchoiceno"> No</label> <input type='radio' id="rdchoiceno" name="choice" value="no">
         </th>
       </tr>
       <br>
       <br>
       <tr>
         <th><label for="categories">Expert Categories</label></th>
         <td>
          <form class="expertcategories" action="/sendData" method="post" style="margin:auto;max-width:300px">
            <select id="categories" name="expertcategories">
              <option value="nutritionist" selected>ΔΙΑΤΡΟΦΟΛΟΓΙΑ</option>
              <option value="fitness specialist" >ΓΥΜΝΑΣΤΙΚΗ</option>
              <option value="mental health specialist" >ΨΥΧΙΚΗ ΥΓΕΙΑ</option>
            </select>
          </form>

         </td>
       </tr>
       <tr>
          <th>
           <label  for="experttitle">Expert Title</label>
          </th>
          <td>
           <form class="experttitle"action="/sendData" method="post" style="margin:auto;max-width:300px">
            <input type="text"id="experttitle" name="expert categories" minlength="5" maxlength="40">
           </form
          </td>
       </tr>
       <tr>
         <td></td><th>Όροι συμμετοχής:<input type='checkbox'> </th>
       </tr>
       <tr>
        <th>
          <div class="submit"></div>
          <a> <button class="btn">Καθαρισμός</button> </a>
        </th>
        <th>
          <div class="submit"></div>
          <a href="mainPage.php"> <button class="btn">Εγγραφή</button> </a>
        </th>
       </tr>
    </table>
  </div>

</div>
<br>
<br>


<?php
include 'includes\footer2.php';
 ?>
</body>
</html>
