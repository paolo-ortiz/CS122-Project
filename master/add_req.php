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
				
				<form action=view_grades.php method=POST>
                <label style="color:#595E80;">Class</label>
					<select style="width:200px" name=req_type class="browser-default">
						<option value="" disabled selected>Choose Type</option>
						<option name="req_type" value=Homework>Homework</option>
						<option name="req_type" value=Quiz>Exam</option>
						<option name="req_type" value=Exam>Quiz</option>
					</select>
        </div>
        <br>
        <div class="container" style="text-align:center;color:#595E80;">
                <label for=hpscore>Highest Possible Score:</label>
                <input type=number placeholder='Highest Possible Score' name=hpscore required>
                <br>
                <label for=teacher_pw>Passing Score: </label>
                <input type=number placeholder='Passing' name=passing_score required>
                <br>
                <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Submit</button>

        </div>
        </ul>
    </nav>
</body>