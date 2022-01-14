<?php 

session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_type']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="employee_home.css">

</head>

<body>


     <div class="sidebar">
       <a class="active" href="home_employee.php">Home</a>
       <a href="rate_ur_self.php">Rate your self</a>
       <a href="rate_team.php">Rate team members</a>
       <a href="#updateInfo">Update info</a>
       <a href="logout.php">Logout</a>
     </div>


     <div class="employee_info_details">

          <h2>Hello, 
          <?php 
          echo $_SESSION['name'];
          ?> 
          !Welcome back!
          </h2>
          <table class="styled-table">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Band</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Designation</th>
                      <th>Your Reporting manager</th>
                  </tr>
              </thead>
              <tbody>

               <?php

               $email = $_SESSION['email'];
               $isRatedHimself = 0;

               include "db_conn.php"; // Using database connection file here
               $sql = "SELECT * FROM Employee WHERE email = '$email'";
               $records = mysqli_query($conn,$sql); // fetch data from database
               $data = mysqli_fetch_array($records);
               $isRatedHimself = $data['is_rated_himself'];
               ?>
                 <tr>
                   <td><?php echo $data['id']; ?></td>
                   <td><?php echo $data['band']; ?></td>
                   <td><?php echo $data['name']; ?></td>
                   <td><?php echo $data['email']; ?></td>
                   <td><?php echo $data['desgnation']; ?></td>
                   <td><?php echo $data['reporting_manager']; ?></td>
                 </tr>   
            
               </table>

               <?php mysqli_close($conn); // Close connection ?>

              </tbody>

          </table>
          <?php

               if($isRatedHimself == 0)
               {
          ?> 
               <h4> You havn't rated your self yet, Please reate your self first!</h4>
               <form method="post" action="rate_ur_self.php">
                   <button type="submit">Rate your self</button>
               </form>
          <?php
               }
               else
               { ?>

               <h3>Your self review form is submitted !!!</h3>
          <?php 
               }
          ?>


     </div>

          

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
