<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$titel = $_POST['titel'];
$office = $_POST['office'];
$email = $_POST['email'];
$tel = $_POST['tel'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null)
{

    //更新資料庫資料語法
    $sql = "update hw set tiltel='$titel', Office='$office', Email='$email', Tel='$tel' where tiltel='$titel'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
}
?>