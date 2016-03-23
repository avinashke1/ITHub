<html>
<body>
<?php
if(isset($_POST['submit']))
{
$fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$pass=mysql_real_escape_string($_POST['pass']);
$email=mysql_real_escape_string($_POST['mail']);
$rand=rand(100000,100000000);
$query2=mysql_query("insert into user values('','$fname','$lname','$pass','$email','$rand','0')");
if($query2)
{
student_confirmation($id,$fname,$lname,$rand,$email);
}
}

function student_confirmation($id,$fname,$lname,$rand,$email)
{
$subject = "Email Verification mail";
$headers = "From: email@domain.com \r\n";
$headers .= "Reply-To: email@domain.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message.='<div style="width:550px; background-color:#CC6600; padding:15px; font-weight:bold;">';
$message.='Email Verification mail';
$message.='</div>';
$message.='<div style="font-family: Arial;">Confiramtion mail have been sent to your email id<br/>';
$message.='click on the below link in your verification mail id to verify your account ';
$message.="<a href='http://yourdomain.com/user-confirmation.php?id=$id&email=$email&confirmation_code=$rand'>click</a>";
$message.='</div>';
$message.='</body></html>';

mail($email,$subject,$message,$headers);
}
?>

<form method="post" action="">
First Name: <input type="text" name="fname">
Last Name: <input type="text" name="lname">
password: <input type="text" name="pass">
Email: <input type="text" name="mail">
<input type="submit" name="submit">
</form>

</body>
</html>