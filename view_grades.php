<?php 

    //connect to database
    include('config/db_connect.php');

      if(isset($_POST['delete'])) {
        $id_to_delete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);

        //make sql
        $sql = "DELETE FROM grades WHERE requirementID = $id_to_delete";

        if(mysqli_query($conn, $sql)) {
            //success

        } else {
            //fail
            echo 'query error: ' . mysqli_error($conn);
        }
    } 

    //write query for getting subject info
    $sql = "SELECT requirementID, requirementType, requirementHPS, requirementPassing, requirementScore FROM grades"; 
    //make query & get result
    $result = mysqli_query($conn, $sql);    
    //fetch resulting rows as array
    $grades = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //free memory
    mysqli_free_result($result);

      //check if deleted
  
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
            
            <strong>Section</strong>
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
                        <form action= add_req.php method=POST>
                            <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add</button>
                            </form>
                              <!-- remove requirement -->
                            <p style="color:#595E80;">Remove Requirement</p>
                        <form action=remove_req.php method=POST>
                            <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Remove</button>
            </nav>
        </div>



        <div id="table" class="col-sm" style="align:left;">
            <table class="table table-striped" style="text-align:center">
                <thead>
                    <tr>

                        <th scope="col">Requirement #</th>
                        <th scope="col">Type</th>
                        <th scope="col">HPS</th>
                        <th scope="col">Passing</th>
                        <th scope="col">Score</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- DISPLAY GRADE TABLE -->
                    <?php foreach($grades as $grade): ?>
                        <tr>
                            <td><?php echo $grade['requirementID']; ?></td>
                            <td><?php echo $grade['requirementType']; ?></td>
                            <td><?php echo $grade['requirementHPS']; ?></td>
                            <td><?php echo $grade['requirementPassing']; ?></td>
                            <td><?php echo $grade['requirementScore']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- END DISPLAY GRADE TABLE -->
                </tbody>
            </table>
        </div>

    </div>
    </div>
</body>