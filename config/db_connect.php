<?php 

	//connect to database
	$conn = mysqli_connect('localhost', 'paolo', 'password', 'classList'); 
	
	//check connection
	if (!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}

 ?>