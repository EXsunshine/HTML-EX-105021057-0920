<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
            background-color: #FAF0E6;
        }
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {

            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p><img border="0" src="http://web.asia.edu.tw/ezfiles/0/1000/img/125/cis_1.gif"
                    width="120" height="120" align="left"></p>        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="hw.php">Home</a></li>
                <li ><a href="Profile.php">Profile</a></li>
                <li class="active"><a href="Activity.php">Activity</a></li>
                <li><a href="Program.php">Program</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="CV.php">CV</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <body><embed src="http://w13.loxa.edu.tw/cy-ms93324/mikuclock.swf" width="100%" height="300" type="application/x-shockwave-flash"></body>
        </div>
        <div class="col-sm-8 text-left">
        <div>
            <p align="justify">
            <font size="6">
                [Academic Achievements]
            </font>
            <ol>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                He participated the National Computer Programming Competition (university	group) and finished masterpiece in 2002.
            </li>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                He participated the Computer Programming Competition of the Department of	Information and Computer Education, National Taiwan Normal University and obtained third award in 2002.

            </li>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                An honor student award of the Department of Mathematics, National Taiwan Normal University in 2001.

            </li>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                A cadre member: for example, a class chairman, general affairs, etc.

            </li>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                He has been awarded a variety of fellowships and commendations: such as (1) Pao-An Temple (generally known as “Ta-Lon Tong Ta-Tao-Gon Temple”) in 2001, 2002, 2003, (2) Lung-Shan Temple, Taipei in 2002, and (3) a farmers' association from 1999 to 2002, etc.
            </li>
            <li style="margin-top: 18px;margin-bottom: 18px;">
                An honor student award of the Department of Computer Science and Information Engineering, National Chiao Tung University in 2004.

            </li>
            <li style="margin-top: 15px;margin-bottom: 15px;">
                Exempt from entrance examination for admission to Ph. D. program of the Department of Computer Science and Information Engineering, National Chiao Tung University directly in 2004.      </li>

            </ol>
        </ol>
            </p>
        <!--</div>-->

        <!--<div class="col-sm-2 sidenav">-->

        <!--</div>-->
    </div>
</div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>