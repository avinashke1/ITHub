<!DOCTYPE html>
<?php
 
  if(isset($_POST['login']))
  {
    mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('users_db') or die(mysql_error());
    session_start();
    $roll=$_POST['roll'];
    $password=$_POST['pass'];
    if($roll!=''&&$password!='')
    {
        $query=mysql_query("select * from users where user_roll='$roll' and user_pass='$password'");
        if(mysql_num_rows($query)>0)
            {
              $_SESSION['user_roll']=$roll;
              while($res=mysql_fetch_array($query))
                {
                  $roll=$res['user_roll'];
                  $password=$res['user_pass'];
                  $user_valid = $res['valid'];
                }

              if($user_valid==0)
                {
                   echo "<script>alert('Pending User Approval !')</script>";
                }
              else
              {
                $count=mysql_num_rows($query);
                  if($count==1)
                  {
                    $_SESSION['user_roll']=$roll;
              
                            $query1=mysql_query("select * from student_profile where user_roll='$roll'");
                            if(mysql_num_rows($query1)>0)
                              {
                                header('location:profile.php');
                              }
                            else
                              {
                                header('location:stud_profile.php');
                              }
                  }
                  else
                    {
                      echo "<script>alert('Incorrect username or password!!!!!!!')</script>";
                    }
              }
      
            }
            
    }
    else
              {
                echo "<script>alert('Fill all the fields!!!!!!!')</script>";
              }
  }
?>

<html>
<head>
  <title>Student Log in</title>
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
   margin-top: 1%;
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

<h2>Student Log in </h2>
<form name = "loginform" method = "POST" action = "studentlogin.php">
  <h4>Roll No.:</h4> <input type="text" name="roll" placeholder="13/IT/01" required>
  <h4>Password:</h4> <input type = "password" name = "pass" required><br>


<button input id = "button" class="button" type = "submit" name = "login" style="vertical-align:middle"><span>Log in </span></button><p>

</form> 
<h2>Not registered?</h2>
<a href="http://localhost:8080/registerphp/studentregistration.php"><button input id = "button" class="button" type = "submit" name = "studentregister" style="vertical-align:middle"><span>Register </span></button></a>

</body>
</html>