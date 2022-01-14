<?php
include 'connection.php';

$title = $_POST['etitle'];
$subject = $_POST['esubject'];
$content = $_POST['econtent'];

$sql = "UPDATE test SET title='$title',subject='$subject',content='$content' WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo '<h2><a href="newlook.php">home<h2>';
} else {
    echo "Error in updating record: " . $conn->error;
}

$conn->close();
echo '<div class="container align-middle">
    <img src="./img/dribbble-success.gif" alt="successfully updated" class="my-5 mx-5 text-center">
</div';
// Redirect browser
header("refresh:10;url=newlook.php");

exit;
?>