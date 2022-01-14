<?php 

include "db_conn.php";
session_start();

if (
    isset($_POST['goal_rating']) &&
    isset($_POST['strengths_rating']) &&
    isset($_POST['skill_rating']) &&
    isset($_POST['overall_rating']) &&
    isset($_SESSION['email_id']) &&
        isset($_SESSION['rated_by'])
    ) {


    function validate($data)
    {

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_SESSION['email_id']);
    $goal_rating=validate($_POST['goal_rating']);
    $strengths_rating=validate($_POST['strengths_rating']);
    $skill_rating=$_POST['skill_rating'];
    $overall_rating=validate($_POST['overall_rating']);
    $rated_by = $_SESSION['rated_by'];

    if (empty($email)) {
        echo "hi1";
        die();
        header("Location: rate_team.php?error= email is required");
        exit();
    }else if(empty($goal_rating)){
        echo "hi2";
        die();
        header("Location: rate_team.php?error=goal_rating is required");
        exit();

    }else if(empty($strengths_rating)){
        echo "hi3";
        die();
        header("Location: rate_team.php?error=goal_rating is required");
        exit();

    }else if(empty($skill_rating)){
        echo "hi4";
        die();
        header("Location: rate_team.php?error=comments is required");
        exit();

    }
    else if(empty($overall_rating)){
        echo "hi5";
        die();
        header("Location: rate_team.php?error=comments is required");
        exit();
    }
    else{
 
        $query = "SELECT * FROM managers_rating WHERE email =  $email";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) >= 1) {
            // Already available.. Just update
            // wirte update query

            $result = mysqli_query($conn, $sql);
            header("Location: home_employee.php");
            exit();

        } else {
            // Insert query
            $query = "INSERT INTO managers_rating VALUES('$email','$rated_by','$goal_rating','$skill_rating','$overall_rating','$strengths_rating')";

            // echo $query;
            // die();
            $result = mysqli_query($conn, $query);
            // Update employee table as rated successfully
            $query = "UPDATE Employee SET is_rated_by_manager = 1 WHERE email = '$email'";
            $result = mysqli_query($conn, $query);

            header("Location: home_employee.php");
            exit();
        // Send mail to manager for review submission
        }
    }

}else{
    header("Location: rate_team.php?error=Missing information");
    exit();
}
