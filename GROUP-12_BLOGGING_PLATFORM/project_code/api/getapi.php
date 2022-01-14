<?php
header('Access-Control-Allow-Method:GET');
include '/xampp/htdocs/project/html_header.php';
include '/xampp/htdocs/project/connection.php';
if ($conn->connect_error)
    die("connection failed" . $conn->connect_error);
else {
    $sql = "SELECT * FROM test";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        // $output=mysqli_fetch_all($result,MYSQLI_ASSOC);procedural way
        $output=$result->fetch_all(MYSQLI_ASSOC);//*@param object oriental way :MYSQLI_ASSOC=>IS CONSTANT WHICH HAVE VALUE 1
        
        echo json_encode($output);
    
    } else {
        echo json_encode(array('message'=>'No record found','status'=>false));
    }
    $conn->close();
}
