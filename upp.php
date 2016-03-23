<?php
//include_once 'dbconfig.php';
mysql_connect("localhost","root","");
mysql_select_db("users_db");
if(isset($_POST['submit']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO student_profile (file,type,size) VALUES('$final_file','$file_type','$new_size')";
		mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='stud_profile.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='stud_profile.php?fail';
        </script>
		<?php
	}
}
?>