<?php

	$className = $subject = ""; //initialize values
	$errors = array("className"=>"", "subject"=>""); //create array for errors

	//for sending the input to server
	if (isset($_POST["submit"])) {
		
		//CHECK IF FIELDS ARE EMPTY
		//check teacher name
		if (empty($_POST["className"])) {
			$errors["className"] = "Class Name is required <br />";
		} else {
			$className = $_POST["className"];
		}
		//check class name
		if (empty($_POST["subject"])) {
			$errors["subject"] = "Subject is required <br />";
		} else {
			$subject = $_POST["subject"];
		}

		//if there are no errors, redirect to homepage
		//if there are errors in $errors array, do nothing
		if (array_filter($errors)) {
			//do nothing
		} else {
			header('Location: index.php'); //redirect to homepage
		}

	} //END OF POST

	

?>

<!DOCTYPE html>
<html>

	<?php include("templates/Input2 header.php") ?>

	<section class="container grey-text">
		<h4 class="center">Add a Class</h4>

		<!--Input Info-->
		<form class="white" action="Input2addClass.php" method="POST">

			<!--CLASS NAME FIELD-->
			<label>Class Name</label>
			<input type="text" name="className" value="<?php echo htmlspecialchars($className) ?>">
			<div class="red-text"><?php echo $errors["className"]; ?></div>

			<!--SUBJECT FIELD-->
			<label>Subject</label>
			<input type="text" name="subject" value="<?php echo htmlspecialchars($subject) ?>">
			<div class="red-text"><?php echo $errors["subject"]; ?></div>

			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand" z-depth-0>
			</div>
		</form>

	</section>

	<?php include("templates/Input2 footer.php") ?>

</body>
</html>