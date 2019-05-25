<?php 

	//connect to database
	$conn = mysqli_connect('localhost','CS122','blank' ,'cs122_proj');
	//check connection
	if (!$conn) {
		echo 'Connection Error: ' . mysqli_connect_error();
	}
	
 ?>