<?php

//define("server","localhost",true);
//define("user","root",true);
//define("password","",true);
//define("database","gym",true);



$cid=mysqli_connect("localhost","root","","gym") or die("connection failed");
function iud($cid,$query)
{
		
	$result=mysqli_query($cid,$query);
return $n=mysqli_affected_rows($cid);
}

function select($query)
{
	global $cid;
	return $result=mysqli_query($cid,$query);
	
}


function my_login($query)
{
$c=mysqli_connect("localhost","root","") or die('Connection Failed');
mysqli_select_db($c,"gym");
$data=mysqli_query($c,$query);
$row=mysqli_fetch_array($data);
mysqli_close($c);
return $row[0];
}













?>