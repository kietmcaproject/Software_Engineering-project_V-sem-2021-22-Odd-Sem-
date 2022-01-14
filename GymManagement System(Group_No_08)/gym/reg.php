<!DOCTYPE html>
<?php 
include"db_config.php";
$result1=mysqli_query($cid,"select * from Plan");
$result2=mysqli_query($cid,"select * from Plan");
$result3=mysqli_query($cid,"SELECT * FROM registration");


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
  <div class="col-lg-7">
  <div style="padding:20px">
  
  <img src="image/newc.jpg " style="width:700px;">
  <h4 style="padding:20px">Our Members...</h4>
  <table class="table table-hover">
  <tr style="font-weight: bold;">
  <td>NAME</td>
  <td>Mobile</td>
  <td>SEX</td>
  <td>AGE</td>
  <td>Duration</td>
  <td>Payment</td>
  </tr>
  <?php while($r=mysqli_fetch_array($result3))
 {extract($r);

 ?>
  <tr>
  <td><?=$r['name']?></td>
  <td><?=$r['mobile']?></td>
  <td><?=$r['sex']?></td>
  <td><?=$r['age']?></td>
  <td><?=$r['duration']?></td>
  <!--<td><a href="payment.php"><button class="btn btn-warning btn-sm">Payment</button></a></td>--->
  </tr>
 <?php }?>
  
  
  
  </table>
   <a href="show_newc.php"> <button class="btn btn-info ">Other Pending Members</button></a>
 
  </div>
  </div>
  
  <div class="col-lg-5 ">
  <div style="padding:20px">
  <center><h4>--USER REGISTRATION FOR GYM--</h4></center>
  <form action="user.php" method="post">
  <div class="form-group">
  <label>NAME</label>
  <input type="text" name="name" class="form-control"></div>
  
  <div class="form-group">
  <label>MOBILE</label>
  <input type="text" name="mobile" class="form-control"></div>
  
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control"></div>
  
  <div class="form-group">
  <label>AGE</label>
  <input type="text" name="age" class="form-control"></div>
  
  <div class="form-group">
  <label>GENDER</label>
  <br>
  <label>male
  <input type="radio" name="sex" value="male"></label>
  <label>Female
  <input type="radio" name="sex" value="female"></label>
  </div>
  <div class="form-group">
  <label>PLAN</label>
  <select name="plan" class="form-control"><option>Select Plan</option>
   <?php while($res=mysqli_fetch_array($result1))
 {extract($res);

 ?><option value="<?=$res['planid']?>"><?=$res['name']?></option><?php }?>
  </select>
  </div>
  <div class="form-group">
  <label>AMOUNT(In Rs.)</label>
  <input type="text" name="amount" class="form-control">
  </div>
  <div class="form-group">
  <label>DURATION</label>
  <select name="duration" class="form-control"><option>Select Duration</option>
  
<?php while($res1=mysqli_fetch_array($result2))
 {extract($res1);

 ?><option value="<?=$res1['duration']?>"><?=$res1['duration']?></option><?php }?>

 
  
  
  </select>
  </div>
  <input type="submit" name="rag_submit" value="submit" class="form-control bg-success">
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
