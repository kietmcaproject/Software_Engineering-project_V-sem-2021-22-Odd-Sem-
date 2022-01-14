<!DOCTYPE html>    
<html>    
<head>    
    <title>MainPage</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Welcome to Office Collaborator!</h2><br>    
    <div class="login">   
	
    <form id="login" method="POST">    
         <input type="submit" name="Admin" id="log"  value=" Login as Admin"> <br><br>
		  <input type="submit" name="Employee" id="log" value="Login as Employee"> <br><br>
		   
		  
         
    </form>     
</div>    
</body>    
</html>  
<?php
   
   $hostname="localhost";
   $username="root";
   $pwd="";
   $dbname="office";
   
   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error){
   die("Error in connection".$conn->connect_error);
   
   }
   else{
   if(isset($_POST["Admin"])){
	//include("addemployee.php");
	header("location:admin.php");
   }
   
   if(isset($_POST["Employee"])){
	//include("updateemployee.php");
	header("location:employeelogin.php");
   }
   
  
   
   }
   
    
  
?>
