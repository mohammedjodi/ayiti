<?php

    include('connect.php');
    include('nav.php');

    $u_id = $_GET['update_id'];
    $fname = $lname = $email = '';

    $student_details_sql = "SELECT * from student_details WHERE `id`='" . $u_id ."' AND status='active'"; 
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if (mysqli_num_rows($student_details_result) > 0) {
        while ($row = mysqli_fetch_assoc($student_details_result)) {
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $email = $row['email_address'];
        }
    }

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $student_details_sql = "UPDATE student_details set `firstname`='" . $fname . "', `lastname`='" . $lname ."', `email_address`='". $email . "' WHERE `id`=" . $u_id; 
        $student_details_result = mysqli_query($blessing, $student_details_sql);

        if ($student_details_result) {
            echo "Student Data updated successfully";
        }
    }

    ?>
        <html>
        <head>
            <title>Update Record</title>
        </head>
        <body>
            <form method="POST">
                <table>
                    <tr>
                        <td>Name</td><td><input name="fname" value="<?php echo $_POST['fname'] ?? $fname ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Lastname</td><td><input name="lname" value="<?php echo $_POST['lname'] ?? $lname ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email Address</td><td><input name="email" type="email" value="<?php echo $_POST['email'] ?? $email ; ?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td><td><input name="submit" type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>