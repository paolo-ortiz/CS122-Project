<?php 

	//connect to database
	include('config/db_connect.php');

	$errors = array('subject'=>'', 'section'=>'');

	if(isset($_POST['submit'])) {

		$requirementID = htmlspecialchars($_POST['requirementID']);
		$requirementType = htmlspecialchars($_POST['requirementType']);
		$requirementHPS = htmlspecialchars($_POST['requirementHPS']);
		$requirementPassing = htmlspecialchars($_POST['requirementPassing']);
		$requirementScore = htmlspecialchars($_POST['requirementScore']);

		//save data
		$requirementID = mysqli_real_escape_string($conn, $_POST['requirementID']);
		$requirementType = mysqli_real_escape_string($conn, $_POST['requirementType']);
		$requirementHPS = mysqli_real_escape_string($conn, $_POST['requirementHPS']);
		$requirementPassing = mysqli_real_escape_string($conn, $_POST['requirementPassing']);
		$requirementScore = mysqli_real_escape_string($conn, $_POST['requirementScore']);

		//create sql
		$sql = "INSERT INTO grades(requirementID,requirementType,requirementHPS,requirementPassing,requirementScore) VALUES ('$requirementID', '$requirementType', '$requirementHPS', '$requirementPassing', '$requirementScore')";

		//save to db and check
		if(mysqli_query($conn, $sql)) {
				//success
				//redirect
			header('Location: view_grades.php');
			} else {
				echo 'query error: ' . mysqli_error($conn);
			}		
	}


 ?>

<!DOCTYPE html>
<head>
	<title>INPUT SCREEN 7</title>
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
			<strong>Add A Requirement</strong>
		</a>
		<form action=view_grades.php method=POST>
			<button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
	</form>
		</nav>
	<br>
        <div class="container" style="text-align:center">
				
				<!-- FORM TO SEND DATA -->
				<form action="add_req.php" method="POST">
	                <label style="color:#595E80;">Requirement Type:</label>
						<select style="width:200px" name="requirementType" class="browser-default">
							<option value="" disabled selected>Choose Type</option>
							<option name="requirementType" value="Homework">Homework</option>
							<option name="requirementType" value="Quiz">Exam</option>
							<option name="requirementType" value="Exam">Quiz</option>
						</select>
	       			 </div>
	        		 <br>
	       
	       			 <div class="container" style="text-align:center;color:#595E80;">

	       			 	<label>Requirement #:</label>
		                <input type="number" placeholder='e.g. 1' name="requirementHPS" required>
		                <br>
		                
		                <label>Highest Possible Score:</label>
		                <input type="number" placeholder='e.g. 30' name="requirementHPS" required>
		                <br>

		                <label>Passing Score: </label>
		                <input type=number placeholder='e.g. 15' name="requirementPassing" required>
		                <br>

		                <label>Score:</label>
		                <input type="number" placeholder='e.g. 20' name="requirementScore" required>
		                <br>

		                <input type="submit" name="submit" value="Submit" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">

	        		</div>
	        		</ul>
   				 </form>
    <!-- END FORM TO SEND DATA -->
    </nav>
</body>