<?php

include "dbconfigure.php";

$id=$_GET['id'];

$query = "delete from plan where planid='$id'";
$n = my_iud($query);
//echo "$n record removed";  
header("Location:show_plan.php");
?>