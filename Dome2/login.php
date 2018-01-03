<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:44
 */?>

<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

    <form class="form-signin" name="form" method="post" action="connect.php">
        <h1 class="form-signin-heading text-muted">Sign In</h1>
        <input type="text" name="id" class="form-control" placeholder="ID" required="" autofocus="">
        <input type="password" name="pw" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign In
        </button>
    </form>

</div>