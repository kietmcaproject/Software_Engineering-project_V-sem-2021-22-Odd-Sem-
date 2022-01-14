<?php


include "dbconfigure.php";


$id=$_GET['id'];


$query = "delete from equipment where eid='$id'";
$n = my_iud($query);
//echo "$n record removed";  
header("Location:show_equipment.php");
?>