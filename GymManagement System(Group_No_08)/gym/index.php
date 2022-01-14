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
  
  
  
  <div class="row">
  <div class="col-lg-7 " style="padding:20px; ">
  <img src="image/newa.jpg" style="width:800px">
  </div>
  
  
  <div class="col-lg-5 " style="padding:20px;">
  <div  style="padding:20px;">
  <button class="btn btn-info btn-block">Admin Login</button>
  
<form method="post" class="mt-5">

<label><b>Admin Name</b></label>
<input type="text" name="adminname" required class="form-control" placeholder="Enter UserName">
<label><b>Password</b></label>
<input type="password" required name="password" class="form-control" placeholder="Enter Password">
<br>


<input type="checkbox" name="rem">Remember Me
<br><br>
<input type="submit" name="login" value="Login" class="btn btn-primary">


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

<?php 
include "db_config.php";
if(isset($_POST['login']))
{
	$adminname=$_POST['adminname'];
	$password=$_POST['password'];
	
	if(isset($_POST['rem']))
	{
		$remember="yes";
	}
	else
	{
		$remember="no";
	}
$query="select count(*) from admin where adminname='$adminname' and password='$password'";

$ans=my_login($query);
if($ans==1)
{
	$_SESSION['sun']=$adminname;
	$_SESSION['spass']=$password;
  
	if($remember=='yes')
	{
		setcookie('cadminname',$adminname,time()+60*60*24*7);
		setcookie('cpassword',$password,time()+60*60*24*7);

	}
		header("location:adminhome.php");
}
else
{
	echo '<script>alert("Invalid Login Credentials");</script>';
}
}


?>
