<?php

session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_type'])
  && isset($_SESSION['email'])
) {

  $_SESSION['rated_by'] = $_SESSION['email'];

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>rete team</title>

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

     <div class="rate_ur_self">
              <h3> Rate your team members !<h3>


               <?php

               include "db_conn.php";
               $email = $_SESSION['email'];
               $sql = "SELECT * FROM Employee where manager_of = '$email'";
               // echo $sql; die();
               $records = mysqli_query($conn,$sql);
               $isFound = 0;
               ?>
               <td>
                    </select>
                <option selected disabled style="color: yellow;">Please select 1 employee under you</option>
               <?php 
               while($data = mysqli_fetch_array($records))
               {
                $isFound = 1;
                $_SESSION['email_id'] = $data['email'];
               ?>
                        <select name="rate_to_employess">
                            <option><?php echo $data['email']; ?></option>   
                    </select>
                  </td>

               <?php
                break;
               }
               ?>
               </table>

               <?php mysqli_close($conn); 

                if($isFound == 0)
                { ?>
                    <h3> You are not managing any employee, :(<h3>
                <?php
                }
                else{ ?>
                        <h3> Please rate whome your are managing, from 1 to 5 (1 : lower, 5 : higher)</h3>
                      <form id="rate_ur_self" action="submit_team_rating.php" method="post">
                        <div id="rating_details">
                          <table width="100%">
                            <tr>
                              <td>Rate on his achivement</td>
                                <td>
                                  </select>
                                      <select name="goal_rating">
                                      <option selected disabled> select from 1 to 5</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>     
                                  </select>
                                </td>
                            </tr>
                            <tr>
                              <td>Rate on his/her strengths</td>
                              <td>
                                    </select>
                                      <select name="strengths_rating">
                                      <option selected disabled> select from 1 to 5</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>     
                                    </select> 
                              </td>
                            </tr>
                            <tr>
                              <td>Rate on his/her skills</td>
                              <td>
                                      <select name="skill_rating">
                                      <option selected disabled> select from 1 to 5</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>     
                                  </select> 
                              </td>
                            </tr>
                            <tr>
                              <td>Rate overall rating</td>
                              <td>
                                    <select name="overall_rating">
                                      <option selected disabled> select from 1 to 5</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>     
                                  </select>
                              </td>
                            </tr>
                          </table>
                        </div>
                        </table>
                        <button type="submit">Save Info</button>
                      </div>
                    </form>
                  </div>

                <?php
                }
               ?>
</body>
</html>

<?php

}else{

     header("Location: home_employee.php");

     exit();

}

?>
