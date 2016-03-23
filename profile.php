<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
session_start();
if(!isset($_SESSION['user_roll'])){
  header("Location: index.php");
}
$_SESSION['user_roll'];
$query= mysql_query("SELECT * FROM student_profile WHERE user_roll = '".$_SESSION['user_roll']."'")or die(mysql_error());
$arr = mysql_fetch_array($query);
$num = mysql_num_rows($query); 

        $fname = $arr['f_name'];
        $lname = $arr['l_name'];
        $date = $arr['dob'];
        $age = $arr['age'];
        $email = $arr['email_id'];
        $mobile = $arr['mobile'];
        $sex = $arr['sex'];
        $present_address = $arr['present_add'];
        $per_address = $arr['permanent_add'];
        $city = $arr['city'];
        $pincode = $arr['pincode'];
        $state = $arr['state'];
        $country = $arr['country'];
        $hobby = $arr['hobbies'];
        $newhob = $arr['newhob'];
        $regno = $arr['reg_no'];
        $yoj = $arr['yoj'];
        $deptt = $arr['deptt'];
        $roll = $arr['user_roll'];
        $sem = $arr['sem'];
        $image = $arr['image'];


?>
 

<!DOCTYPE html>
<html>
<head>
<title>STUDENT PROFILE</title>
<style>
	.error {color: red;}

	h2 {
    font-size: 35px;
    width: 71.5%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
    padding-left: 35px;
    margin-left: 200px;
    margin-right: 20px;
}
h4 {
    font-size: 18px;
    width: 220px;
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
}


p {
    font-size: 15px;
    width: 100%;
    padding: 2px 20px;
    margin: 3px 0;
    box-sizing: border-box;
    border: none;
    background-color: #460C08;
    color: white;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8CE9C7;
    color: white;
}

.button {
  display: inline-block;
  border-radius: 0px;
  background-color: #2ED1DF ;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 130px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-left: 200px;
  margin-top: 10px;
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
  width: 130px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-left: 200px;
  margin-top: 10px;
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
<link rel="stylesheet" href="style_log.css">
        
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




<h2><?php echo $arr['user_roll']; ?> 's Profile</h2>

<?php if($num > 0){ ?>
<div id="table1">
 
<table align="center" cellpadding = "10" margin-top="60px" margin-left="200px"  >
  <tr>
    <td> </td>
    <td> </td> <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
    <td><img id="preview" src="uploads/<?php echo $arr['image']; ?>" alt="YOUR_IMAGE" height="220" width="220" border="4px" ></td>
</tr>
  <tr>
    <td><h4>PERSONAL DETAILS:</h4></td>
</tr> 
 
 <!-- Image Upload -->

  
  <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview').src=e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

  </script>
</tr>



<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME:  <?php echo $arr['f_name']; ?></td>

</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME:  <?php echo $arr['l_name']; ?>:</td>

</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH:  <?php echo $arr['dob']; ?></td>
 

</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID:  <?php echo $arr['email_id']; ?></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER:  <?php echo $arr['mobile']; ?></td>
<td>

</tr>
 
 <!-- Gender -->
<tr>
<td>GENDER:  <?php echo $arr['sex']; ?></td>

</tr>
<!-- Hostel Address -->
<tr>
<td>PRESENT ADDRESS:  <?php echo $arr['present_add']; ?> <br /><br /><br /></td>

</tr>

<!----- Permanent Address ------------------------------------------------------>
<tr>
<td>PERMANENT ADDRESS:  <?php echo $arr['permanent_add']; ?> <br /><br /><br /></td>

</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY:  <?php echo $arr['city']; ?></td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE:  <?php echo $arr['pincode']; ?></td>

</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE:  <?php echo $arr['state']; ?></td>

</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY:  <?php echo $arr['country']; ?></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES:  <?php echo $arr['hobbies']; ?> <br /><br />
              <?php echo $arr['newhob']; ?>     <br />
            
</td>
  

</tr>
 
 <tr>
    <td><h4>ACADEMIC DETAILS:</h4></td>
</tr>
<!----- Qualification---------------------------------------------------------->

<tr>
    <td>REGISTRATION NO:  <?php echo $arr['reg_no']; ?></td>

</tr>
<tr>
    <td>YEAR OF JOINING:  <?php echo $arr['yoj']; ?></td>

</tr>

<tr>
    <td>DEPARTMENT:  <?php echo $arr['deptt']; ?></td>
  
</tr>

<tr><td>ROLL:  <?php echo $arr['user_roll']; ?></td>
</tr>
  
  <tr>
    <td>SEMESTER:  <?php echo $arr['sem']; ?></td>
   
</tr>



</table>
 

</div>

<?php } ?>
<a href="logout.php"><button input id = "button2" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Log Out </span></button></a>

 
</body>

</html>