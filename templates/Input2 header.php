<?php 
		//connect to database
	include('config/db_connect.php');
	//write query for all classes
	$sql = 'SELECT  SubjectID, Subject.name sectionName FROM subject, section WHERE ';	
	//make query & get result
	$result = mysqli_query($conn, $sql);	
	//fetch resulting rows as array
	$sections = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//free memory
	mysqli_free_result($result);
	//close connection
	//mysqli_close($conn);
	//check if deleted
	if(isset($_POST['delete'])) {
		$id_to_delete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);
		//make sql
		$sql = "DELETE FROM classes WHERE classID = $id_to_delete";
		if(mysqli_query($conn, $sql)) {
			//success
		} else {
			//fail
			echo 'query error: ' . mysqli_error($conn);
		}
	}
 ?>


<!DOCTYPE html>
<head>
	<title>INPUT SCREEN 2</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">

	<style type="text/css">
		.brand {
			background: #29b6f6 !important;
		}

		.brand-text {
			color: #29b6f6 !important;
		}
	</style>
</head>

<body class="blue">
	<!--BACKGROUND-->
	<nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
		<a class="navbar-brand" href="#" style="color:#B3BDFF;">
			<img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			<strong>Class List</strong>
		</a>
		<form action=input1.html method=POST>
			<button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
	</form>
		</nav>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-auto">
			<nav class="nav flex-sm-column">
				<div class="container" style="text-align:left">
					<p style="color:#595E80;">Add A Class</p>
					<form action=add_class.php method=POST>
					<button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add</button>
					</form>
				</div>
				<div class="container" style="text-align:left">
				<p style="color:#595E80;">Remove A Class</p>
				<form action=remove_class.php method=POST>
					<label>Class:&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<select style="width:150px" name=className class="browser-default">	
					<option value="" disabled selected>Choose Class</option>
					
					<!--	<option name="className" value=Science>Science</option> 
						<option name="className" value=Math>Mathematics</option>
						<option name="className" value=PE>Physical Education</option>
						<option name="className" value=English>English</option> 
					-->
					
					</select>
					<br>
					<label>Section: </label>
					<select style="width:150px" name=secName class="browser-default">
						<option value="secName" disabled selected>Choose Section</option>

					<!-- Will add things here with regards to database
						<option value=A name="secName">A</option>
						<option value=B name="secName">B</option>
						<option value=C name="secName">C</option>
						<option value=D name="secName">D</option>

					-->	
					</select>
					<br />
						<!-- <input type=text placeholder="Class" name= className> -->
						<button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Remove Class</button>
					</form>
				</div>

			</nav>
	</div>
<div id="table" class="col-sm" style="align:left;">
  <table class="table table-striped" style="text-align:center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Class</th>
      <th scope="col">Section</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

	<!--DISPLAY TABLE IN MIDDLE FOR CLASS INFO
	goes through the sections table in database and returns
	the info for each section
  	 -->
	<?php foreach($sections as $section): ?>
		<tr>
			<th scope="row"><?php echo $section['classID']; ?></th>
	        <td><?php echo $section['subject']; ?></td>
			<td><?php echo $section['section']; ?></td>
	        <td>
			  <form action=edit_class.php method=POST>
			  <button class="btn btn-primary  my-2 my-sm-0" style="border-color:#5262CC; color:white; background:#5262CC;" type="submit">Edit Class</button></form></td>    
		</tr>
	<?php endforeach; ?>
	<!--END OF MIDDLE TABLE-->

  </tbody>
</table>
	</div>
				
		</div>
	</div>
</body>