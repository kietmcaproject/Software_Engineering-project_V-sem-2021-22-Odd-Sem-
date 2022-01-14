<!DOCTYPE html>    
<html>    
<head>    
    <title>Employee Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Employee Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="employeeaction.php">    
        <label><b>Name     
        </b>    
        </label>  <br>  
        <input type="text" name="Name" id="Uname" placeholder="Username">    
        <br><br> 
		<label><b>Email   
        </b>    
        </label>    <br>
        <input type="text" name="Email" id="Email" placeholder="email">    
        <br><br> 		
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Password" id="Pass" placeholder="Password">    
        <br><br>   
		<div id="message"><p id="welcome"></p></div>
		
		
        <input type="submit" name="loginadmin" id="loginadmin" value="Log in">    
	
        <br><br>    
       
        Forgot <a href="#">Password</a>    
    </form>     
</div>    
</body>    
</html>  

<?php
   if(isset($_REQUEST['loginadmin'])){
   $hostname="localhost";
   $username="root";
   $pwd="";
   $dbname="office";
   $name=$_REQUEST['Name'];
   $email=$_REQUEST['Email'];
	$password=$_REQUEST['Password'];
	

   $iquery="select Name,Email,Password from employee where Designation<>'admin' and Name='$name' and 
   Email='$email' and Password='$password'";

   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error){
   die("Error in connection".$conn->connect_error);
   
   }
   
   
   else{
	
 session_start();

   if (!empty($name)||!empty($email)||!empty($password)) {
		
   $result=$conn->query($iquery);
    if($result->num_rows>0){
		$_SESSION['Email']=$email;
		
		//include("employeeaction.php");
		header("location:employeeaction.php");// check ceo cto Reporting manager Employee Details
		
		
		
		}
		else{
			echo'<script>alert("Invalid Login Credential")</script>';
		}
	}

   
   else{
	echo'<script>alert("Fill the required Data")</script>';
   }
   }
   }
    
 
?>







   