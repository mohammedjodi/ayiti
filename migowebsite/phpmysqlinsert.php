<?php

    include('connect.php');
    include('nav.php');

    $student_details_sql = "INSERT into student_details (`firstname`, `lastname`, `email_address`, `status`) values ('Kolade', 'Ommoshebi', 'kolade@abdulsatar.com', 'active')"; 
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if ($student_details_result) {
        echo "Student data inserted successfully";
    }