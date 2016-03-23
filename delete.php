<?php
mysql_connect('localhost','root','');
mysql_select_db('users_db');

$delete_id = $_GET['del'];

$query = "delete from users where id='$delete_id'";

if(mysql_query($query))
{
	echo "<script>window.open('view_users.php','_self')</script>";	

}

?>