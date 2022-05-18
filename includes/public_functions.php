<?php
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPostsPsychology() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND categorie='psychology')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}
function getPublishedPostsNutrition() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND categorie='nutrition')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}
function getPublishedPostsExercise() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE (published=1 AND categorie='exercise')";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=1";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	return $post;
}
// more functions to come here ...
?>
