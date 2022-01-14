<?php
include_once '/xampp/htdocs/project/html_header.php';
header("Access-Control-Allow-Methods:POST");
include_once '/xampp/htdocs/project/connection.php';
if ($conn->connect_error)
    die("Error in Connection :" . $conn->connect_error);
else {
    try {
        $data = file_get_contents("php://input");
        $obj = json_decode($data);
        if (!empty($obj)) {
            $title = $obj->title;
            $content = $obj->content;
            $subject = $obj->subject;
            $email = $obj->email;
            echo "Message: Success";
            // $stmt = $conn->prepare("insert into test(title,subject,content,userid)
            //     value(?,?,?,?)");
            // $stmt->bind_param("ssss", $title, $subject, $content, $email);
            // $stmt->execute();
            // echo "successfully your blog has been added";
            // echo "<br><a href='newlook.php'>home</a>";
            // $stmt->close();
            // $conn->close();
        } else {
            throw new Exception("kindly send the object in json");
        }
    } catch (Exception $e) {
        echo "Message:" . $e->getMessage();
    }
}
