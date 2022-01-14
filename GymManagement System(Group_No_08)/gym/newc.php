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
  <div class="col-lg-7 " style="padding:20px; ">
  <img src="image/newb.jpg" style="width:800px">
  </div>
  <div class="col-lg-5 " style="padding:20px;">
  <div  style="padding:20px;">
<form action="user.php" method="post">
  <div class="form-group">
  <label>NAME</label>
  <input type="text" name="name" class="form-control" placeholder="Enter Name"></div>
  
  <div class="form-group">
  <label>MOBILE</label>
  <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"></div>
  
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control" placeholder="Enter Email"></div>
  
  <div class="form-group">
  <label>AGE</label>
  <input type="text" name="age" class="form-control" placeholder="Enter Age"></div>
  
  <div class="form-group">
  <label>SEX</label>
  <label>male
  <input type="radio" name="sex" value="male"></label>
  <label>Female
  <input type="radio" name="sex" value="female"></label>
  </div>
<input type="submit" name="cus_submit" value="submit" class="form-control bg-success">
  </form>
  
  
  
  
  </div>
  </div>
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
