<?php

    include('connect.php');
    include('nav.php');

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $student_details_sql = "INSERT into student_details (`firstname`, `lastname`, `email_address`, `status`) values ('" . $fname . "','" .$lname ."','". $email ."', 'active')"; 
        $student_details_result = mysqli_query($blessing, $student_details_sql);

        if ($student_details_result) {
            echo "Student data inserted successfully";
        }
    }

    ?>
    <html>
        <head>
            <title>Insert Record</title>
        </head>
        <body>
            <form method="POST">
                <table>
                    <tr>
                        <td>Name</td><td><input name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Lastname</td><td><input name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email Address</td><td><input name="email" type="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td><td><input name="submit" type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>