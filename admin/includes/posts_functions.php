<?php
// Post variables
$published = 0;
$title = "";
$slug = "";
$body = "";
$image = "";
$category = "";
$recipe="";
$date1= "";
$author="";
$description="";
$errors = array();
if (isset($_GET['edit_post'])) {
	$post_id = $_GET['edit_post'];
	editPost($post_id);
}
// if user clicks the update post button
if (isset($_POST['update_post'])) {
	updatePost($_POST,$post_id);
}
// if user clicks the Delete post button
if (isset($_GET['delete-post'])) {
	$post_id = $_GET['delete-post'];
	deletePost($post_id);
}
/* - - - - - - - - - -
-  Post functions
- - - - - - - - - - -*/
// get all posts from DB
function getPosts()
{
	global $conn;
	$sql = "SELECT * FROM posts";
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
function makeSlug(String $string){
    $string = strtolower($string);
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}
// if user clicks the Edit post button


/* - - - - - - - - - -
-  Post functions
- - - - - - - - - - -*/

	/* * * * * * * * * * * * * * * * * * * * *
	* - Takes post id as parameter
	* - Fetches the post from database
	* - sets post fields on form for editing
	* * * * * * * * * * * * * * * * * * * * * */
	function editPost($post_id)
	{
		global $conn, $title, $slug, $body, $published,$post_id,$description,$recipe,$category,$date1,$author;
		$sql = "SELECT * FROM posts WHERE id=$post_id LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($result);
		// set form values on the form to be updated
		$title = $post['title'];
		$body = $post['body'];
		$published = $post['published'];
    $slug=$post['slug'];
    $category=$post['category'];
    $recipe=$post['recipe'];
    $date1=$post['created_at'];
    $author=$post['author'];
    $description=$post['description'];
	}

	function updatePost($request_values,$post_id)
	{
    global $conn;
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $recipe = mysqli_real_escape_string($conn, $_POST['recipe']);
    $date1 = mysqli_real_escape_string($conn, $_POST['created_at']);
    $slug = mysqli_real_escape_string($conn, makeSlug($_POST['title']));
    $published= mysqli_real_escape_string($conn, $_POST['published']);

      $query = "UPDATE posts SET title='$title',body='$body', description='$description', recipe='$recipe', created_at='$date1', slug='$slug',
       published='$published'  WHERE id='$post_id'";
       mysqli_query($conn, $query);
      header('location: posts.php');
      exit(0);

}
	// delete blog post
	function deletePost($post_id)
	{
		global $conn;
		$sql = "DELETE FROM posts WHERE id=$post_id";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['message'] = "Post successfully deleted";
			header("location: posts.php");
			exit(0);
		}
	}
?>
