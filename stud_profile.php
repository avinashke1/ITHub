<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
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
    margin-top: 2%;
}
h4 {
    font-size: 18px;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #EF8419;
    color: white;
}
td{
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

<script>
function allLetter()  
  {   
  var uname = document.registration.First_Name;  
  var letters = /^[A-Za-z]+$/;  
  if(uname.value.match(letters))  
  {   
  document.registration.Last_Name.focus();  
  return true;  
  }  
  else  
  {  
  alert('First_Name must have alphabet characters only');  
  uname.focus();  
  return false;  
  }  
  }  


function allLetter1()  
  {   
  var uname = document.registration.Last_Name;  
  var letters = /^[A-Za-z]+$/;  
  if(uname.value.match(letters))  
  {   
  document.registration.date.focus();  
  return true;  
  }  
  else  
  {  
  alert('Last_Name must have alphabet characters only');  
  uname.focus();  
  return false;  
  }  
  }  

 function ValidateEmail()  
  {  
  var uemail = document.registration.Email_Id;  
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
  if(uemail.value.match(mailformat))  
  {  
    
  return true;  
  }  
  else  
  {  
  alert("You have entered an invalid email address!");  
  uemail.focus();  
  return false;  
  }  
  }  

  function allnumeric()  
  {   
  var uzip = document.registration.Mobile_Number;  
  var numbers = /^[0-9]+$/;  
  if(uzip.value.match(numbers))  
  {  
  // Focus goes to next field i.e. email.  
  
  return true;  
  }  
  else  
  {  
  alert(' Phone no must have numeric characters only');  
  uzip.focus();  
  return false;  
  }  
  }  

function pin()  
  {   
  var uzip = document.registration.Pin_Code;  
  var numbers = /^[0-9]+$/;  
  if(uzip.value.match(numbers))  
  {  
  // Focus goes to next field i.e. email.  
  document.registration.State.focus();  
  return true;  
  }  
  else  
  {  
  alert(' Pin code  must have numeric characters only');  
  uzip.focus();  
  return false;  
  }  
  }  


function state()  
  {   
  var uname = document.registration.State;  
  var letters = /^[A-Za-z]+$/;  
  if(uname.value.match(letters))  
  {   
 
  return true;  
  }  
  else  
  {  
  alert('State must have alphabet characters only');  
  uname.focus();  
  return false;  
  }  
  }  
  function inroll(){
    var year=document.getElementById("reg").value;
    var dept=document.getElementById("dept").value
    document.getElementById("roll").value=year.concat("/",dept,"/");
    }

 function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
       // var n = today.getDate() - birthDate.getDate();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;

        }
      return age;
    }


     function cal(){
      var dateString=document.getElementById("dob");
      //var array = getAge(dateString);
      //var year = getAge[0];
      //var month = getAge[1];
      //var day=getAge[2];
      document.getElementById("age").value=getAge(dateString.value);
      console.log("true");
      }


       function ValidateBday(){
      var addr= document.getElementById("dob").value;
            if (addr == "") {
                alert("No birth day selected");
                return false;
            }
          //  else {
            //  document.getElementById("reg").disabled = false;
              //console.log("True");
            //}
    }


     function ValidateAddress(){
      var addr= document.getElementById("add").value;
            if (addr == "") {
                alert("No Address Entered");
                return false;
            }
            else{
              document.getElementById("con").disabled = false;
              console.log("True");
            }
    }


    function showfield3(box){
        if(box.checked)document.getElementById('div3').style.display="block";
        else document.getElementById('div3').style.display="none";
      }

      function hidefield3() {
 document.getElementById('div3').style.display='none';
 }

  function ValidateJoining(){

      var joining= document.getElementById("reg").value;
      if(joining == 0){
      alert("please choose year ofjoining");
      return false;
      }
      else{
        document.getElementById("dept").disabled = false;
        console.log("True");
      }
    }

    function ValidateDepartment(){

      var department= document.getElementById("dept").value;
      if(department == 0){
      alert("please choose your department");
      return false;
      }
      else{
        document.getElementById("sem").disabled = false;
        console.log("True");
      }
    }

    function ValidateSemester(){

      var semester= document.getElementById("sem").value;
      if(semester == 0){
      alert("please choose your semester");
      return false;
      }
      else{
        document.getElementById("con").disabled = false;
        console.log("True");
      }
    }


        </script>
         
</head>


<body  onload="hidefield3();">

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




<h2>Student Registration</h2>


