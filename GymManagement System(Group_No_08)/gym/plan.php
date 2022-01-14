<!DOCTYPE html>
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
  <div class="col-lg-4">
  <div style="padding:20px">
  
  
  </div>
  </div>
  <div class="col-lg-4 ">
  <div style="padding:20px">
  <form action="user.php" method="post">
  <div class="form-group">
  <label>PLAN NAME:-</label>
  <input type="text" name="name" class="form-control"></div>
  
  <div class="form-group">
  <label>AMOUNT:-</label>
  <input type="text" name="amount" class="form-control"></div>
  
  <div class="form-group">
  <label>DURATION:-</label>
  <input type="text" name="duration" class="form-control"></div>
  <input type="submit" name="plan_submit" value="ADD PLAN" class="form-control bg-success">
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
