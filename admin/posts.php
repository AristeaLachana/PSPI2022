<!DOCTYPE html>
<?php include('../mustLogin.php')?>
<?php include('includes/onlyAdmin.php')?>
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
    </form>
    <div class="container center">
      <form action="" method="post" class="containerCrPosts" style="text-align:center; position:relative;   margin: auto;">

        <br><br>
        <input class="contact-style-textbox" type="text" style="margin:auto;width:300px"  name="title" value="<?php echo $title; ?>" placeholder="Τίτλος" >

        <input class="contact-style-textbox" type="text" style="margin:auto;width:300px"  name="author" value="<?php echo $author; ?>" placeholder="Συγγραφέας:" >
        <br>
        <br>
        <label for="postBody"> </label>
        <br><p style="color:white">Άρθρο: </p><br>
        <textarea class="contact-style-textbox" id="body" style="resize: both; margin:auto;width:500px;" name="body" rows="10" cols="20" placeholder="Κείμενο"><?php echo $body?></textarea>
        <br><p style="color:white">Περιγραφή: </p><br>
        <textarea class="contact-style-textbox" id="description" style="resize: both; margin:auto;width:500px" name="description" rows="10" cols="20" placeholder="Περιγραφή"><?php echo $description?></textarea>
        <br>
        <br>

        <label for="date">Δημιουργήθηκε: </label>
       </th>
       <td>

        <div class="date" style="margin:auto;max-width:300px">
        <input  class="date" type="date" id="date" name="created_at" value="<?php echo $date1; ?>" required>
         <input class="contact-style-textbox" type="text" style="margin:auto;"  name="category" value="<?php echo $category; ?>" placeholder="Κατηγορία" >

        <br>
        <br>
        <!-- display checkbox according to whether is recipe or not -->
          <?php if ($recipe==1): ?>
          <label for="recipe">
            Recipe
            <input type="checkbox" value="<?php echo $recipe; ?>" name="recipe" checked="checked">&nbsp;
          </label>
        <?php endif ?>
        <br>
        <select id="article-category" name="published" style="background-color:#f1f1f1" required>
          <option value="null" selected>Συνταγή</option>
          <option value="1">Ναι</option>
          <option value="0">Όχι</option>
        </select>
        <!-- display checkbox according to whether post has been published or not -->
        <?php if ($published == 1): ?>
          <label for="publish">
            Publish
            <input type="checkbox" value="1" name="published" checked="checked">&nbsp;
          </label>
        <?php endif ?>
        <select id="article-category" name="published" style="background-color:#f1f1f1" required>
          <option value="null" selected>Κατάσταση Άρθρου</option>
          <option value="1">Δημόσιο</option>
          <option value="0">Ιδιωτικό</option>
        </select>
        <button type="submit" class="btn" name="update_post">UPDATE</button>

       </form>
  </div>
  <!-- // Middle form - to edit -->
  <!-- Get all  posts from DB -->
      <?php $posts = getPosts(); ?>
  <br>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
        <table style="margin:auto;">
						<thead>
						<th>ID</th>
						<th>Author</th>
            <th>Title</th>
            <th>Created at</th>
						<th>Category</th>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as  $post): ?>
						<tr>
							<td><?php echo $post['id']; ?></td>
							<td><?php echo $post['author']; ?></td>
							<td><?php echo $post['title']; ?></td>
              <td><?php echo $post['created_at']; ?></td>
							<td><?php echo $post['category']; ?></td>
								<td>


								<a class="fa fa-pencil btn edit"
									href="posts.php?edit_post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete"
									href="posts.php?delete-post=<?php echo $post['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
  <div class="center">
    <br><button class="btn"  onclick="history.back()">&laquo;</button>
  </div><br>
     </body>

          <?php
          include 'includes\footerAdmin.php';
           ?>

    <br>

</html>

<script>
document.getElementById(`body`).innerHTML='<?php echo $body?>';


</script>
