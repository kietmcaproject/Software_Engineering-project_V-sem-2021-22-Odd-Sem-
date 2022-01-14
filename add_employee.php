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

    <div class="content_add_employee">
      <h2 align="center">Admin panel</h2>
      <h2>*Note : Band will be assigned based on designation</h2>
    <form id="add_employee" action="add_employee_to_db.php" method="post">
      <div id="personal-details">
        <table width="100%">
          <tr>
            <td>Full Name</td>
            <td>
              <input type="text" name="full_name" placeholder="Full Name" size="25">
            </td>
           
          </tr>
          <tr>
            <td>Mobile Number</td>
            <td>
              <input type="number" name="mobile" placeholder="9831****" size="25">
            </td>
            <td>Email Id</td>
            <td>
              <input type="text"  name="email" placeholder="your id@gmail.com" size="25">
            </td>
          </tr>
          <tr>
            <td>Designation</td>
            <td>
                <select name="designation">
                  <option selected disabled>Select Designation</option>
                  <option>Software Engineer </option>
                  <option>QA</option>
                  <option>Lead Engineer</option>
                  <option>Lead QA</option>
                  <option>Engineering Manager</option>
                  <option>Engineering Director</option>
                  <option>HR</option>  
                  <option>IT Consultant</option>  
                  <option>Finance Consultant</option>  
                  <option>CTO</option>  
                  <option>CEO</option>     
                </select>
            </td>


            <td>Is Reporting Manager?</td>
            <td>
                <select name="is_reporting_manager">
                  <option selected disabled>Select yes if reporting manager</option>
                  <option>YES</option>
                  <option>NO</option>     
                </select>
            </td>

            <td>Select employee under him?</td>
            <td>
              <option selected disabled>Select 1</option>
                <select name="employee_uner_him">
            <?php

               include "db_conn.php"; // Using database connection file here
               $records = mysqli_query($conn,"select * from Employee");
               while($data = mysqli_fetch_array($records))
               {
            ?>    
                  <option><?php echo $data['email']; ?></option>
            <?php 
               }
            ?>
                <option>No one</option>
                </select>
            </td>
            

<!--             <td>Whome he will report?</td>
            <td>
              <input type="text"  name="manager" placeholder="email of reporting manager" size="25">
            </td> -->


          </tr>
          <tr>
            <td>Whome he will report?</td>
            <td>
              <option selected disabled>Select reporting person</option>
                <select name="reporting_manager">
                              <?php

               // include "db_conn.php"; // Using database connection file here
               $records = mysqli_query($conn,"select * from Employee");
               while($data = mysqli_fetch_array($records))
               {
                ?>   
                  <option><?php echo $data['email']; ?></option>
                <?php 
               }
            ?>
              <option>No one</option>
                </select>
            </td>
          </tr>
          <?php mysqli_close($conn); // Close connection ?>

        </table>

      </div>


      </table>
      <button type="submit">Save Info</button>

    </div>



  </form>

  


</div>
</body>
</html>

<?php

}else{

     header("Location: index.php");

     exit();

}

 ?>


