<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
session_start();
unset($SESSION['user_roll']);
session_destroy();
header("Location: index.php");
?>