<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
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
        $newhob = $_POST['newhob'];
        $regno = $_POST['regno'];
        $yoj = $_POST['reg'];
        $deptt = $_POST['branch'];
        $roll = $_POST['user_roll'];
        $sem = $_POST['semester'];
        $image = $_FILES["file"]["name"];
$sql1 = "INSERT INTO student_profile (image,f_name,l_name,dob,age,email_id,mobile,sex,present_add,permanent_add,city,pincode,state,country,hobbies,newhob,reg_no,yoj,deptt,user_roll,sem)
VALUES ('$image','$fname','$lname','$date','$age','$email','$mobile','$sex','$present_address','$per_address','$city','$pincode','$state','$country','$hobby','$newhob','$regno','$yoj','$deptt','$roll','$sem')";


if (mysqli_query($conn, $sql1)) {
    //echo "Thank you! You have successfully created your account.";
    echo "<script>alert('Thank you! You have successfully created your account.')</script>";

    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

header("Location: profile.php");
mysqli_close($conn);
?>