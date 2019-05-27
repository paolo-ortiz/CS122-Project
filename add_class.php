<?php 

	//connect to database
	include('config/db_connect.php');

	$subject = $section = '';
	$errors = array('subject'=>'', 'section'=>'');

	if(isset($_POST['submit'])) {

		//check subject for errors
		if(empty($_POST['subject'])) {
			$errors['subject'] = 'Subject is required';
		} else {
			$subject = htmlspecialchars($_POST['subject']);
		}

		//check section for errors
		if(empty($_POST['section'])) {
			$errors['section'] = 'Section is required';
		} else {
			$section = htmlspecialchars($_POST['section']);
		}

		//check if there are errors
		if(array_filter($errors)) {
			//do nothing
		} else {
			//save data
			$subject = mysqli_real_escape_string($conn, $_POST['subject']);
			$section = mysqli_real_escape_string($conn, $_POST['section']);

			//create sql
			$sql = "INSERT INTO classes(subject,section) VALUES('$subject', '$section')";

			//save to db and check
			if(mysqli_query($conn, $sql)) {
				//success
				//redirect
			header('Location: index.php');
			} else {
				echo 'query error: ' . mysqli_error($conn);
			}			
		}
	}


 ?>

<!DOCTYPE html>

<head>
    <title>OUTPUT 1</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">

    <style type="text/css">
        .brand {
            background: #29b6f6 !important;
        }

        .brand-text {
            color: #29b6f6 !important;
        }

        label {
            width: 200px;
        }
    </style>
</head>

<body class="blue">
    <!--BACKGROUND-->
    <div>
        <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
            <a class="navbar-brand" href="#" style="color:#B3BDFF;">
                <strong>Add a Class</strong>
            </a>
            <form action=input1.html method=POST>
                <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
            </form>
        </nav>
    </div>
    <br>
    <div class="container" style="text-align:center; align:center">
            <br><br><br><br><br><br>        

                
       			<!-- FORM TO SEND DATA -->
                <form class="white" action="add_class.php" method="POST">
                	<label>Subject:</label>
                	<input type="text" name="subject" value="<?php echo $subject ?>">
                	<div class="red-text"><?php echo $errors['subject']; ?></div>

                	<label>Section:</label>
                	<input type="text" name="section" value="<?php echo $section ?>">
                	<div class="red-text"><?php echo $errors['section']; ?></div>

                	<br><br>
                	<input type="submit" name="submit" value="submit" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">
                </form>
                <!-- END FORM TO SEND DATA -->

                <br>
                
        </form>
    </div>
</body>