<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../pspi.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Link to your stylesheet -->
   <link rel="stylesheet" href="./styles.css">
   <!-- -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php require_once('../config.php') ?>
<?php require_once('includes/posts_functions.php') ?>
    <title>Admin | Αναρτήσεις</title>
    <link rel="icon" type="image/x-icon" href="uploads\favicon.png">

    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right:  auto;
      }
      body {background-color:white;}
      h1 {color:#125688;}
      h2 {color:black;}
      h5 {color:#ED6964;}
      p {color:black;}
    </style>
  </head>

    <?php
      include 'includes\headerAdmin.php';
     ?>
    <br>

    <div class="center">
            <h2><strong>ΕΓΚΡΙΣΗ - ΑΝΑΡΤΗΣΕΙΣ</strong></h2>
    </div>
    <body>

      <?php $posts = getPosts(); ?>
  <br>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
        <table class="table-div">
						<thead>
						<th>ID</th>
						<th>Title</th>
						<th>Author</th>
						<th>Category</th>
						 <th><small>Publish</small></th>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
  <?php foreach ($posts as $post): ?>
    <tr>

    							<td><?php echo $post['author']; ?></td>
    							<td>
    								<a 	target="_blank"
    								href="<?php echo BASE_URL . 'readmore.php?post-slug=' . $post['slug'] ?>">
    									<?php echo $post['title']; ?>
    								</a>
    							</td>
    							<td><?php echo $post['category']; ?></td>
    								<td>
    								<?php if ($post['published'] == 1): ?>
    									<a class="fa fa-check btn unpublish"
    										href="posts.php?unpublish=<?php echo $post['id'] ?>">
    									</a>
    								<?php else: ?>
    									<a class="fa fa-times btn publish"
    										href="posts.php?publish=<?php echo $post['id'] ?>">
    									</a>
    								</td>
    							<?php endif ?>
  <?php endforeach ?>
<?php endif ?>
  <div class="center">
    <br><button class="btn"  onclick="history.back()">&laquo;</button>
  </div><br>
     </body>

          <?php
          include 'includes\footerAdmin.php';
           ?>

    <br>
</html>
