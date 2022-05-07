<?php

    include('connect.php');
    include('nav.php');

    $student_details_sql = "UPDATE student_details set `status`='inactive' WHERE `id`=5"; 
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if ($student_details_result) {
        echo "Student Data Deleted successfully";
    }