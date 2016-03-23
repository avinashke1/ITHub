<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
  
  if(isset($_POST['submit'])){
    $user_pass = $_POST['pass'];
    $user_email = $_POST['email'];
    $user_roll = $_POST['roll'];

     if($user_roll==''){
      echo "<script>alert('Please enter your roll no.')</script>";
      exit();
    }

    if($user_pass==''){
      echo "<script>alert('Please enter your password')</script>";
      exit();
    }

    if($user_email==''){
      echo "<script>alert('Please enter your email address')</script>";
      exit();
    }
    if($user_roll==''){
    	echo "<script>alert('Please enter your roll no.')</script>";
    }

    $check_roll = "select * from users where user_roll = '$user_roll'";
    $run = mysql_query($check_roll);

    if(mysql_num_rows($run) > 0){
      echo "<script>alert('Roll $user_roll is already exists!')</script>";
      exit();
    }

    $query = "insert into users (user_roll,user_pass,user_email,valid) values ('$user_roll','$user_pass','$user_email',0)";
    if(mysql_query($query)){
      header("Location: studentlogin.php");
    }

  }

?>  

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="style_log.css">
<style>
	.error {color: red;}

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

<?php

$nameErr = $emailErr = $passwordErr= "";
$name = $email = $password= "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)){
			$nameErr = "Only letters and white spaces allowed";
		}
	}

	if(empty($_POST["email"])){
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid email format";
		}
	}

	if(empty($_POST["password"])){
		$passwordErr = "password is required";

	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Student Registeration</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
   <h4>Roll No.:</h4> <input type="text" name="roll" placeholder="13/IT/01" value="<?php echo $name;?>" required>
   <span class="error"><?php echo $nameErr;?></span>
   <br><br>
   <h4>Email:</h4> <input type = "text" name = "email" value="<?php echo $email;?>" required>
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
   <h4>Password:</h4> <input type="password" name="pass" value="<?php echo $password;?>" required>
   <span class="error"><?php echo $passwordErr;?></span>
   <br><br>
   <button input id = "button" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Register </span></button>
</form>


</body>
</html>