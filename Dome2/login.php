<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:44
 */?>

<!-- 設定網頁編碼為UTF-8 -->
<link rel="stylesheet" href="../CSS/set.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body style="background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');background-position: 45% 45%;background-size: cover;background-repeat:repeat;">

<div class="container">

    <form style="max-width: 280px;
    padding: 15px;
    margin: 0 auto;
    margin-top:50px;" name="form" method="post" action="connect.php">
        <h1 class="form-signin-heading text-muted">Sign In</h1>
       <h1> <input type="text" name="id" class="form-control" placeholder="ID" required="" autofocus=""></h1>
        <h1><input type="password" name="pw" class="form-control" placeholder="Password" required=""></h1>
        <h1><button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign In
        </button></h1>
    </form>

</div>
</body>