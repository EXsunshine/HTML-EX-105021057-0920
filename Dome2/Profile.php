<?php
include("mysql_connect.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
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
                <li class="active"><a href="Profile.php">Profile</a></li>
                <li><a href="Activity.php">Activity</a></li>
                <li><a href="Program.php">Program</a></li>
                <li><a href="https://www.researchgate.net/profile/Cheng_Yuan_Ho">ResearchGate</a></li>
                <li><a href="https://tw.linkedin.com/in/chengyuanho/">Linkedin</a></li>
                <li><a href="CV.php">CV</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($_SESSION['username'] != null) {
                    echo '<li><a href="logout.php"><span class="bottom">Logout</span></a></li>';
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
                    <li class="active"><a data-toggle="pill" href="#home">Education Background</a></li>
                    <li><a data-toggle="pill" href="#menu1">Professional Experience</a></li>
                    <li><a data-toggle="pill" href="#menu2">Administrative Assistant Experience</a></li>
                    <li><a data-toggle="pill" href="#menu3">Research Interests</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Education Background</h3>

                            <font size="4">
                                    <ul>
                           <li > Ph. D. degree: Department of Computer Science, National Chiao Tung University, Sep., 2004 ~ Jun., 2008.</li>
                            <li > M.S. degree: Department of Computer Science and Information Engineering, National Chiao Tung University, Sep., 2003 ~ Jun., 2004. (He enrolled into Ph. D. program directly)</li>
                        <li >Two Bachelor degrees: (1) Department of Mathematics, and (2) Department of Information and Computer Education, National Taiwan Normal University, Sep., 1999 ~ Jun., 2003.</li>
                                    </ul>
                            </font>


                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Professional Experience</h3>
                        <font size="4">
                    <ul>
                        <li>Chief of Development Division, Big Data Research Center, Asia University, May, 2017 ~ Present.</li>
                        <li>Associate Professor of Practice, Department of Computer Science and Information Engineering, Asia University, Feb., 2017 ~ Present.</li>
                        <li>Manager, Business Operation Division, LOFTechnology, Inc., Nov., 2014 ~ Jan., 2017.</li>
                        <li>R&D Manager, Advanced Research Institute, Institute for Information Industry, Jul., 2011 ~ Nov., 2014.</li>
                        <li> Assistant Research Fellow, Information and Communications Technology Lab (under Diamond Program), Microelectronics and Information Systems Research Center, National Chiao Tung University, Aug., 2010 ~ Jul., 2011.</li>
                        <li>Assistant Research Fellow and Project Manager, Network Benchmarking Lab (NBL), National Chiao Tung University, Aug., 2010 ~ Jul., 2011.</li>
                        <li> Assistant Research Fellow and Consultant, D-Link NCTU Joint Research Center (DNJRC), National Chiao Tung University, Aug., 2010 ~ Jul., 2011.</li>
                        <li>Postdoctoral Researcher, D-Link NCTU Joint Research Center (DNJRC), National Chiao Tung University, Jul., 2008 ~ Jul., 2010.</li>
                        <li> Research Intern, Wireless and Networking Group, Microsoft Research Asia, Mar., 2006 ~ Sep., 2006.</li>
                    </ul>
                        </font>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Administrative Assistant Experience</h3>
                    <font size="4"><ul><li>(Chinese) 下一世代資訊通訊網路尖端技術與應用(二) ─ 子計畫五：網路安全: Dec., 2006 ~ Jun., 2008.</li></ul></font>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Research Interests</h3>
                        <font size="4">
                    <ol>
                        <li>Information-Centric Networking (ICN)</li>
                        <li>Design, Analysis, and Modeling of the Network Protocols/Congestion Control Algorithms</li>
                        <li>Cloud Computing</li>
                        <li>High Speed and P2P Networking</li>
                        <li>Mobile and Wireless Networks</li>
                        <li>Quality of Service/Experience</li>
                        <li>Internet Application/APP Development</li>
                    </ol>
                        </font>
                    </div>
                </div>
            <!--</div>-->

            <!--<div class="col-sm-2 sidenav">-->

        <!--</div>-->
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