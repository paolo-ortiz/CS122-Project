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
						<option name="className" value=Science>Science</option>
						<option name="className" value=Math>Mathematics</option>
						<option name="className" value=PE>Physical Education</option>
						<option name="className" value=English>English</option>
					</select>
					<br>
					<label>Section: </label>
					<select style="width:150px" name=secName class="browser-default">
						<option value="secName" disabled selected>Choose Section</option>
						<option value=A name="secName">A</option>
						<option value=B name="secName">B</option>
						<option value=C name="secName">C</option>
						<option value=D name="secName">D</option>
					</select>
					<br />
						<!-- <input type=text placeholder="Class" name= className> -->
						<button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Remove Class</button>
					</form>
				</div>

			</nav>
				<div id="table" class="" style="align:left">
					<table class="striped centered black-text">
						<thead>
							<tr>
								<th>Class</th>
								<th>Section</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Class_Variable</td>
								<td>Section_Variable</td>
								<td>
									<form action=edit_class.php method=POST>
										<!-- <input type=text placeholder="Class" name= className> -->
										<button class="btn brand z-depth-0" type="submit" name="action">Edit Class
										</button>
								</td>
							</tr>
							<tr>
								<td>Class_Variable</td>
								<td>Section_Variable</td>
								<td>
									<form action=edit_class.php method=POST>
										<!-- <input type=text placeholder="Class" name= className> -->
										<button class="btn brand z-depth-0" type="submit" name="action">Edit Class
										</button>
								</td>
							</tr>
							<tr>
								<td>Class_Variable</td>
								<td>Section_Variable</td>
								<td>
									<form action=edit_class.php method=POST>
										<!-- <input type=text placeholder="Class" name= className> -->
										<button class="btn brand z-depth-0" type="submit" name="action">Edit Class
										</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</body>