<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test WHERE id=$_GET[id]";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $title = $row["title"]; //echo "title: " . $row["title"]. " <br> subject: " . $row["subject"]. "<br> " . $row["content"]. "<br>";
    $subject = $row["subject"];
    $content = $row["content"];
  }
} else {
  echo "<b color:red>ALERT!!!(PLEASE CHECK DATABASE CONNECTION)</b>";
}
