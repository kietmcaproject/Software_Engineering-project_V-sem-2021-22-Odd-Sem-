<?php
// CONNECTION REQUIRED FOR THIS PHP CLASS SO CALL connection.php in main class
 //check connection
 if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//select row from database
else
{ 
 $sql = "SELECT * FROM test ORDER BY id DESC";
 $result = $conn->query($sql);
}
?>