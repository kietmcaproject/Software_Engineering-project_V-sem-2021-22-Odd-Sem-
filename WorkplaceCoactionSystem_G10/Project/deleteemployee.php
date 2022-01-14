<!DOCTYPE html>    
<html>    
<head>    
    <title>DeleteEmployee Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Delete Employee  Action</h2><br>    
    <div class="login">  
 <a href="logoutadmin.php">logout</a>	
    <form id="login" method="POST" action="deleteemployee.php">  
		<label><b>Name     
        </b>    
        </label>  <br>  
        <input type="text" name="Name"  placeholder="Name" >    
        <br><br> 
		<label><b>Email   
        </b>    
        </label>    <br>
        <input type="text" name="Email"  placeholder="email" >    
        <br><br> 	&nbsp
		<input type="submit" name="delete"  value="Delete Data">       
        <br><br> 		
        
         
		</form>     
</div>    
</body>    
</html>  

       
<?php
  if(isset($_REQUEST['delete'])){
   $hostname="localhost";
   $username="root";
   $pwd="";
   $dbname="office";
   $name=$_REQUEST["Name"];
   $email=$_REQUEST["Email"];
    $sqlquery="select Email,Name from employee where Email='$email' and Name='$name'";
	$iquery="Delete from employee where  Name='$name' and Email='$email'";

   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error){
   die("Error in connection".$conn->connect_error);
   
   }
   else{
   
	 
		$result=$conn->query($sqlquery);
	 if($result->num_rows>0){
	 if (!empty($name)&&!empty($email)) {

		if($conn->query($iquery)){
		
			//include("adminaction.php");
				echo "<script>alert('Record Deleted Sucessfully')</script>"; 

		}
		
	}
	else{
		echo "<script>alert('Name and Email Must Be Filled')</script>";
	}
	 }
	
		 else{
			echo "<script>alert('No such Employee Exist')</script>";
		}
	 
	
	
  } 
  }
 
  
   

   
   
  
?>
 