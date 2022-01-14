<!DOCTYPE html>    
<html>    
<head>    
    <title>Admin Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Update Employee Details</h2><br>  

    <div class="login">    
	 <a id="log" href="logoutadmin.php">Logout</a> 	
    <form id="login" method="POST" action="updateemployee.php">  
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
				
         <label><b>Password     
        </b>    
        </label>   <br> 
        <input type="Password" name="Password" placeholder="Password">    
        <br><br>    
       

<label><b>Designation    
        </b>    
        </label>  <br>  
        <input type="text" name="Designation"  placeholder="Designation">    
        <br><br> 

<label><b>Band     
        </b>    
        </label>  <br>  
        <input type="text" name="Band"  placeholder="Band">    
        <br><br> 


<label><b>Address  
        </b>    
        </label>  <br>  
        <input type="text" name="Address"  placeholder="Address">    
        <br><br> 

<label><b>Reporting Manager     
        </b>    
        </label>  <br>  
        <input type="text" name="ReportingManager"  placeholder="Reporting Manager">    
        <br><br> 

<label><b>Project Allocated     
        </b>    
        </label>  <br>  
        <input type="text" name="ProjectAllocated"  placeholder="Project Allocated">    
        <br><br> 
		
       
 <input type="submit" name="updatedata"  value="Update Data">       
        <br><br> 		
       
       
		</form>     
</div>    
</body>    
</html>  

       
<?php
  if(isset($_REQUEST['updatedata'])){
   $hostname="localhost";
   $username="root";
   $pwd="";
   $dbname="office";
   $name=$_REQUEST["Name"];
   $email=$_REQUEST["Email"];
  $password=$_REQUEST["Password"];
   $designation=$_REQUEST["Designation"];
   $band=$_REQUEST["Band"];
   
  
   $reportingmanager=$_REQUEST["ReportingManager"];
   $projectallocated=$_REQUEST["ProjectAllocated"];
   $address=$_REQUEST["Address"];
    $sqlquery="select Email,Name from employee where Email='$email' and Name='$name'";
	$iquery="update employee set Password='$password', Designation='$designation', 
	Band='$band', ReportingManager='$reportingmanager',ProjectAllocated='$projectallocated',
	Address='$address' where Email='$email' and Name='$name'";

   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error){
   die("Error in connection".$conn->connect_error);
   
   }
   else{
		$result=$conn->query($sqlquery);
	 if($result->num_rows>0){
		if (!empty($name)&&!empty($email)) {
	
			if($conn->query($iquery)){
				echo "<script>alert('Record Updated Sucessfully')</script>";
				header("location:adminaction.php");
				 

			}
		
		}
		else{
		echo "<script>alert('Name and Email Must Be Filled')</script>";
	}
	}
	else{
		echo "<script>alert('Record Not Updated Sucessfully')</script>";
		}
	
	
	
	
	
	
	
	}
	}
	
	
	
	
	
   
  

   
   
   
  
   

   
   
  
?>
 