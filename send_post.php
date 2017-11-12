<?php
	
	//including the connection to the DB
	include 'main.php';

	if(isset($_POST['submit_button_name']) && !empty($_POST['wall_post'])){

		//if the form sis not empty

		$wall_post_content = mysqli_real_escape_string($con, $_POST['wall_post']);

		mysqli_query($con, "INSERT INTO lauzhack(wall_post_content) values('$wall_post_content')" );

		header("location:index.php");

	}else{

		//if the form is empty
		//Do nothing
	}
?>