<?php include('mustLogin.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pspi.css">
    <?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
?>

    <title><?php echo $post['title']; ?></title>
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Link to your stylesheet -->
    <link rel="stylesheet" href="./styles.css">
    <!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        img{
            border-radius:7px;
        }
        .readmore_text {
            text-align: left;
            padding: 4px;
            margin: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
  <?php
  include 'includes\header.php';
   ?>
<div class="content" style="text-align:center">
    <br>
    <div class="center">
            <h2><strong><?php echo $post['title']; ?></strong></h2>


    </div>
    <div class="center">

        <br>
        <img alt="image_readmore" src="<?php echo $post['image']; ?>" width="30%" height="50%">

        <p class="readmore">
        <?php echo html_entity_decode($post['body']); ?> </p>
        <br>
        <br>
        Από: <strong><?php echo $post['author']; ?></strong> -  "<?php echo $post['created_at'];?>"
        <br><br>
        <button class="btn"  onclick="history.back()">&laquo;</button>

    </div>
    <br>
</div>
</body>
<?php
include 'includes\footer.php';
 ?>
</html>
