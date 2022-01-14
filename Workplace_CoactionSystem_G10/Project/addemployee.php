<!DOCTYPE html>    
<html>    
<head>    
    <title> Add Employee Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Add Employee </h2><br>    
    <div class="login">   
	 <a id="log" href="logoutadmin.php">Logout</a> 	
	
    <form id="login" method="POST" action="addemployee.php">    
        <label><b>Name     
        </b>    
        </label>  <br>  
        <input type="text" name="Name"  placeholder="Name">    
        <br><br> 
		<label><b>Email   
        </b>    
        </label>    <br>
        <input type="text" name="Email"  placeholder="email">    
        <br><br> 		
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

<label><b>Phone     
        </b>    
        </label>  <br>  
        <input type="text" name="Phone" placeholder="Phone">    
        <br><br> 

<label><b>Skills     
        </b>    
        </label>  <br>  
        <input type="text" name="Skills"  placeholder="Skills">    
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

		<input type="submit" name="insertdata"  value="Submit Data">       
        <br><br> 		
       
          
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
   if(isset($_REQUEST['insertdata'])){
    $name=$_REQUEST["Name"];
   $email=$_REQUEST["Email"];
   $password=$_REQUEST["Password"];
   $designation=$_REQUEST["Designation"];
   $band=$_REQUEST["Band"];
   $phone=(int)$_REQUEST["Phone"];
   $skills=$_REQUEST["Skills"];
   $reportingmanager=$_REQUEST["ReportingManager"];
   $projectallocated=$_REQUEST["ProjectAllocated"];
   $address=$_REQUEST["Address"];
    $sqlquery="select Email,Name from employee where Email='$email' and Name='$name'";
   $iquery="insert into employee values('$name','$email','$password','$designation','$band',$phone,'$skills','$reportingmanager','$projectallocated','$address')";

   $result=$conn->query($sqlquery);
	 if($result->num_rows==0){
	 if (!empty($name)||!empty($email)||!empty($password)||!empty($designation)||!empty($band)||!empty($phone)||!empty($skills)||!empty($reportingmanager)||!empty($projectallocated)||!empty($address)) {
  

   if($conn->query($iquery)){
      echo "<script>alert('Data inserted successfully')</script>";  
    
   }
  
	 }
  
  else{
   echo "<script>alert('Fill All the Fields')</script>"; 
   }
   
    
   }
   
    else{
   echo "<script>alert('Data Already Present')</script>"; 
   }
   
   }
  
   }
  
  
?>
