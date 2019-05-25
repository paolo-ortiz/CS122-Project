<?php 





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
        <form action=edit_class.php method=POST>
            <!-- <input type=text placeholder="Class" name= tclass> -->
            <body class="grey lighten-4">
            <div class=container style="align:center; text-align:center">
                <label for=student_id><b>ID Number: </b></label>
                <input type=number placeholder='123456' name=student_id required>
                <br>
                <label for=name><b>Student</b></label>
                <input type=text placeholder='e.g. Juan Dela Cruz' name=name required>
                <br>
                <label for=section><b>Section  </b></label>
                <input type=text placeholder='A' name=section required>
                <br>
                <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit" value = "Submit", name = "submit" >Add</button>
            </div>
        </form>
    </body>
</html>