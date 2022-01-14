

<!DOCTYPE html>    
<html>    
<head>    
    <title>Employee Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleadmin.css">    
</head>    
<body>   
    <h2>Employee Action Page</h2><br>  
 <div class="login"> 	
      <?php
		session_start();?>
			
		<h3><u><?php echo" Hi ".$_SESSION['Email'];?></u>!</h3>
		              <a href="logout.php">logout</a>
<br><br>					  


    <form id="login" method="POST" action="employeeaction.php">  
		 <br> 
 		 
         <input type="text"  name="datasearch" >   
        
		<input type="submit"   name="search"  value="Search">  
		
		<br><br>
		
         <input type="submit" id="log" name="ceo" value="CEO"> 
		 
        </b>    
        <br>  
           
        <br><br> 
		
		<input type="submit"   id="log" name="cto"  value="CTO">          </b>  
	
         <br>
           
        <br><br> 	
		
        <input type="submit"   id="log" name="reportingmanager" value="Reporting Manager">  
		
           
        <br><br>   
		<div id="message"><p id="welcome"></p></div>
		
		
          
	
        <br><br>    
		<br>
          <a href="personaldetail.php">Edit Profile</a>    
    </form>     
</div>    
<table border="2">

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
  
	if(isset($_POST['search'])){
		   
	$searchd=$_REQUEST['datasearch'];
		
		$searchquery= "Select Name,Designation,Email,Band,Phone,Skills,ProjectAllocated,Address from employee where Name Like'%$searchd%' or ProjectAllocated Like'%$searchd%' 
		or Address Like '%$searchd%' or Designation Like '%$searchd%'";
		
		
		
		$result=$conn->query($searchquery);
	if( $result->num_rows>0){
	?>
	<tr>
	<td>Name</td>
	<td>'Designation</td>
		<td>Email</td>
	<td>Band</td>
	<td>Phone</td>
	<td>Skills</td>
	<td>ProjectAllocated</td>
		<td>Address</td>


	</tr>
	<?php
		while($rows=$result->fetch_assoc()){
	?>
	
	<tr>
	<td><?php echo $rows['Name'];?></td>
	<td><?php echo $rows['Designation'];?></td>
		<td><?php echo $rows['Email'];?></td>
	<td><?php echo $rows['Band'];?></td>
	<td><?php echo $rows['Phone'];?></td>
	<td><?php echo $rows['Skills'];?></td>
	<td><?php echo $rows['ProjectAllocated'];?></td>
		<td><?php echo $rows['Address'];?></td>
		<?php echo "<td><a href='viewprofile.php?email=$rows[Email]'>View Profile</td>";
	?>

	</tr>
	
	
	<?php
	}
	}
	}
	
	if(isset($_POST['reportingmanager'])){
		//include('projectmanager.php');
		header("location:projectmanager.php");
	
	}
	if(isset($_POST['ceo'])){
		//include('ceo.php');
		header("location:ceo.php");
	
	}
	if(isset($_POST['cto'])){
		//include('cto.php');
		header("location:cto.php");
	
	}
	
	
   
   }
   
    
 
?>

</table>
</body>    
</html>  




   