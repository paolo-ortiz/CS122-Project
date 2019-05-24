<?php 

	//connect to database
	include('config/db_connect.php');

	if(isset($_GET['submit'])) {
		echo $_GET['subject'];
		echo $_GET['section'];
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
                <form class="white" action="add_class.php" method="GET">
                	<label>Subject:</label>
                	<input type="text" name="subject">
                	<label>Section:</label>
                	<input type="text" name="section">

                	<br><br>
                	<input type="submit" name="submit" value="submit" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">
                </form>

                <br>
                
        </form>
    </div>
</body>