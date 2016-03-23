<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
if(isset($_POST['submit']))
{    
		$fname = $_POST['First_Name'];
		$lname = $_POST['Last_Name'];
		$date = $_POST['date'];
		$age = $_POST['age'];
		$email = $_POST['Email_Id'];
		$mobile = $_POST['Mobile_Number'];
		$sex = $_POST['sex'];
		$present_address = $_POST['Address'];
		$per_address = $_POST['per_Address'];
		$city = $_POST['City'];
		$pincode = $_POST['Pin_Code'];
		$state = $_POST['State'];
		$country = $_POST['Country'];
		$hobby = $_POST['Hobby'];
		$regno = $_POST['regno'];
		$yoj = $_POST['reg'];
		$deptt = $_POST['branch'];
		$roll = $_POST['roll'];
		$sem = $_POST['semester'];
	
		$sql = "insert into student_profile (f_name,l_name,dob,age,email_id,mobile,sex,present_add,permanent_add,city,pincode,state,country,hobbies,reg_no,yoj,deptt,roll_no,sem) values ('$fname','$lname','$date','$age','$email','$mobile','$sex','$present_address','$per_address','$city','$pincode','$state','$country','$hobby','$regno','$yoj','$deptt','$roll','$sem')";
		
		mysql_query($sql);
		
			
}
?>