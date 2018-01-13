<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$top = $_POST['top'];



//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null)
{

    //更新資料庫資料語法
    $sql = "insert into RI (top) VALUE ('$top')";
    if(mysqli_query($link,$sql))
    {
        echo $sql;
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Profile.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Profile.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
}

?>