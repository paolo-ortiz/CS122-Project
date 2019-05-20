<!DOCTYPE html>
<html>

<head>
    <title>Input Screen 5-Adding A Student</title>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
        .brand {
            background: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }
    </style>
</head>

<body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <body class="grey lighten-4">
        <!--BACKGROUND-->
        <nav class="white z-depth-0">
            <div class="container">
                <a href="#" class="brand-logo brand-text">Add Student</a>
            </div>
        </nav>
        <br>
        <form action=edit_class.php method=POST>
            <!-- <input type=text placeholder="Class" name= tclass> -->
            <body class="grey lighten-4">
            <div class=container>
                <label for=StudentID><b>ID Number: </b></label>
                <input type=text placeholder='XXXXXX' name=StudentID required>
                <br>
                <button type=submit>Add to List</button>
            </div>
        </form>
    </body>
</html>