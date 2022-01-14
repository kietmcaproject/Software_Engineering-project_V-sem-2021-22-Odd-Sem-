<!DOCTYPE html>
<html>
	<head>
	<title>PersonalDetails</title>
	<link rel="stylesheet" type="text/css" href="styleprofile.css">
	</head>
	<body>
	<div class="login">  
	              <a id="log" href="logout.php">Logout</a>    

	<table border="2">
	<form method="GET" action="personaldetail.php">
	<?php
   session_start();
  
	?><div class="title"><h3><?php echo "Hi  ". $_SESSION['Email'];?></h3></div>

<?php
	$hostname="localhost";
	$username="root";
	$pwd="";
	$dbname="office";
	$email=$_SESSION['Email'];
	
	$query="select * from employee where Email='$email'";
	
	$conn=new mysqli($hostname,$username,$pwd,$dbname);
	
	if($conn->connect_error){
	die("Connection not established".$conn->connect_error);
	
	}
	else{
	
	$result=$conn->query($query);

	if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
	
	?>
	
	<label> Name </label>&nbsp;
	<input type="text" name="Name" value="<?php echo $rows['Name'];?>"></input>
	<br><br>
	<label> Designation</label>&nbsp;
	<input type="text" name="Designation" id="readonly" value="<?php echo $rows['Designation'];?>" readonly></input>
	<br><br>
	<label> Email</label>&nbsp;
		<input type="text" name="Email" id="readonly" value="<?php echo $rows['Email'];?>"readonly></input>

	<br><br>
	<label> Password</label>&nbsp;
	<input type="text" name="Password" value="<?php echo $rows['Password'];?>"></input>
	<br><br>
	<label>Band</label>&nbsp;
	<input type="text" name="Band" id="readonly" value="<?php echo $rows['Band'];?>" readonly></input>
<br><br>
	<label> Address</label>&nbsp;
	<input type="text" name="Address" value="<?php echo $rows['Address'];?>"></input>
	<br><br>
	<label> Phone Number</label>&nbsp;
	<input type="text" name="Phone" value="<?php echo $rows['Phone'];?>"></input>
<br><br>
	<label> Skills</label>&nbsp;
	<input type="text" name="Skills" value="<?php echo $rows['Skills'];?>"></input>
<br><br>
	<label> Project Allocation</label>&nbsp;
	<input type="text" name="ProjectAllocated"  id="readonly" value="<?php echo $rows['ProjectAllocated'];?>" readonly></input>
	<br><br>
	<label> Reporting Manager</label>&nbsp;
	<input type="text" name="ReportingManager"  id="readonly" value="<?php echo $rows['ReportingManager'];?>" readonly></input>
	<br><br>
	
	<input type="submit" name="save" id="save" value="Save">
	</form>
	
	<?php
	
	}
	
	}
		

	
	
	if(isset($_REQUEST['save'])){
	$name=$_GET['Name'];
	$skills=$_GET['Skills'];
	$password=$_GET['Password'];
	$phone=$_GET['Phone'];
	$address=$_GET['Address'];
	$email=$_GET['Email'];
	
	$queryedit="update employee SET Name='$name',Skills='$skills', Password='$password',Phone='$phone',
	Address='$address' where Email='$email'";
	
	$data=mysqli_query($conn,$queryedit);
	if($data){
		echo"<script> alert('Record updated Successfully');</script>";
	}
	}
	
	}
	
	
	
	
	
	
?>
	</div>    

	</table>
	</body>
	</html>
