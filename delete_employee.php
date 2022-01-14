<?php

session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="admin_home.css">

</head>

<body>


     <div class="sidebar">
       <a class="active" href="home_admin.php">Home</a>
       <a href="add_employee.php">Add Employee</a>
       <a href="update_employee.php">Update Employee</a>
       <a href="delete_employee.php">Delete Employee</a>
       <a href="logout.php">Logout</a>
     </div>

     <div class="content_employee_info">

          <h3> Admin panel </h3>
          <table class="styled-table">
              <thead>
                  <tr>
                      <th>Employee ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>

               <?php

               include "db_conn.php"; // Using database connection file here
               $records = mysqli_query($conn,"select * from Employee"); // fetch data from database
               while($data = mysqli_fetch_array($records))
               {
               ?>

                 <tr>
                   <td><?php echo $data['id']; ?></td>
                   <td><?php echo $data['name']; ?></td>
                   <td><?php echo $data['email']; ?></td>
                   <td>
                      <form  action="delete_employee_db.php" method="post">
                      <button type="submit" name="2" value="<?php echo $data['id']; ?>">Delete</button>
                    </form>
                    </td>
                 </tr>   
               <?php
               }
               ?>
               </table>

               <?php mysqli_close($conn); // Close connection ?>

              </tbody>
          </table>
     </div>
</body>
</html>

<?php

}else{

     header("Location: index.php");

     exit();

}

 ?>

