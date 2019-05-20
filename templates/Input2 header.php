<head>
	<title>INPUT SCREEN 2</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
	<nav class="white z-depth-0">
		<ul style="float:right">
			<li>
				<form action=add_class.php method=POST>
					<button class="btn brand z-depth-0" type="submit" name="action">Add Class
					</button>
				</form>
			</li>
			<li>
				<form action=remove_class.php method=POST>
					<!-- <input type=text placeholder="Class" name= className> -->
					<button class="btn brand z-depth-0" type="submit" name="action">Remove Class
					</button>
			</li>
			<li><a href="contact.asp">Contact</a></li>
			<li><a href="about.asp">About</a></li>
		</ul>
		<div class="container">
			<a href="#" class="brand-logo brand-text">Class List</a>
		</div>
		<div id="table" class="container" style="align:left">
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
		<ul id="nav-mobile" class="right hide-on-small-and-down">
			<div class="container" style="text-align:left">
				<label>Class</label>
				<select name=className class="browser-default">
					<option value="" disabled selected>Choose your option</option>
					<option name="className" value=Science>Science</option>
					<option name="className" value=Math>Mathematics</option>
					<option name="className" value=PE>Physical Education</option>
					<option name="className" value=English>English</option>
				</select>
				<label>Section</label>
				<select name=secName class="browser-default">
					<option value="secName" disabled selected>Choose your option</option>
					<option value=A name="secName">A</option>
					<option value=B name="secName">B</option>
					<option value=C name="secName">C</option>
					<option value=D name="secName">D</option>
				</select>
			</div>
			</form>
		</ul>
	</nav>
</body>