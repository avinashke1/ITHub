<!DOCTYPE html>
<html>
<head>
<title>Loading Screen</title>
<style>

body{
margin:0;
padding:0;
text-align:center;
background-color:#FEB41C;
}

body h1{
color:#363F45;
font-family:Arial, Helvetica, sans-serif;
font-size:3em;
}

#loader{
	position:fixed;
	top:0;
	width:100%;
	background-color:white;
	height:100%;
	text-align:center;
	margin:0;
	padding:0px;
	overflow:hidden;
}
</style>	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>	
<script>
//jQuery Script goes here
$(window).load(function() {
    $("#loader").delay(3000).animate({
        opacity:0,
        width: 0,
        height:0
    }, 500);
});
</script>
</head>
<body>	
<div id="loader">
    <img src="img/Preloader_2.gif">
</div>	
<h1>Page Loaded Successfully :D</h1>		
</body>
</html>