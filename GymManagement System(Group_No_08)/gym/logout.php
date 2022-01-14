<?php
session_start();
$_SESSION['sun']="";
$_SESSION['spass']="";
session_destroy();

setcookie('cadminname',"",time()-60*60*34*7);
setcookie('cpassword',"",time()-60*60*34*7);
header("Location:index.php");
?>