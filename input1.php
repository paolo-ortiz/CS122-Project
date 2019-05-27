
<?php

    //connect to database
    include('config/db_connect.php');



?>

<!DOCTYPE html>
<html>

<head>
    <title>INPUT-SCREEN-1</title>
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

        <script type="text/javascript" src="js/materialize.min.js"></script>
        <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
            <a class="navbar-brand" href="#" style="color:#B3BDFF;">
                <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" -->
                    <!-- class="d-inline-block align-top" alt=""> -->
                <strong>Sign In</strong>
            </a>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="Input2 header.php" method="POST">
            <div class=container style="text-align:center">
                <label for=teacher_id><b>Teacher ID:</b></label>
                <input type=text placeholder='Teacher ID' name=teacher_id required>
                <br>
                <label for=teacher_pw><b>Password:</b></label>
                <input type=password placeholder='Password' name=teacher_pw required>
                <br>
                <button class="btn btn-outline-light my-2 my-sm-0"
                                style="border-color:#5262CC; color:#5262CC;" type="submit">Sign In</button>
            </div>
        </form>
    </body>

</html>