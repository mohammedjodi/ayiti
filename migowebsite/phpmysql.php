<?php

    include('connect.php');
    include('nav.php');

    $student_details_sql = "SELECT * from student_details ORDER BY `id` DESC"; 
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if (mysqli_num_rows($student_details_result) > 0) {

        echo '<table border="1">';
            //Header information
            echo '<tr bgcolor="yellow">';
                echo '<td><strong>First Name</strong></td>';
                echo '<td><strong>Lastname</strong></td>';
                echo '<td><strong>Email Address</strong></td>';
                echo '<td><strong>Date Created</strong></td>';
                echo '<td><strong>Action</strong></td>';
            echo '</tr>';
        while ($row = mysqli_fetch_assoc($student_details_result)) {
            echo '<tr>';
                echo '<td>' . $row['firstname'].'</td>';
                echo '<td>' . $row['lastname'].'</td>';
                echo '<td>' . $row['email_address'].'</td>';
                echo '<td>' . $row['date_created'].'</td>';
                echo '<td><a href="phpmysqlupdate.php?update_id=' . $row['id']  . '">Update</a> | Delete</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    // $array = [1, 2, 3, 4, 5];
    // foreach($array as $kesdsdy => $value) {
    //     echo 'Key: ' . $kesdsdy;
    //     echo '<br >';
    //     echo 'Value: ' . $value;
    //     echo '<br >';
    //     echo '<br >';
    // }