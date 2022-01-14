<!DOCTYPE html>    
<html>    
<head>    
    <title>Admin Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Admin Action</h2><br>    
    <div class="login">   
	<a href="logoutadmin.php">logout</a>	
    <form id="login" method="POST" action="adminaction.php">    
         <input type="submit" name="AddEmployee" id="log"  value="Add Employee"> <br><br>
		  <input type="submit" name="UpdateEmployee" id="log" value="Update Employee"> <br><br>
		   <input type="submit" name="DeleteEmployee" id="log" value="Delete Employee"> <br><br>
		  
         
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
   if(isset($_POST["AddEmployee"])){
	//include("addemployee.php");
	header("location:addemployee.php");
   }
   
   if(isset($_POST["UpdateEmployee"])){
	//include("updateemployee.php");
	header("location:updateemployee.php");
   }
   if(isset($_POST["DeleteEmployee"])){
	//include("deleteemployee.php");
	header("location:deleteemployee.php");
   }
  
   
   }
   
    
  /* if(isset($_REQUEST["Delete"])){
   include("delete.php");
   }*/
?>
