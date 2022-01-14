<?php
include 'connection.php';
include 'get_data.php';
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;

        }

        th {
            background-color: blueviolet;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr td:hover {
            background: hotpink;
            border-radius: 5px;
            border-color: aquamarine;
        }

        a:link {
            text-decoration: none;
            text-decoration-style: dashed;
        }

    </style>
</head>

<body>
<div class="main">
    <h1>Content-List</h1>
    <?php
    $list_head = array("CONTENT", "TOPIC", "SOURCE");//heading items
    ?>

    <table>
        <!--table first row-->
        <?php

        ?>
        <!--*********************dynamic according to table row*********************-->
        <?php
        if ($result->num_rows > 0) {
            //header of table
            echo '<tr>';
            for ($x = 0; $x < 3; $x++) {

                echo '<th>';
                echo $list_head[$x];
                echo '</td>';

            }
            echo '</th>';

            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // echo "id: " . $row["title"]. " - Name: " . $row["subject"]. " " . $row["content"]. "<br>";
                //echo '<input type="hidden" name="data_id" value="'.$row['id'].'">';
                echo '<tr>';
                echo '<td>';
                echo $row["title"];
                echo '</td>';

                //second column
                echo '<td>';
                echo $row["subject"];
                echo '</td>';

                //third column
                echo '<td>';
                $mydate = getdate(date("U"));//for date
                echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";//date format
                echo '<br><br>';
                /*$id=$row['id'];
                $id_con=$id;
                $id_en=sha1($id_con);*/


                echo "<a href='blogview.php?id={$row['id']}'><b>View</b></a>";
                echo '&nbsp&nbsp&nbsp&nbsp';
                echo "<a href='edit.php?id={$row['id']}'><b>Edit</b></a>";
                //echo "<a href='http://726c672c.ngrok.io/phptutotial/blogs.php?id={$row['id']}'>link</a>";
                // echo "<a href='http://192.168.43.13/phptutotial/blogs.php?id={$row['id']}'>link</a>";
                echo '</td>';

                echo '</tr>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();

        //insert table data raw wise
        /* $table_data=array(
             array('rarrianos the nest companiest that was elegenctyly is the '),
             array("ABOUT TO PHP","HOW TO DECLARE","HOW TO USE LOOP","USER DEFINED AND PRE-DEFINED FUNCTION","DISUCSS VARIOUS USE OF ARRAY"),
             array("<a href='about.php'>click here</a>","link2","link3","link4","link5"));
          for ($x = 0; $x <5; $x++)
           {
              echo'<tr>';
              for ($y = 0; $y <3; $y++)
              {
                echo'<td>';
                echo $table_data[$y][$x];
                echo '</d>';
              }
           }*/
        ?>
    </table>
    <br>
    <br>
    <br>
    <br>
</div>
</body>

</html>
