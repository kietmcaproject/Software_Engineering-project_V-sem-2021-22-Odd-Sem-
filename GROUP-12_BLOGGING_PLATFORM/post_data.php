<?php
//include file 
include 'connection.php';

//declaration of variable that will useful to post data
$title = $_POST['ftitle'];
$subject = $_POST['fsubject'];
$content = $_POST['fcontent'];
$email=$_POST['femail'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into test(title,subject,content,userid)
  value(?,?,?,?)");
    $stmt->bind_param("ssss", $title, $subject, $content,$email);
    $stmt->execute();
    // echo "successfully your blog has been added";
    // echo "<br><a href='newlook.php'>home</a>";
    echo '<div class="container">
    <img src="./img/success.gif" alt="successfully updated" class="my-5 mx-5 text-center">
</div';
    $stmt->close();
    $conn->close();
}
?>
<?php
header("refresh:5;url=newlook.php");
?>