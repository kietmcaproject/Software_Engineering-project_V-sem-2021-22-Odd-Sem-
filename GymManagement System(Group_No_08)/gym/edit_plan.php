<?php

include "dbconfigure.php";
$id=$_GET['id'];

$query = "select * from plan where planid='$id'";
$rs = my_select($query);


?>

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
  
  <?php include "head.php"?>
  
  <div class="row">
  <div class="col-lg-4">
  <div style="padding:20px">
  
  
  </div>
  </div>
  <div class="col-lg-4 ">
  <div style="padding:20px">
  
  <?php 
  if($row = mysqli_fetch_array($rs))
  {
  ?>
  <form method="post">
  <div class="form-group">
  <label>PLAN NAME:-</label>
  <input type="text" name="name" class="form-control" value="<?=$row[1]?>"></div>
  
  <div class="form-group">
  <label>AMOUNT:-</label>
  <input type="text" name="amount" class="form-control" value="<?=$row[2]?>"></div>
  
  <div class="form-group">
  <label>DURATION:-</label>
  <input type="text" name="duration" class="form-control" value="<?=$row[3]?>"></div>
  <input type="submit" name="plan_submit" value="EDIT PLAN DETAILS" class="form-control bg-success text-white">
  </form>
  <?php 
  }
  ?>
  
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
<?php 
if(isset($_POST['plan_submit']))
{
$name = $_POST['name'];
$amount = $_POST['amount'];
$duration = $_POST['duration'];
$query = "update plan set name='$name',amount='$amount',duration='$duration' where planid='$id'";
my_iud($query);

echo '<script>alert("Plan Detail has been updated")

window.location = "show_plan.php" ;
</script>';
}

?>