<!DOCTYPE html>
<html>
<head>
	<title>Newfal - LauzHack</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="index_top_container">
	<h4>LauzHack [ Newfal ]</h4>
</div><!--index_top_container-->


<div id="all_posts_container">
	
	<!-- We retrieve all the posts from the database -->
	<?php
		include 'main.php';
		//Getting all the posts from the database
		$all_posts = mysqli_query($con, "SELECT * FROM lauzhack");

		//we check if there is something in the database
		if(mysqli_num_rows($all_posts)>0){

			while($row = $all_posts->fetch_assoc()){

				$wp = array($row['wall_post_content']);

				//we print the posts from the database
				echo "<div class='container_post_show'>".$wp[0]."</div>";

			}

		}else{

			echo "<h5 class='container_post_show'>You have nothing in the database<h5>";
		}
	?>
</div><!--all_posts_container-->

<!-- This DIV contains the "form" we use to post the "status" -->

<div id="wall_container">
	<form method="POST" action="send_post.php">
		<textarea id= "wall_content_input" name="wall_post" spellcheck="false"></textarea>
		<button type="submit" name="submit_button_name" id="submit_button">Submit</button>
	</form>
</div><!--wall_container-->

</body>
</html>