<!DOCTYPE html>
<?php 
include"db_config.php";
$result=mysqli_query($cid,"SELECT * FROM registration INNER JOIN plan ON registration.planid = plan.planid");
$result1=mysqli_query($cid,"SELECT * FROM registration INNER JOIN plan ON registration.planid = plan.planid");


?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gym Management</title>

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
  <div class="col-lg-4">
  <div style="padding:20px">
  
  
  </div>
  </div>
  <div class="col-lg-4 ">
  <div style="padding:20px">
  <form action="user.php" method="post">
  <div class="form-group">
  <label> NAME:-</label>
  <select name="name" class="form-control">
  <option>Select Name</option>
  <?php while($res=mysqli_fetch_array($result))
 {extract($res);

	 ?>
  
 <option value="<?=$res[0]?>"><?=$res[1]?></option><?php }?>
   </select></div>
  <div class="form-group">
  <label>PLAN:-</label>
  <select name="plan" class="form-control">
  <option>Select Plan</option>
  <?php while($res1=mysqli_fetch_array($result1))
 {extract($res1);

	 ?>
  
 <option value="<?=$res1[9]?>"><?=$res1[10]?></option><?php }?>
  
  </select></div>
  <div class="form-group">
  <label>AMOUNT:-</label>
  <input type="text" name="amount" class="form-control"></div>
  <input type="submit" name="payment" value="Confirm Payment" class="form-control bg-success">
  </form>
  
  </div>
  </div>
  <div class="col-lg-4"></div>
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
