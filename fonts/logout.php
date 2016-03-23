<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
session_start();
unset($SESSION['email']);
session_destroy();
header("Location: index.php");
?>