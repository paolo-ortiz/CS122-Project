<head>
    <title>INPUT-SCREEN-7</title>
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

<body class="grey lighten-4">
    <!--BACKGROUND-->
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Requirement Type</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
        </div>
        <br>
        <div class="container" style="text-align:rightt">
            <label>Requirement</label>
            <form action=view_grades.php method="POST">
                <select name=reqType class="browser-default">
                    <option value="reqType" disabled selected>Type</option>
                    <option name="reqType" value=HW>HW</option>
                    <option name="reqType" value=Exam>Exam</option>
                    <option name="reqType" value=Quiz>Quiz</option>
                </select>
                <label for=hpscore><b>Highest Possible Score:</b></label>
                <input type=number placeholder='Highest Possible Score' name=hpscore required>
                <br>
                <label for=teacher_pw><b>Passing Score: </b></label>
                <input type=number placeholder='Passing' name=passing_score required>
                <br>
                <button type=submit>Submit</button>
        </div>
        </ul>
    </nav>
</body>