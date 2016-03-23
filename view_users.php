<!DOCTYPE html>
<html>
<head>
	<title>Viewing all the users</title>
	<link rel="stylesheet" href="style_log.css">
	<style>
		h1 {
    font-size: 35px;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
    
}
a{
	color: black;
	background-color: black;
}
table{
	margin-left: 190px;

}

	</style>
</head>
<body>
<div id="container">
    <nav>
      <ul>
        <li><a href="http://localhost:8080/registerphp/index.php">Home</a></li>
        <li><a href="http://localhost:8080/registerphp/adminlogin.php">Admin</a></li>
        <li><a href="http://localhost:8080/registerphp/studentlogin.php">Student</a></li>
        <li><a href="http://localhost:8080/registerphp/about.php">About Us</a></li>
      </ul>
    </nav>
</div> 
<center><h1>All the users information</h1></center>
<table width="1000" align="center" border="1">
	<tr bgcolor="yellow">
		<th>User Id</th>
		<th>User Roll No.</th>
		<th>User Password</th>
		<th>User Email</th>
		<th>Approval</th>
		<th>Approved</th>
		<th>Delete User</th>
		<th>View User</th>
	</tr>

	
<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
session_start();
if(!isset($_SESSION['admin_name'])){
	header("Location: index.php");
}
	$query = "select * from users";

	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run)) {
		$user_id = $row[0];
		$user_roll = $row[1];
		$user_pass = $row[2];
		$user_email = $row[3];
		$valid = $row[4];
	

?>	
	<tr align="center" bgcolor="white">
	<td><?php echo $user_id; ?></td>
	<td><?php echo $user_roll; ?></td>
	<td><?php echo $user_pass; ?></td>
	<td><?php echo $user_email; ?></td>
	<td><a href='approveuser.php?id=<?php echo $user_id ?>'>Approve</a></td>
	<?php if($valid == 1){
		
		echo "<td><a href='approveuser.php?id=<?php echo $user_id ?>'>Approved</a></td>";

	}
	?>
	
	<td><a href='delete.php?del=<?php echo $user_id ?>'>Delete</a></td>
	<td><a href='view_stud.php?user_roll=<?php echo $user_roll ?>'>View User</a></td>
	</tr>
<?php } ?>

<td><a href="admin_logout.php"><button input id = "button" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Log Out </span></button></a>
 
</td>


</table>
</body>
</html>>