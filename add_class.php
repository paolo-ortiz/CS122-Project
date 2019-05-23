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
        <form action="index.php" method=POST>
            <!-- <input type=text placeholder="Class" name= className> -->
            <!-- <div style="text-align:center; align:center"> -->
            <br><br><br><br><br><br>
                

                <!-- FORM TO GET SUBJECT -->
                <label>Subject:</label>
                <form class="white" action="add_class.php" method="GET">
                	<input type="text" name="subject">
                </form>

                <br>
                
                 <!-- FORM TO GET SECTION -->
                <label>Section:</label>
                <form class="white" action="add_class.php" method="GET">
                	<input type="text" name="section">
                </form>


                <br><br>
                <!-- <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add Class</button> -->

                <input type="submit" name="submit" value="submit" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">

            <!-- </div> -->
        </form>
    </div>
</body>