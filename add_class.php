<!DOCTYPE html>
<html>

<head>
    <title>Output1</title>
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
                <a href="#" class="brand-logo brand-text">Add A Class</a>
            </div>
        </nav>
        <form action="Input1 header.php" method=POST>
            <!-- <input type=text placeholder="Class" name= tclass> -->
            <div class="container" style="text-align:left">
                <label>Class</label>
                <select name=tclass class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <option name="tclass" value=Science>Science</option>
                    <option name="tclass" value=Math>Mathematics</option>
                    <option name="tclass" value=PE>Physical Education</option>
                    <option name="tclass" value=English>English</option>
                </select>
                <label>Section</label>
                <select name=tsec class="browser-default">
                    <option value="tsec" disabled selected>Choose your option</option>
                    <option value=A name="tsec">A</option>
                    <option value=B name="tsec">B</option>
                    <option value=C name="tsec">C</option>
                    <option value=D name="tsec">D</option>
                </select>
                &nbsp;
                <button class="btn brand z-depth-0" type="submit" name="action">Add Class
            </button>
            </div>
        </form>

</html>