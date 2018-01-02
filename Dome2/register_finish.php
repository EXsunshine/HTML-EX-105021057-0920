<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$name = $_POST['Name'];
$id = $_POST['id'];
$pw = $_POST['password'];
$pw2 = $_POST['password2'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    //新增資料進資料庫語法
    $sql = "insert into member_table (Name,id, password,email, phone) values ('$name',$id, '$pw', $email,'$phone',)";
    if(mysqli_query($sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=updateText.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=hw.php>';
}
?>