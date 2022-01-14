<!DOCTYPE html>
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
  <div class="col-lg-8">
  <div style="padding:20px">
  <img src="image/uuu.jpg" style=" height:600px; width:800px">
  </div>
  </div>
  <div class="col-lg-4 ">
   <div style="padding:20px">
  <h3>EQUIPMENT REGISTRATION </h3>
  <div style="padding:20px">
  <form action="user.php" method="post">
  <div class="form-group">
  <label>EQUIPMENT NAME:-</label>
  <input type="text" name="name" class="form-control" placeholder="Enter Name"></div>
  <div class="form-group">
  <label>PRICE:-</label>
  <input type="text" name="price" class="form-control" placeholder="Enter Price"></div>
  <div class="form-group">
  <label>NUMBER OF UNITS:-</label>
  <input type="text" name="unit" class="form-control" placeholder="Enter Unit"></div>
  <div class="form-group">
  <label>DATE OF PURCHASE:-</label>
  <input type="date" name="date" class="form-control"></div>
  <div class="form-group">
  <label>DISCRIPTION:-</label>
  <input type="text" name="discription" class="form-control" placeholder="Enter Discription"></div>
  <input type="submit" name="eqp_submit" value="ADD EQUIPMENT" class="form-control bg-success">
   </form>
  </div>
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
