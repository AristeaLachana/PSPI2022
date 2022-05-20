<?php  include('config.php'); ?>
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
    h3 {color:white;}
    tr {color:white;}
    th {color:white;}
  </style>
</head>

<body>

  <div class="logo">
      <a href="index.php">
          <img alt="Improve Your Health" src="logo.png">
      </a>
  </div>

  <div class="signup-img">
   <div class="signup-container">

       <h2 style="text-align:center">Εγγραφή</h2>
     <table>
      <tr>
          <td>
           <form  action="signup.php" method="post" style="margin:auto;max-width:300px">
<?php include('admin\errors.php'); ?>
             <input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">

          </td>
          <td>


              <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">

          </td>
       </tr>
       <tr>
          <td>


              <input type="text" name="firstname" minlength="3" maxlength="30" placeholder="First name"  value="<?php echo $firstname; ?>">

          </td>
          <td>


             <input type="text" name="surname" minlength="3" maxlength="30" placeholder="Surname" value="<?php echo $surname; ?>">


          </td>
       </tr>
       <tr>
          <th>
           <label for="date">Date birth: </label>
          </th>
          <td>


            <input  class=date type="date" id="date" name=date1 value="<?php echo $date1; ?>">

          </td>
       </tr>
       <tr>
         <th>
           <label for="password">Password: </label>
         </th>
         <td>


             <input type="password" id=password name="password" placeholder="Password">
         </td>
       </tr>
       <tr>
         <th>
           <label for="passwordverification">Password Verification: </label>
         </th>
         <td>

             <input type="password" id="passwordverification" name="passwordverification"  >

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

            <select id="categories" name="expertcategories">
              <option value="null" selected>  </option>
              <option value="nutritionist">ΔΙΑΤΡΟΦΟΛΟΓΙΑ</option>
              <option value="fitness specialist" >ΓΥΜΝΑΣΤΙΚΗ</option>
              <option value="mental health specialist" >ΨΥΧΙΚΗ ΥΓΕΙΑ</option>
            </select>


         </td>
       </tr>
       <tr>
          <th>
           <label  for="experttitle">Expert Title</label>
          </th>
          <td>


            <input type="text"id="experttitle" name="expert categories" minlength="5" maxlength="40">

          </td>
       </tr>
       <tr>
         <td></td><th>Όροι συμμετοχής:<input type='checkbox'> </th>
       </tr>
       <tr>
        <th>


           <button type="submit" class="btn" name="signup">Εγγραφή</button>
        </th>
       </tr>
         </form>
    </table>
  </div>

  <div id="message">
   <h3>Password must contain the following:</h3>
   <p id="letter" class="invalid">Ένα <b>μικρό λατινικό</b> γράμμα</p>
   <p id="capital" class="invalid">Ένα <b>κεφαλαίο λατινικό</b> γράμμα</p>
   <p id="number" class="invalid">Έναν <b>αριθμό</b></p>
   <p id="length" class="invalid">Τουλάχιστον <b>8 χαρακτήρες</b></p>
   </div>
   <div id="message1">
   <h3>Password must contain the following:</h3>
   <p id="letter1" class="invalid1">Ένα <b>μικρό λατινικό</b> γράμμα</p>
   <p id="capital1" class="invalid1">Ένα <b>κεφαλαίο λατινικό</b> γράμμα</p>
   <p id="number1" class="invalid1">Έναν <b>αριθμό</b></p>
   <p id="length1" class="invalid1">Τουλάχιστον <b>8 χαρακτήρες</b></p>
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
