<?php
require_once 'connection.php';//get $conn object
session_start();
if ($_SESSION['name'])
{
    if($conn->connect_error)
        echo $conn->connect_error;
    else{
        $i=0;

        if(isset($_POST['key'])){
            $key = $_POST['key'];
            $query = "SELECT * FROM test WHERE userid='".$_SESSION['id']."' AND ";
            $terms = explode(" ", $key);// convert $key into arrary and each term saved into array with using blank splitter
            foreach ($terms as $each)
            {
                $i++;
                if ($i==1)
                {
                    $query.="title LIKE '%$each%' ";
                }
                else{
                    $query.="OR title LIKE '%$each%' ";
                }
                $result=$conn->query($query);//execute the query
                echo $result->num_rows;
                if ($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){
                        $title = $row['title'];
                        $subject = $row['subject'];
                        $content = $row['content'];
                        echo $title."<br>  ".$subject;
                    }
                }
            }
        }else echo 'please type in search box';

    }
}
//header("Location: dashboard.php");
$conn->close();
?>
