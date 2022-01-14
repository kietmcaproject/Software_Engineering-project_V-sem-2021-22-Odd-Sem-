<?php 

    include "db_conn.php";

    $id = 0;
    foreach($_POST as $key => $value)
    {
        $id = $_POST[$key];
        break;
    }


    if( $id === 0)
    {
        header("Location: home_admin.php");
    }
    $sql = "DELETE FROM Employee where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $querry = "DELETE FROM users where id = '$id'";
    $result = mysqli_query($conn, $querry);
    header("Location: home_admin.php");
    mysqli_close($conn);
?>