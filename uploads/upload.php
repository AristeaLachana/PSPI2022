<?php

//συνδεθείτε στη βάση δεδομένων
$db = mysqli_connect('localhost', 'root', '', 'improveyourhealth');

//error_reporting(0);

function makeSlug(String $string){
    $string = strtolower($string);
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}

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
$errors = array();

//actions όταν πατηθεί το κουμπ΄ί "Υποβολή"
if (isset($_POST['submit'])) {
    $image= $_FILES['file']['name'];

    // λάβετε όλες τις τιμές εισαγωγής από τη φόρμα
    $article_title = mysqli_real_escape_string($db, $_POST['article_title']);
    $article_category = mysqli_real_escape_string($db, $_POST['article_category']);
    $article_body = mysqli_real_escape_string($db, $_POST['article_body']);
    $recipe = mysqli_real_escape_string($db, $_POST['recipe']);
    $description = substr($article_body, 0, 300);

    //name and surname of the author
    $author = $_SESSION['username'];
    $query = "SELECT name, surname FROM users WHERE username = '$author'";
    $results = mysqli_query($db, $query);
    $currentUser = mysqli_fetch_assoc($results);
    $author = $currentUser['name'] . " " . $currentUser['surname'];

    $targetFilePath = $targetDir .basename($image);
    $fileType = mb_strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $slug = makeSlug($image);

    echo $fileType;

    $allowTypes = array('jpg','png','jpeg','gif'); //types of files allowed
      if(in_array($fileType, $allowTypes)){
          // Upload file to server - folder uploads
          move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

          // Insert values into database
          $insert = $db->query("INSERT into posts (title, category, body, image, created_at, published, recipe, description, slug, author)
                                    VALUES ('$article_title', '$article_category', '$article_body', '$targetFilePath', NOW(), '0', '$recipe', '$description', '$slug', '$author')");

          if($insert){
            header('location: addpagesuccess.php'); //successful insertion
          }else{
            array_push($errors, "Υπήρξε σφάλμα. Προσπαθήστε αργότερα."); //insertion failed
          }
      }else{
        array_push($errors, "Δεν επιτρέπεται ο συγκεκριμένος τύπος αρχείου.");
      }
    }


?>
