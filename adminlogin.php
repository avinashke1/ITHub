<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
session_start();

if(isset($_POST['login']))
{
  $admin_name = $_POST['admin_name'];
  $admin_pass = $_POST['admin_pass'];
  $query = "select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

  $run = mysql_query($query);

  if(mysql_num_rows($run)>0){
    $_SESSION['admin_name'] = $admin_name;
    header("Location: view_users.php");
  }
  else{
    echo "<script>alert('Admin details are incorrect!')</script>";
  }

}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin Log in</title>
  <link rel="stylesheet" href="style_log.css">

<style> 
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
    margin-left: 23%;
}
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
    margin-left: 23%;
}
h2 {
    font-size: 35px;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
    margin-left: 23%;
    margin-top: 2%;

}
h4 {
    font-size: 18px;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
    margin-left: 23%;
    margin-top: 1%;
}

.button {
  display: inline-block;
  border-radius: 0px;
  background-color: #2ED1DF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 140px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
   margin-left: 23%;
}
#button2 {
  display: inline-block;
  border-radius: 0px;
  background-color: #ED1F1F;
  border: none;
  color: #FFFFFF;
  text-align: left;
  font-size: 20px;
  padding: 15px;
  width: 220px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
   margin-left: 23%;
}


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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



<h2>Admin Log in </h2>
<form name = "loginform" method = "POST" action = "adminlogin.php">
  <h4>User Name:</h4> <input type = "text" name = "admin_name" required><br>
  <h4>Password:</h4> <input type = "password" name = "admin_pass" required><br>


<button input id = "button" class="button" type = "submit" name = "login" style="vertical-align:middle"><span>Log in </span></button>

</form> 



</body>
</html>