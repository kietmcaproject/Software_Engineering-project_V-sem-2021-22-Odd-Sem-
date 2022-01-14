<!DOCTYPE html>
<?php 
include"db_config.php";
$result=mysqli_query($cid,"select * from enquiry");


?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gym Management</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
<div class="container-fluid">
  
  
  
  <div class="row">
  <div class="col-lg-12 bg-info">
  <h1 style="color:white"> GYM MANAGEMENT</h1>
  </div>
  </div>
  
  <?php include"head.php"?>
  
  <div class="row">
  <div class="col-lg-2">
  <div style="padding:20px">
  
  
  </div>
  </div>
  <div class="col-lg-8 ">
  <div style="padding:20px">
 <table class="table table-hover table-stripped">
 <tr style="font-weight: bold;"><td> Name</td>
 <td>Mobile</td>
 <td>Email</td>
 <td>Age</td>
 <td>Sex</td>
 
 </tr>
 <?php while($res=mysqli_fetch_array($result))
 {extract($res);

	 ?>
 <tr>
 <td><?=ucwords($name)?></td>
 <td><?=$mobile?></td>
 <td><?=$email?></td>
 <td><?=$age?></td>
 <td><?=$sex?></td>
 
 </tr>
 <?php }?>
 
 
 </table>
  <a href="newc.php"><input type="submit" value="Add New Enquiry" class="bg-info form-control"></a>
  </div>
  </div>
  <div class="col-lg-2"></div>
  </div>
  
  
  
  
  <div class="row">
  <div class="col-lg-12 bg-warning">
 <?php include "bottom.php"; ?>
  
  
  
  </div>
  </div>
  </div>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
