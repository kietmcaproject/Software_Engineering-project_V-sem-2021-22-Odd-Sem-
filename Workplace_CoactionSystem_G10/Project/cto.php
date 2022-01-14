<!DOCTYPE html>
<html>
	<head>
	<title>viewprofile</title>
	<link rel="stylesheet" type="text/css" href="styleprofile.css">
	</head>
	<body>
	<div class="login">  
	              <a href="logout.php">logout</a>    

	
	
<?php
	$hostname="localhost";
	$username="root";
	$pwd="";
	$dbname="office";
	$query="select * from employee where Designation='Cto'";
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
	<h1><?php echo $rows['Name'];?></h1>
	<label> Designation</label>
	<h2><?php echo $rows['Designation'];?></h2>
	<label> Email</label>
	<h2><?php echo $rows['Email'];?></h2>
	<label> Band</label>
	<h2><?php echo $rows['Band'];?></h2>
	<label> Phone</label>
	<h2><?php echo $rows['Phone'];?></h2>
	<label> Skills</label>
	<h2><?php echo $rows['Skills'];?></h2>
	<label> Project Allocation</label>
	<h2><?php echo $rows['ProjectAllocated'];?></h2>
	
	
	<?php
	
	}
	}
	
	else{
	echo"Record Not found";
	}
	}
	
?>
	</div>    

	
	</body>
	</html>
