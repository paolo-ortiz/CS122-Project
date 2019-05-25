<?php 

    //connect to database
    include('config/db_connect.php');

    //write query for getting subject info
    $sql = "SELECT classID, subject, section FROM classes"; 
    //make query & get result
    $result = mysqli_query($conn, $sql);    
    //fetch resulting rows as array
    $sections = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //free memory
    mysqli_free_result($result);
 ?>

<!DOCTYPE html>

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
            <strong>Section <?php echo $_POST["secName"]; ?></strong>
        </a>
        <form action=input1.html method=POST>
            <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
        </form>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto">
                <nav class="nav flex-sm-column">
                    <div class="container" style="text-align:left">
                        <p style="color:#595E80;">Add Requirement</p>
                        <form action=add_req.php method=POST>
                            <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add</button>


            </nav>
        </div>
        <div id="table" class="col-sm" style="align:left;">
            <table class="table table-striped" style="text-align:center">
                <thead>
                    <tr>
                        <!-- <th scope="col">ID Number</th>
                        <th scope="col">Last Name</th> -->
                        <th scope="col">Requirement #</th>
                        <th scope="col">Type</th>
                        <th scope="col">HPS</th>
                        <th scope="col">Passing</th>
                        <th scope="col">Score</th>

                    </tr>
                </thead>
                <tbody>
                    <?php  ?>
                    <!-- DISPLAY GRADE TABLE -->
                    <!-- <tr>
                        <td>student_id</td>
                        <td>lastName</td>
                        <td>quiz_n</td>
                        <td> exam_n</td>
                        <td>c_standing</td>
                        <td>total</td>

                    <tr>
                        <td>student_id</td>
                        <td>lastName</td>
                        <td>quiz_n</td>
                        <td> exam_n</td>
                        <td>c_standing</td>
                        <td>total</td>
                    <tr>
                        <td>student_id</td>
                        <td>lastName</td>
                        <td>quiz_n</td>
                        <td> exam_n</td>
                        <td>c_standing</td>
                        <td>total</td>
                        </td>
                    </tr> -->
                    <!-- END DISPLAY GRADE TABLE -->
                </tbody>
            </table>
        </div>

    </div>
    </div>
</body>