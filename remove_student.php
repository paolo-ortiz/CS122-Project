
<?php 

    //connect to database
    include('config/db_connect.php');

  

    //check if deleted
    if(isset($_POST['delete'])) {
        $id_to_delete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);

        //make sql
        $sql = "DELETE FROM students WHERE studentID = $id_to_delete";

        if(mysqli_query($conn, $sql)) {
            //success
        } else {
            //fail
            echo 'query error: ' . mysqli_error($conn);
        }

    }

 ?>

<!DOCTYPE html>
<html>

<head>
<title>OUTPUT SCREEN 1</title>
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
<body class="blue">
    <!--BACKGROUND-->
    <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
        <a class="navbar-brand" href="#" style="color:#B3BDFF;">
            <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" -->
                <!-- class="d-inline-block align-top" alt=""> -->
            <strong>Remove Student</strong>
        </a>
        <form action=input1.html method=POST>
            <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;"
                type="submit"> Log Out</button>
        </form>
    </nav>
    <br>
    <div style="text-align:center">
        <?php
        echo "You have successfully removed ";
        echo $_POST["firstName"];
        echo $_POST["lastName"];
        echo " ID Number ";
        echo $_POST["student_id"];
        ?>
        </p>
        <form action=edit_class.php method=POST>
					
                    <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Return</button>
                </form>
</div>
    </body>

</html>