<!DOCTYPE html>
<html>
	<head>
	<title>viewprofile</title>
	<link rel="stylesheet" type="text/css" href="styleprofile.css">
	</head>
	<body>
	
	<div class="login">  
	<h1>Profile</h1>
	              <a id="log" href="logout.php"><b>Logout</b></a><br><br>    

	<table border="2">
	
<?php
	$hostname="localhost";
	$username="root";
	$pwd="";
	$dbname="office";
	$email=$_GET['email'];
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
	<label> Name</label>
	<h4><?php echo $rows['Name'];?></h4>
	<label> Designation</label>
	<h4><?php echo $rows['Designation'];?></h4>
	<label> Email</label>
	<h4><?php echo $rows['Email'];?></h4>
	<label> Band</label>
	<h4><?php echo $rows['Band'];?></h4>
	<label> Phone</label>
	<h4><?php echo $rows['Phone'];?></h4>
	<label> Skills</label>
	<h4><?php echo $rows['Skills'];?></h4>
	<label> Project Allocation</label>
	<h4><?php echo $rows['ProjectAllocated'];?></h4>
	
	
	<?php
	
	}
	}
	
	else{
	echo"Record Not found";
	}
	}
	
?>
	</div>    

	</table>
	</body>
	</html>
