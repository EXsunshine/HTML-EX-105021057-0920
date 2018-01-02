<?php function log()
{
    if ($_SESSION['username'] != null) {
        echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>';
    } else {
        echo ' <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
    }
}
?>