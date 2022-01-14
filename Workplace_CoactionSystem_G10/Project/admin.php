<!DOCTYPE html>    
<html>    
<head>    
    <title>Admin Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Admin Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="adminaction.php">    
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

   $iquery="select Name,Email,Password from employee where Designation='admin'";

   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error){
   die("Error in connection".$conn->connect_error);
   
   }
   else{
   if (!empty($name)||!empty($email)||!empty($password)) {
  

   $result=$conn->query($iquery);
    if($result->num_rows>0){
		if(($name=='admin1'&& $email=='admin1@adminoffice.com' && $password=='admin1')||($name=='admin2' &&  $email=='admin2@adminoffice.com' && $password=='admin2')){
		header("include:adminaction.php");
		}
		else{
			echo'<script>alert("Invalid Login Credential")</script>';
		}
	}

   }
   else{
	echo'<script>alert("Fill the required Data")</script>';
   }
   }
   }
    
 
?>







   