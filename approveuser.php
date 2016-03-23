<?php
mysql_connect('localhost','root','');
mysql_select_db('users_db');

$user_id = $_GET['id'];
$valid = $_GET['valid'];

if($valid==0){
	mysql_query("UPDATE users SET valid=1 WHERE id='$user_id'");
	
	header('location: view_users.php');	
}

?>