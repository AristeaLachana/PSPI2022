<?php include('mustLogin.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="pspi.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Link to your stylesheet -->
   <link rel="stylesheet" href="./styles.css">
   <!-- -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php require_once('config.php') ?>
    <title>Improve Your Health | Search</title>
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">

    <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    </style>
    <?php
      include 'includes\header.php';
     ?>
    <br>
    <div class="center">
                <h2><strong>ΑΠΟΤΕΛΕΣΜΑΤΑ</strong></h2>
      </div><br>

        <?php
          if(isset($_GET['submit-search'])) {
             $search = mysqli_real_escape_string($conn,$_GET['search']);
             $sql = "SELECT * FROM posts WHERE body LIKE '%$search%'OR created_at LIKE '%$search%'OR slug LIKE '%$search%'OR title LIKE '%$search%'OR categorie LIKE '%$search%'OR description LIKE '%$search%' ";
             $result = mysqli_query($conn,$sql);

             $queryResult = mysqli_num_rows($result);
             if($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                  echo' <div class="containerBlog">
                          <br>

                          <p>
                            <a class="containerBlog__img_link" href="readmore.php?post-slug='.$row['slug'].'">
                              <img class="containerBlog__img" src="'.$row['image'].'"/>
                            </a>
                    <a href="readmore.php?post-slug='.$row['slug'].'"><strong>'.$row['title'].'</strong></a><br><br>'.$row['description'].'<a href="readmore.php?post-slug='.$row['slug'].'" style="color:grey;">...Διαβάστε περισσότερα</a>
                    </div>';
                }
             }else{
               echo "<h4 align='center'>Δεν υπάρχουν αποτελέσματα αναζήτησης</h4>";
             }
          }
         ?>


    <?php
    include 'includes\footer.php';
     ?>

<br>
</div>
</html>
