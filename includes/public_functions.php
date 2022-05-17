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

// more functions to come here ...
?>
