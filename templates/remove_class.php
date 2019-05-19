<html>

<head>
    <title>OUTPUT-SCREEN-1</title>
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

    <body class="grey lighten-4">
        <!--BACKGROUND-->
        <nav class="white z-depth-0">
            <div class="container">
                <a href="#" class="brand-logo brand-text">Remove A Class</a>
            </div>
        
        </nav
         <p>
             <?php
                    echo "You have successfully removed ";
                    echo $_POST["className"];
                    echo " Section ";
                    echo $_POST["secName"];
                    ?>
        </p>
    </body>
</html>