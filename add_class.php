<!DOCTYPE html>

<head>
    <title>OUTPUT 1</title>
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
            <strong>Add a Class</strong>
        </a>
        <form action=input1.html method=POST>
            <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
        </form>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <form action="Input2 header.php" method=POST>
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
                    &nbsp;
                    <label>Section</label>
                    <select name=tsec class="browser-default">
                        <option value=tsec disabled selected>Choose your option</option>
                        <option value=A name="tsec">A</option>
                        <option value=B name="tsec">B</option>
                        <option value=C name="tsec">C</option>
                        <option value=D name="tsec">D</option>
                    </select>
                    <br>
                    <form action=index.php method=POST>
                        <button class="btn brand z-depth-0" type="submit" name="action">Add Class
                        </button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</body>