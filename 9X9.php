<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:41
 */
$x = $_POST['x'];
$y = $_POST['y'];
$ta = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <title>九九乘法婊</title>
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
            background-color: #00e6ff;
        }
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {

            background-color: #00e6f1;
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
</html>
<body>

<table border="1" align="center" >
    <?php
    for($e = 1;$e<=$x;$e++){
    for($r = 1;$r<=$y;$r++){
        $ta=$e*$r;
        echo "<td bgcolor=\"#6495ed\"> <span style='text-align: center'><h1>$ta</h1></span></td> ";
    }
    echo "</tr>";
    }
    ?>
</table>
</body>