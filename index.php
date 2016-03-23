<!DOCTYPE html>
<html>
<head>
<title>IT Portal</title>
 <link rel="stylesheet" href="styles.css">

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> --> 
<!--<script>
//jQuery Script goes here
$(window).load(function() {
    $("#loader").delay(3000).fadeOut("slow");
  })  
</script> -->
<!--<script>
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery("#status").delay(4000).fadeOut("slow");
        // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(4000).fadeOut("slow");
})

</script> -->
</head>
<body>
<!--
<div id="loader">
  <img src="image/square.gif">
</div> -->
<!--
<div id="preloader">
  <div id="status"></div>
</div>

-->
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

<table width="100%" border="0">
<tr>
  <td colspan="2" bgcolor="#26DD88">
   <div class="logo">
      <img src="image/logo.png" alt="logo" style="width:128px;height:128px;"></br>
    </div>
    <h1>NATIONAL INSTITUTE OF TECHNOLOGY, DURGAPUR</h1>
    <h2 id="it">IT PORTAL</h2>
  </td>
</tr>
<tr valign="top">
  <td bgcolor="#F5DB18" width="110" height="550">
    <h2 class="teach"> Administrator </h2>
    <div class="center">
      <img src="teacher.png" alt="teacher" style="width:128px;height:128px;">
    </div>
    <br><a href="adminlogin.php" class="button">Log in</a></br>
       
  </td>
<td bgcolor="#F5DB18" width="100" height="200">
  <h2 class="teach">Student</h2>
  <div class="center">
    <img src="student.png" alt="student" style="width:128px;height:128px;">
  </div>
   <br><a href="studentlogin.php" class="button">Log in</a></br>
 
</td>
</tr>
 
</table>
<section id="one">
	<h4>&copy; IT Deptt.</h4>
	<p>Group 5</p>
</section>


</div>
</body>
</html>