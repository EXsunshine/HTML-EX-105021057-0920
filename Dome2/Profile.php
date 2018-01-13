<?php
include("mysql_connect.inc.php");
session_start();
$sql = "SELECT * FROM EB";
$result = mysqli_query($link,$sql);

$sql2 = "SELECT * FROM PE";
$result2 = mysqli_query($link,$sql2);

$sql3 = "SELECT * FROM AAE";
$result3 = mysqli_query($link,$sql3);

$sql4 = "SELECT * FROM RI";
$result4 = mysqli_query($link,$sql4);

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
        .row.content {height: auto}

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
                    echo '<li><a href="logout.php"><span class="bottom">Logout</span></a></li> ';
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
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <div id="home" class="tab-pane fade in active">
                      <?php
                      if ($_SESSION['username'] != null) {
                        echo '<a href="EBadd.php"><button>新增</button></a>';
                       echo '<a href="EBrewrite.php"><button>修改</button></a>';}
                       ?>
                        <font size="4">
                            <ul>
                          <?php  while($row = mysqli_fetch_row($result)){
                              echo '<form name="form" method="post" action="EBdelete.php">';
                              echo "<li>$row[0]</li>";
                              echo "<textarea hidden name='topOrigin' style='height: 25% ;width: 70%; '>$row[0]</textarea>";
                          if ($_SESSION['username'] != null) {
                              echo '<input type="submit" name="top" value="刪除" /><br></form>' ;}}?>
                                 </ul>
                        </font>


                    </div>
                    <div id="menu1" class="tab-pane fade">

                        <?php
                        if ($_SESSION['username'] != null) {
                          echo '<a href = "PEadd.php" ><button > 新增</button ></a >';
                       echo '<a href = "PErewrite.php" ><button > 修改</button ></a >';
                             } ?>
                        <font size="4">
                            <ul>
                                <?php  while($row2 = mysqli_fetch_row($result2)){
                                    echo '<form name="form" method="post" action="PEdelete.php">';
                                    echo "<li>$row2[0]</li>";
                                    echo "<textarea hidden name='topOrigin' style='height: 25% ;width: 70%; '>$row2[0]</textarea>";
                                if ($_SESSION['username'] != null) {
                                    echo '<input type="submit" name="top" value="刪除" /><br></form>' ;}}?>
                            </ul>
                        </font>

                    </div>
                    <div id="menu2" class="tab-pane fade">
                       <?php if ($_SESSION['username'] != null) {
                       echo '<a href="AAEadd.php"><button>新增</button></a>';
                       echo '<a href="AAErewrite.php"><button>修改</button></a>';
                        }?>
                        <font size="4">
                            <ul>
                                <?php  while($row3 = mysqli_fetch_row($result3)){
                                    echo '<form name="form" method="post" action="AAEdelete.php">';
                                    echo "<li>$row3[0]</li>";
                                    echo "<textarea hidden name='topOrigin' style='height: 25% ;width: 70%; '>$row3[0]</textarea>";
                                if ($_SESSION['username'] != null) {
                                    echo '<input type="submit" name="top" value="刪除" /><br></form>' ;}}?>
                            </ul>
                        </font>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <?php if ($_SESSION['username'] != null) {
                        echo '<a href="RIadd.php"><button>新增</button></a>';
                       echo '<a href="RIrewrite.php"><button>修改</button></a>';
                        }?>
                        <font size="4">
                            <ul>
                                <?php  while($row4 = mysqli_fetch_row($result4)){
                                    echo '<form name="form" method="post" action="RIdelete.php">';
                                    echo "<li>$row4[0]</li>";
                                echo "<textarea hidden name='topOrigin' style='height: 25% ;width: 70%; '>$row4[0]</textarea>";
                                if ($_SESSION['username'] != null) {
                                echo '<input type="submit" name="top" value="刪除" /><br></form>' ;}}?>
                            </ul>
                        </font>
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