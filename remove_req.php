<?php 
include('config/db_connect.php');

    //close connection
    //mysqli_close($conn);

  

 ?>

<!DOCTYPE html>
<head>
	<title>INPUT SCREEN 8</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">

	<style type="text/css">
		.brand {
			background: #29b6f6 !important;
		}

		.brand-text {
			color: #29b6f6 !important;
        }
        label {
        width:200px;
    }
	</style>
</head>

<nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
		<a class="navbar-brand" href="#" style="color:#B3BDFF;">
			<strong>Remove A Requirement</strong>
		</a>
		<form action=view_grades.php method=POST>
			<button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
	</form>
		</nav>
	<br>
        
				
				<!-- FORM TO SEND DATA -->
				<form action="view_grades.php" method="POST">
	      
						
	       			
	        		 <br>
	       
	       			 <div class="container" style="text-align:center;color:#595E80;">

	       			 	<label>Requirement #:</label>
		                <input type="number" placeholder='e.g. 1' name="id_to_delete" required>
		                <br>
		                
		                


		  

		                <input type="submit" name="delete" value="Delete" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">

	        		</div>
	        		</ul>
   				 </form>
    <!-- END FORM TO SEND DATA -->
    </nav>
</body>