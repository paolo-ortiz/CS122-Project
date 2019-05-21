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

        label {
            width: 200px;
        }
    </style>
</head>

<body class="blue">
    <!--BACKGROUND-->
    <div>
        <nav class="navbar navbar-light" style="background-color:#333D80; color:#B3BDFF; font-face: 16px-apple-system">
            <a class="navbar-brand" href="#" style="color:#B3BDFF;">
                <strong>Add a Class</strong>
            </a>
            <form action=input1.html method=POST>
                <button class="btn btn-outline-secondary my-2 my-sm-0" style="border-color:#B3BDFF; color:#B3BDFF;" type="submit"> Log Out</button>
            </form>
        </nav>
    </div>
    <br>
    <div class="container" style="text-align:center; align:center">
        <form action="index.php" method=POST>
            <!-- <input type=text placeholder="Class" name= className> -->
            <!-- <div style="text-align:center; align:center"> -->
            <br><br><br><br><br><br>
                <label>Class:</label>
                <select name=className class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <option name="className" value=Science>className</option>
                    <option name="className" value=Math>className</option>
                    <option name="className" value=PE>className</option>
                    <option name="className" value=English>className</option>
                </select>
                <br>
                <label>Section:</label>
                <select name=secName class="browser-default">
                    <option value=secName disabled selected>Choose your option</option>
                    <option value=A name="secName">secName</option>
                    <option value=B name="secName">secName</option>
                    <option value=C name="secName">secName</option>
                    <option value=D name="secName">secName</option>
                </select>
                <br><br>
                <button class="btn btn-outline-light my-2 my-sm-0" style="border-color:#5262CC; color:#5262CC;" type="submit">Add Class</button>

            <!-- </div> -->
        </form>
    </div>
</body>