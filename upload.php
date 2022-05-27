<?php

//συνδεθείτε στη βάση δεδομένων
$db = mysqli_connect('localhost', 'root', '', 'improveyourhealth');

//αρχικοποίηση μεταβλητών
$article_title = "";
$article_category = "";
$article_body = "";
$description = "";
$author = "";
$targetDir = "uploads/";
$statusMsg = "";
$slug = "";
$recipe = "";


//actions όταν πατηθεί το κουμπ΄ί "Υποβολή"
if (isset($_POST['submit']) && !empty($_FILES["file"]["image"])) {

    // λάβετε όλες τις τιμές εισαγωγής από τη φόρμα
    $article_title = mysqli_real_escape_string($db, $_POST['article_title']);
    $article_category = mysqli_real_escape_string($db, $_POST['article_category']);
    $article_body = mysqli_real_escape_string($db, $_POST['article_body']);
    $recipe = mysqli_real_escape_string($db, $_POST['recipe']);
    $description = substr($article_body, 0, 300);


    $author = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = $author";
    $results = mysqli_query($db, $query);
    $currentUser = mysqli_fetch_assoc($results);
    $author = $currentUser['firstname'] . " " . $currentUser['surname'];

    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $slug = substr($fileName, 0, -5);

    $allowTypes = array('jpg','png','jpeg','gif');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
          // Insert values into database
          $insert = $db->query("INSERT into posts (title, category, body, image, created_at, published, recipe, description, slug)
                                    VALUES ('$article_title', '$article_category', '$article_body', '$targetFilePath', NOW(), '0', '$recipe', '$description', '$slug')");
          header('location: addpage.php');
      }
  }

?>
