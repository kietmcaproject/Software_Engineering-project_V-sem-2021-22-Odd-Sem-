<?php
function my_iud($query)//insert , update , delete
{
$cid = mysqli_connect("127.0.0.1","root","") or die("Connection Failed");
mysqli_select_db($cid,"gym");
mysqli_query($cid,$query);
$n = mysqli_affected_rows($cid);
mysqli_close($cid);
return $n;
}


function my_select($query)//search
{
$cid = mysqli_connect("127.0.0.1","root","") or die("Connection Failed");
mysqli_select_db($cid,"gym");
$rs = mysqli_query($cid,$query);
mysqli_close($cid);
return $rs;
}


