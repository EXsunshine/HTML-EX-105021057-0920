<?php
include("mysql_connect.inc.php");
session_start();
?>
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
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Professional Activities</a></li>
                <li><a data-toggle="pill" href="#menu1">Academic Achievements</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p align="justify">
                        <font size="6">  Professional Activities</font>
                    <font size="4">
                        <ol>
                            <li >The 3rd among the winners of 2013 III Technology Contest (Project: Community-based Healthcare Service).</li>
                            <li>Nomination for 2013 R&amp;D 100 Awards (Project: Community-based Healthcare Service).</li>
                            <li >A winner of Microsoft Fellowship 2005.</li>
                            <li>An intern in the Wireless and Networking Group, Microsoft Research, Asia,
                                Beijing, China, from March to September 2006.</li>
                            <li >2011 Who's Who in the World.</li>
                            <li >2007 Who's Who in Science and Engineering.</li>
                            <li >A Member of IEEE, ACM, and IEICE.</li>
                            <li >A Member of IEEE Communications Society.</li>
                            <li >Editorial board of
                                <ul>
                                    <li >
                                        <a target="_blank" href="http://www.pspchv.com/editorial_board_PJCSET.html">Pioneer Journal of Computer Science and Engineering Technology</a></li></ul>
                            </li><li >Executive Committee Member of
                                <ul>
                                    <li >2017 International Conference for Big Data and AI in Medical &amp; FinTech
                                    </li></ul>
                            </li><li >Technical Program Committee Member of
                                <ul>
                                    <li >IEEE
                                        International Conference on Networking and Services 2005 (ICNS)
                                    </li></ul>
                           </ol>
                    </font>
                    </p>

                </div>
                <div id="menu1" class="tab-pane fade ">
                    <p >
                        <font size="6">
                            Academic Achievements
                        </font>
                        <font size="4" >
                            <ol>
                                <li >
                                    He participated the National Computer Programming Competition (university	group) and finished masterpiece in 2002.
                                </li>
                                <li >
                                    He participated the Computer Programming Competition of the Department of	Information and Computer Education, National Taiwan Normal University and obtained third award in 2002.

                                </li>
                                <li>
                                    An honor student award of the Department of Mathematics, National Taiwan Normal University in 2001.

                                </li>
                                <li>
                                    A cadre member: for example, a class chairman, general affairs, etc.

                                </li>
                                <li >
                                    He has been awarded a variety of fellowships and commendations: such as (1) Pao-An Temple (generally known as “Ta-Lon Tong Ta-Tao-Gon Temple”) in 2001, 2002, 2003, (2) Lung-Shan Temple, Taipei in 2002, and (3) a farmers' association from 1999 to 2002, etc.
                                </li>
                                <li>
                                    An honor student award of the Department of Computer Science and Information Engineering, National Chiao Tung University in 2004.

                                </li>
                                <li >
                                    Exempt from entrance examination for admission to Ph. D. program of the Department of Computer Science and Information Engineering, National Chiao Tung University directly in 2004.      </li>

                            </ol>
                            </ol></font>
                    </p>
                </div>


    </div>
        </div>
        </div>
    </div>
</div>
        <footer class="container-fluid text-center">
            <P>來客數量</P>
            <script language="Javascript">
                document.write('<a href="http://www.free-counter.jp/"></a>');</script><noscript>
                <a href="http://hrs.f-counter.com/">カウンター</a><a href="http://hqm.f-counter.com/">カウンター</a></noscript>
            <nobr><table border="0" cellspacing="0" cellpadding="0" align="CENTER"><tbody><tr><td><a href="http://www.free-counter.jp/"><img src="https://www.f-counter.net/ani1/29/1514950900/" alt="カウンター" border="0" style="margin:0px; padding:0px; border:0px; vertical-align:bottom"></a></td>
                        <td><a href="http://www.free-counter.jp/"><img src="https://www.f-counter.net/ani2/29/1514950900/" alt="カウンター" border="0" style="margin:0px; padding:0px; border:0px; vertical-align:bottom"></a></td></tr></tbody></table></nobr>
            <p>沒有很可以但是我真的承受不起</p>
        </footer>
</body>

</html>