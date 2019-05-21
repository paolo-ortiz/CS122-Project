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
        width:100px;
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
            <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;"
                type="submit"> Log Out</button>
        </form>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto">
                <nav class="nav flex-sm-column">
                    <div class="container" style="text-align:left">
                        <p style="color:#595E80;">Remove Student</p>
                        <form action=remove_student.php method=POST>
                            <label for=student_id><b>ID Number:</b></label>
                            <input type=number placeholder="e.g. 123456" name=student_id required>
                            <br>
                            <button class="btn btn-outline-light my-2 my-sm-0"
                                style="border-color:#5262CC; color:#5262CC;" type="submit">Remove</button>
                        </form>
                    </div>
                    <div class="container" style="text-align:left">
                        <p style="color:#595E80;">Add Student</p>
                        <form action=add_student.php method=POST>
                            <!-- <input type=text placeholder="Class" name= className> -->
                            <button class="btn btn-outline-light my-2 my-sm-0"
                                style="border-color:#5262CC; color:#5262CC;" type="submit">Add Student</button>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>student_id</td>
                            <td>lastName</td>
                            <td>firstName</td>
                            <td>email </td>
                        </tr>
                        <tr>
                            <td>student_id</td>
                            <td>lastName</td>
                            <td>firstName</td>
                            <td>email </td>
                        </tr>
                        <tr>
                            <td>student_id</td>
                            <td>lastName</td>
                            <td>firstName</td>
                            <td>email </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>