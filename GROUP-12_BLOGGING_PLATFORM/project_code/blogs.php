<?php
include 'connection.php';
include 'api.php';
require 'blog_conn.php';
?>

<!DOCTYPE html>

<html>

<head>
    <title>$row()</title>
    <style>
        body {
            margin: 0px;
        }

    </style>
</head>

<body>

<div id="output">
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "title: " . $row["title"] . " <br> subject: " . $row["subject"] . "<br> " . $row["content"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>


<!---------top_app_bar ------->


</body>

</html>
