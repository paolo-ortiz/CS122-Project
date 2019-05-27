<?php 

    //connect to database
    include('config/db_connect.php');

    $errors = array('studentID'=>'', 'lastName'=>'', 'firstName'=>'', 'email'=>'');

    if(isset($_POST['submit'])) {

        //check id number for errors
        if(empty($_POST['studentID'])) {
            $errors['studentID'] = 'ID Number is required';
        } else {
            $studentID = htmlspecialchars($_POST['studentID']);
        }

        //check last name for errors
        if(empty($_POST['lastName'])) {
            $errors['lastName'] = 'Last Name is required';
        } else {
            $lastName = htmlspecialchars($_POST['lastName']);
        }

        //check first name for errors
        if(empty($_POST['firstName'])) {
            $errors['firstName'] = 'First Name is required';
        } else {
            $firstName = htmlspecialchars($_POST['firstName']);
        }

        //check email for errors
        if(empty($_POST['email'])) {
            $errors['email'] = 'Email is required';
        } else {
            $email = htmlspecialchars($_POST['email']);
        }

        //check if there are errors
        if(array_filter($errors)) {
            //do nothing
        } else {
            //save data
            $studentID = mysqli_real_escape_string($conn, $_POST['studentID']);
            $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
            $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            //create sql
            $sql = "INSERT INTO students(studentID,lastName,firstName,email) VALUES('$studentID', '$lastName', '$firstName', '$email')";

            //save to db and check
            if(mysqli_query($conn, $sql)) {
                //success
                //redirect
            header('Location: edit_class.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }           
        }
    }

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>INPUT SCREEN 5-Adding A Student</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">

    <style type="text/css">
    .brand {
        background: #29b6f6 !important;
    }

    .brand-text {
        color: #29b6f6 !important;
    }

    label {
        width:100px;
    }
    </style>
</head>

<body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
        <a class="navbar-brand" href="#" style="color:#B3BDFF;">
            <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" -->
                <!-- class="d-inline-block align-top" alt=""> -->
            <strong>Add Student</strong>
        </a>
        <form action=input1.html method=POST>
            <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;"
                type="submit"> Log Out</button>
        </form>
    </nav>
    <br>

        <!-- FORM TO SEND DATA -->
        <form action="add_student.php" method="POST">

            <body class="grey lighten-4">
            <div class=container style="align:center; text-align:center">
                <label><b>ID Number: </b></label>
                <input type="text" placeholder='123456' name="studentID" required>
                <br>

                <label><b>Last Name: </b></label>
                <input type="text" placeholder='e.g. Dela Cruz' name="lastName" required>
                <br>

                <label><b>First Name: </b></label>
                <input type="text" placeholder='e.g. Juan' name="firstName" required="">
                <br>

                <label><b>Email: </b></label>
                <input type="text" placeholder='e.g. juan.delacruz@gmail.com' name="email" required="">
                <br>

                <input type="submit" name="submit" value="Submit" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">

                <!-- <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Return</button> -->
            </div>
        </form>
        <!-- END FORM TO SEND DATA -->
    </body>
</html>