<div id="table">
<form name="registration"  method="POST" enctype="multipart/form-data" action="process.php">
 
<table align="center" cellpadding = "10" margin-top="60px" margin-left="200px">
  <tr>
    <td><h4>PERSONAL DETAILS:</h4></td>
</tr> 
 
 <!-- Image Upload -->

<tr>
  <td><label for="filefield">UPLOAD PROFILE IMAGE</label></td>
  <td><input type="file" name="file" onchange="readURL(this)"></td>
  <td><img id="preview" src="student.png" alt="YOUR_IMAGE" height="220" width="220" border="3px" ></td>
</tr>

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


<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30" onblur="allLetter()"/>

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30" onblur="allLetter1()"/>

</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td><input type="date" name="date" id="dob" onblur="ValidateBday()" onchange="cal()">

</td>
</tr>

<tr>
<td>AGE</td>
 
<td><input type="text" name="age"  id="age">

</td>
</tr>

 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" onblur="ValidateEmail()" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" onblur="allnumeric() "/>

</td>
</tr>
<tr>
<td>Gender</td>
<td><input type="checkbox" name="sex" value="Male" />Male</td>
<td><input type="checkbox" name="sex" value="Female" />Female</td>
</tr>
<!-- Hostel Address -->
<tr>
<td>PRESENT ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30" id="add" onblur=" ValidateAddress()"></textarea></td>
</tr>

<!----- Permanent Address ------------------------------------------------------>
<tr>
<td>PERMANENT ADDRESS <br /><br /><br /></td>
<td><textarea name=" per_Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30"  />
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" onblur="pin()" />

</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" onblur="state()" />
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby" value="Drawing" />
Singing
<input type="checkbox" name="Hobby" value="Singing" />
Dancing
<input type="checkbox" name="Hobby" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby" value="Sketching" />
<br />
Others
<input type="checkbox" name="hobby" value="other" onclick="showfield3(this)"/>
 
<div id="div3">
    <p>Enter New Hobby:</p><br>
    <input type="text" name="newhob" />
</div>
 
</td>
</tr> 
 

 


 <tr>
    <td><h4>ACADEMIC DETAILS:</h4></td>
</tr>
<!----- Qualification---------------------------------------------------------->

<tr>
    <td>REGISTRATION NO</td>
<td><input type="number" name="regno" maxlength="10" />

</td>
</tr>
<tr>
    <td>YEAR OF JOINING</td>
<td><select name="reg" id="reg" onchange="inroll()" onblur="ValidateJoining()" >
    <option selected="selected" value="0">SELECT</option>
    <option value="10">2010</option>
    <option value="11">2011</option>
    <option value="12">2012</option>
    <option value="13">2013</option>
    <option value="14">2014</option>
    <option value="15">2015</option>
</select></td>
</tr>

<tr>
    <td>DEPARTMENT</td>
  <td>  <select name="branch" id="dept" onchange="inroll()" onblur="ValidateDepartment()">
<option value="BT" >BIOTECHNOLOGY</option>
<option value="CE">CIVIL ENGINEERING</option>
<option value="CHE">CHEMICAL ENGINEERING</option>
<option value="CSE" >COMPUTER SCIENCE ENGINEERING</option>
<option value="ECE" >ELECTRONICS AND COMMUNICATION ENGINEERING</option>
<option value="EE">ELECTRICAL ENGINEERING</option>
<option value="IT">INFORMATION TECHNOLOGY</option>
<option value="ME">MECHANICAL ENGINEERING</option>
<option value="MME">MATERIALS AND METALLURGICAL ENGINEERING</option>
</select></td>
</tr>

<tr><td>ROLL</td>
<td><input type="text" name="user_roll" id="roll"></td>
</tr>
  
  <tr>
    <td>SEMESTER</td>
   <td> <select name="semester" id="sem" onblur="ValidateSemester()">
<option value="1st" >1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="4th" >4th</option>
<option value="5th" >5th</option>
<option value="6th">6th</option>
<option value="7th">7th</option>
<option value="8th">8th</option>
</select></td>
</tr>



<br><br>
<!-- Submit and Reset -->
<tr>
<td colspan="2" align="center">
<a href="studentregistration.php"><button input id = "button" class="button" type = "submit" name = "submit" style="vertical-align:middle"><span>Submit </span></button></a>
<a href="studentregistration.php"><button input id = "button" class="button" type = "reset" name = "submit" style="vertical-align:middle"><span>Reset </span></button></a>

</td>
</tr>
</table>
 
</form>
</div>

 
</body>

</html>