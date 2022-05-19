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
    <title>Improve Your Health | Διατροφή</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">

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
            <h2><strong>ΔΙΑΤΡΟΦΗ</strong></h2>
  </div><br>

  <div class="pagination" style="margin-left:10%;align-items:center;">
    <a href="allArticlesNutrition" style="text-decoration:underline; text-decoration-color:#6495ED; color:#6495ED">Άρθρα</a>
    <a href="AllRecipesNutrition.php">Συνταγές</a>
  </div>

  <body>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php $posts = getPublishedPostsNutrition(); ?>
<br>
<?php foreach ($posts as $post): ?>
    <div class="containerBlog">
      <br>

      <p>
        <a class="containerBlog__img_link" href="readmore.php?post-slug=<?php echo $post['slug'];?>">
          <img class="containerBlog__img" src="<?php echo $post['image']; ?>"/>
        </a>
<a href="readmore.php?post-slug=<?php echo $post['slug']; ?>"><strong><?php echo $post['title'] ?></strong></a><br><br><?php echo $post['description']?><a href="readmore.php?post-slug=<?php echo $post['slug']; ?>" style="color:grey;">...Διαβάστε περισσότερα</a>
</div>
<?php endforeach ?>

        <?php
        include 'includes\footer.php';
         ?>

    <br>
  </div>
</html>
