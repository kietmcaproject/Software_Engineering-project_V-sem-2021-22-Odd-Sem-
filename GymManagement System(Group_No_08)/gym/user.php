<?php

include"db_config.php";
if(isset($_REQUEST['plan_submit']))
{
	extract($_REQUEST);
	$n=iud($cid,"insert into plan (name,amount,duration) values ('$name','$amount','$duration')");
	if($n==1)
	{
		echo '<script>alert("plan added successfully"); window.location="show_plan.php";</script>';
	}
	else
	{
		echo"something wrong";
	}
}
############################################################################################################
if(isset($_REQUEST['rag_submit']))
{
	 extract($_REQUEST);
	 
	$query="insert into registration (name, mobile, email, age, sex, planid, amount, duration) values 
	 ('$name','$mobile','$email','$age','$sex','$plan','$amount','$duration')";
	 $n=iud($cid,$query);
	if($n==1)
	{
		$query="insert into payment ( planid,amount) values ('$plan','$amount')";
	    $n=iud($cid,$query);
		if($n==1)
		{
      echo '<script>alert("Ragistraion Successful"); window.location="reg.php";</script>';
		}
		}
	else
	{
		echo"something wrong";
	}
	 
}
#######################################################################################################
if(isset($_REQUEST['payment']))
{
	extract($_REQUEST);
	echo $query="update payment set amount= amount+'$amount' where userid='$name' and  planid='$plan' ";
	$n=iud($cid,$query);
	if($n==1)
	{
	 echo '<script>alert("Payment Successful"); window.location="reg.php";</script>';
	}
	else
	{
		echo"Something Wrong";
	}
}
#########################################################################################################
if(isset($_REQUEST['eqp_submit']))
{
	extract($_REQUEST);
	$n=iud($cid,"insert into equipment (name,price,unit,date,discription) values ('$name','$price','$unit','$date','$discription')");
	if($n==1)
	{
		echo '<script>alert("Equipment added successfully"); window.location="show_equipment.php";</script>';
	}
	else
	{
		echo"something wrong";
	}
}
###########################################################################################################
if(isset($_REQUEST['cus_submit']))
{
	extract($_REQUEST);
	$n=iud($cid,"insert into enquiry (name,mobile,email,age,sex) values ('$name','$mobile','$email','$age','$sex')");
	if($n==1)
	{
		echo '<script>alert("Enquiry successful"); window.location="index.php";</script>';
	}
	else
	{
		echo"something wrong";
	}
	
}














?>