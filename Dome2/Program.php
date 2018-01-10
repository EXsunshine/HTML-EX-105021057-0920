<?php
include("mysql_connect.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program</title>
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
                <li><a href="Activity.php">Activity</a></li>
                <li class="active"><a href="Program.php">Program</a></li>
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
            <div>
                <p align="justify">
                    <font size="6">
                        Teaching Experience
                    </font>
                <font size="5">
                    <li style="margin-top: 15px;margin-bottom: 15px;">Formal Course</li>
                </font>
                <ol>
                <font size="4"><li style="margin-top: 15px;margin-bottom: 15px;">
                    “Information and Technology” for non-CS undergraduates (Asia University): Spring and Fail 2017.
                    <br>
                    (Course Code:
                    <br>
                    <ul>
                        <li>Spring 2017: GRG00093D, GRG00093H, GRG00093K, and GRG00093O</li>
                        <li>Fail 2017: GRG00093A, GRG00093AA, GRG00093AI, GRG00093E, and GRG00093O
                        </li>
                    </ul>
                    )
                </li>
                <li style="margin-top: 15px;margin-bottom: 15px;">
                    “Introduction to Network Programming and its Hands-on Training” for graduate students (National Chiao Tung University, NCTU): Summer Semester 2009, 2010, and 2011.
                </li>
                </font>
            </ol>
               <font size="6">Short/Training Course
                </font>
                <ol>
                    <font size="4">
                        <li style="margin-top: 15px;margin-bottom: 15px;">“Refactoring: Improving the Design of Existing Code” for Sincere International Consulting Co., Ltd.: May, 2012.</li>
                        <li style="margin-top: 15px;margin-bottom: 15px;">“Linux Networking” for Sincere International Consulting Co., Ltd.: May, 2012.
                        </li>
                        <li style="margin-top: 15px;margin-bottom: 15px;">“Computer Network and Network Programming” for International Games System Co., Ltd.: Oct. ~ Dec., 2010.
                        </li>
                        <li style="margin-top: 15px;margin-bottom: 15px;">“Introduction to Internet Applications” for Sincere International Consulting Co., Ltd.: May, 2010.
                        </li>
                    </font>
                </ol>
                <!--<ol>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--“Computer Networks” for CS graduate students (NCTU): Spring 2007.-->

                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--“An Introduction to the Internet” for non-CS undergraduates (NCTU): Fall 2006.-->

                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--“Local Area Networks” for CS graduate students (NCTU): Spring 2005.-->

                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--“Programming Languages” for CS undergraduates (NCTU): Fall 2004 and 2005.-->

                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--2011 Who's Who in the World.-->
                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--2007 Who's Who in Science and Engineering.-->
                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--A Member of IEEE, ACM, and IEICE.-->
                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--A Member of IEEE Communications Society.-->

                    <!--</li>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                        <!--Editorial board of-->
                    <!--</li>-->
                    <!--<ul>-->
                        <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                            <!--<a target="_blank" href="http://www.pspchv.com/editorial_board_PJCSET.html">Pioneer Journal of Computer Science and Engineering Technology</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--<li style="margin-top: 15px;margin-bottom: 15px;">-->
                    <!--Executive Committee Member of-->
                    <!--</li>-->
                    <!--<ul style="margin-top: 15px;margin-bottom: 15px;">-->
                    <!--2017 International Conference for Big Data and AI in Medical & FinTech-->
                    <!--</ul>-->
                    <!--</ol>-->

                </p>
            </div>

            <!--<div class="col-sm-8 sidenav">-->

            <!--</div>-->
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