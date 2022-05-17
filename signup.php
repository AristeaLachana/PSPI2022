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
  <title>Improve Your Health | Εγγραφή</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
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
      <a href="firstPage.php">
          <img alt="Improve Your Health" src="logo.png">
      </a>
  </div>

  <div class="container">
    <img src="img2.jpeg" style="width:80%;border-radius:7px;">
   <div class="signup-container">

       <h2 style="text-align:center">Εγγραφή</h2>
     <table>
      <tr>
          <td>
           <form class="name" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="text" name="username" minlength="5" maxlength="15" placeholder="Username" required>
           </form>
          </td>
          <td>
            <form class="email" action="/sendData" method="post"  style="margin:auto;max-width:300px">
               <input type="email" name="email" placeholder="Email" required>
             </form>
          </td>
       </tr>
       <tr>
          <td>
            <form class="firstname" action="/sendData" method="post" style="margin:auto;max-width:300px">
              <input type="text" name="firstname" minlength="3" maxlength="30" placeholder="First name" required>
            </form>
          </td>
          <td>
           <form class="surname" action="/sendData" method="post" style="margin:auto;max-width:300px">
            <input type="text" name="surname" minlength="3" maxlength="30" placeholder="Surname" required>
           </form>
          </td>
       </tr>
       <tr>
          <th>
           <label for="date">Date birth: </label>
          </th>
          <td>
           <form class="date" action="/sendData" method="post" style="margin:auto;max-width:300px">
            <input type="date" id="date" required>
           </form>
          </td>
       </tr>
       <tr>
         <th>
           <label for="password">Password: </label>
         </th>
         <td>
           <form class="password" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="password" id="password" name="password" minlength="8" maxlength="16"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Πρέπει να περιέχει τουλάχιστον έναν αριθμό και ένα κεφαλαίο και πεζό γράμμα και τουλάχιστον 8 ή περισσότερους χαρακτήρες " required>
           </form>
         </td>
       </tr>
       <tr>
         <th>
           <label for="passwordverification">Password Verification: </label>
         </th>
         <td>
           <form class="passwordverification" action="/sendData" method="post" style="margin:auto;max-width:300px">
             <input type="password" id="passwordverification" name="password" minlength="8" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Πρέπει να περιέχει τουλάχιστον έναν αριθμό και ένα κεφαλαίο και πεζό γράμμα και τουλάχιστον 8 ή περισσότερους χαρακτήρες" required>
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
              <option value="null" selected>  </option>
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
 <script>

function myFunction1() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("passwordverification");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("passwordverification");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
var myInput1 = document.getElementById("password");
var letter1 = document.getElementById("letter1");
var capital1 = document.getElementById("capital1");
var number1 = document.getElementById("number1");
var length1 = document.getElementById("length1");

// When the user clicks on the password field, show the message box
myInput1.onfocus = function() {
  document.getElementById("message1").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput1.onblur = function() {
  document.getElementById("message1").style.display = "none";
}

// When the user starts to type something inside the password field
myInput1.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters1 = /[a-z]/g;
  if(myInput1.value.match(lowerCaseLetters1)) {
    letter1.classList.remove("invalid1");
    letter1.classList.add("valid1");
  } else {
    letter1.classList.remove("valid1");
    letter1.classList.add("invalid1");
  }

  // Validate capital letters
  var upperCaseLetters1 = /[A-Z]/g;
  if(myInput1.value.match(upperCaseLetters1)) {
    capital1.classList.remove("invalid1");
    capital1.classList.add("valid1");
  } else {
    capital1.classList.remove("valid1");
    capital1.classList.add("invalid1");
  }

  // Validate numbers
  var numbers1 = /[0-9]/g;
  if(myInput1.value.match(numbers1)) {
    number1.classList.remove("invalid1");
    number1.classList.add("valid1");
  } else {
    number1.classList.remove("valid1");
    number1.classList.add("invalid1");
  }

  // Validate length
  if(myInput1.value.length >= 8) {
    length1.classList.remove("invalid1");
    length1.classList.add("valid1");
  } else {
    length1.classList.remove("valid1");
    length1.classList.add("invalid1");
  }
}
function Validate() {
       var password = document.getElementById("password").value;
       var confirmPassword = document.getElementById("passwordverification").value;
       if (password != confirmPassword) {
           alert("Passwords do not match.");
           return false;
       }
       return true;
}


</script>




</body>
</html>
