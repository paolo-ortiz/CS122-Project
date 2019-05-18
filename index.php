<?php

	//connect to database
	include("config/db_connect.php");

	//write query for all classes
	$sql = "SELECT sectionName, subject, sectionID FROM section";
	//make query and get result
	$result = mysqli_query($conn, $sql);
	//fetch resulting rows as array
	$sections = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//free result from memory
	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

	<?php include("templates/Input2 header.php") ?>

	<!--OUTPUT DATA TO BROWSER-->
	<h4 class="center grey-text">Sections</h4>
	<div class="container">
		<div class="row">
			<?php foreach($sections as $section): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($section["sectionName"]); ?></h6>
							<div><?php htmlspecialchars($section["subject"]); ?>
							</div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="#">view class</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>	
		</div>
	</div>

	<?php include("templates/Input2 footer.php") ?>

</body>
</html>