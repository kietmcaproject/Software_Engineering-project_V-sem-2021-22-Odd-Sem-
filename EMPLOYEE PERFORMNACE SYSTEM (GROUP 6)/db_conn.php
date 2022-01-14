<?php

$sname= "localhost";

$unmae= "babli";

$password = "rgbXYZ@123";

$db_name = "eps_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}