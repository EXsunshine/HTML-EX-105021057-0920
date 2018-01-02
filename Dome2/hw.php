<?php
include("mysql_connect.inc.php");
session_start();
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
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
                <li class="active"><a href="hw.php">Home</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="Activity.php">Activity</a></li>
                <li><a href="Program.php">Program</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="CV.php">CV</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($_SESSION['username'] != null) {
                echo '<li><a href="logout.php"><span class="bottom">Logout</span></a></li>
                        <li><a href="member.php"><span class="bottom">修改資料</span></a></li>';
                } else {
                echo ' <li><a href="login.php"><span class="bottom">Login</span></a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <body><embed src="http://w13.loxa.edu.tw/cy-ms93324/mikuclock.swf" width="100%" height="300" type="application/x-shockwave-flash"></body>
        </div>
        <div class="col-sm-8 text-left">
            <a onmouseout="boi1.png" onmouseover="bio2.JPG">
                <img src="boi1.png" >
            </a>



            <hl>
            <img src="../img/1.jpg" height="51" width="606"/>
                </hl>
                    <p>
            <span style="font-size: 1.5em">Associate Professor of Practice
            Department of Computer Science and Information Engineering at Asia University
            </span>
            </p>
            <p>
                <span style="font-size: 1.5em">
                    Office: I412, No. 500, Lioufeng Rd., Wufeng Dist., Taichung, 41354, Taiwan
                </span>
            </p>
            <p>
                <span style="font-size: 1.5em">
                    Email:
                <img src="../img/1.png" height="32" width="318"/>
                ;
                <img src="../img/2.gif" height="18" width="200"/>
                    Tel: +886-4-2332-3456 #1852
                </span>
            </p>

    </div>
</div>
</div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>