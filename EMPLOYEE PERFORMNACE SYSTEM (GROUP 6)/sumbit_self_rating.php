<?php 

include "db_conn.php";
session_start();

if (
    isset($_POST['goal_rating']) &&
    isset($_POST['strengths_rating']) &&
    isset($_POST['skill_rating']) &&
    isset($_POST['overall_rating']) &&
    isset($_SESSION['email_id'])
    ) {

    function validate($data)
    {

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_SESSION['email']);
    // $goals=$_POST['goals'];
    $goal_rating=validate($_POST['goal_rating']);
    // $strengths=$_POST['strengths'];
    $strengths_rating=validate($_POST['strengths_rating']);
    // $skills=$_POST['skills'];
    $skill_rating=$_POST['skill_rating'];
    // $comments=$_POST['comments'];
    $overall_rating=validate($_POST['overall_rating']);

    if (empty($email)) {
        header("Location: rate_ur_self.php?error= email is required");
        exit();
    }else if(empty($goal_rating)){
        header("Location: rate_ur_self.php?error=goal_rating is required");
        exit();

    }else if(empty($strengths_rating)){
        header("Location: rate_ur_self.php?error=goal_rating is required");
        exit();

    }else if(empty($skill_rating)){
        header("Location: rate_ur_self.php?error=comments is required");
        exit();

    }
    else if(empty($overall_rating)){
        header("Location: rate_ur_self.php?error=comments is required");
        exit();
    }
    else{
        $query = "SELECT * FROM self_rating WHERE email =  $email";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) >= 1) {
            // Already available.. Just update
            // wirte update query

            $result = mysqli_query($conn, $sql);
            header("Location: home_employee.php");
            exit();

        } else {
            // Insert query
            $query = "INSERT INTO self_rating VALUES('$email','$goal_rating','$skill_rating','$overall_rating','$strengths_rating')";

            // echo $query;
            // die();
            $result = mysqli_query($conn, $query);
            // Update employee table as rated successfully
            $query = "UPDATE Employee SET is_rated_himself = 1 WHERE email = '$email'";
            $result = mysqli_query($conn, $query);

            header("Location: home_employee.php");
            exit();
        // Send mail to manager for review submission
        }
    }

}else{
    header("Location: rate_ur_self.php?error=Missing information");
    exit();
}
