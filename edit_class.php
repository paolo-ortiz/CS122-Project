<?php 

    //connect to database
    include('config/db_connect.php');

    //write query for all classes
    $sql = 'SELECT studentID, firstName, lastName, email FROM students'; 
    //make query & get result
    $result = mysqli_query($conn, $sql);    
    //fetch resulting rows as array
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        label {
            width: 100px;
        }
    </style>
</head>

<body>
    <!--BACKGROUND-->
    <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
        <a class="navbar-brand" href="#" style="color:#B3BDFF;">
            <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" -->
            <!-- class="d-inline-block align-top" alt=""> -->
            <strong>Edit Class</strong>
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

                        <!-- REMOVING STUDENT -->
                        <p style="color:#595E80;">Remove Student</p>
                        <form action='remove_student.php' method=POST>
                            <label><b>ID Number:</b></label>
                            <input type="text" placeholder="e.g. 12345" name=id_to_delete>
                            <br>

                            <input type="submit" name="delete" value="Delete" class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;">

                            <!-- <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Remove</button> -->
                        </form>
                        <!-- END OF REMOVING STUDENT -->

                    </div>
                    <div class="container" style="text-align:left">
                        <p style="color:#595E80;">Add Student</p>
                        <form action=add_student.php method=POST>
                            <!-- <input type=text placeholder="Class" name= className> -->
                            <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add Student</button>
                        </form>
                    </div>

                </nav>
            </div>
            <div id="table" class="col-sm" style="align:left;">
                <table class="table table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col">ID Number</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- DISPLAYING STUDENTS TABLE -->
                        <?php foreach($students as $student): ?>
                            <tr>
                            <td><?php echo $student['studentID']; ?></td>
                            <td><?php echo $student['lastName']; ?></td>
                            <td><?php echo $student['firstName']; ?></td>
                            <td><?php echo $student['email']; ?></td>
                            <td>
                                <form action=view_grades.php method=POST>
                                    <button class="btn btn-primary  my-2 my-sm-0" style="border-color:#5262CC; color:white; background:#5262CC;" type="submit">View Grades</button></form>
                            </td>
                        </tr> 
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>