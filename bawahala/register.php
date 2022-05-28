<?php

    include('connect.php');
    include('functions.php');

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if (empty($fname) || empty($lname)) {
            $error_msg .= 'Please the first and the lastname is required! <br />';
            $does_not_have_error = false;
        }

        if (empty($password) || empty($cpassword) || (md5($password) != md5($cpassword))) {
            $error_msg .= 'The password and confirm password can not be empty or do not match';
            $does_not_have_error = false;
        }

        if ($does_not_have_error) {
            $user_details_sql = "INSERT into users (`fname`, `lname`, `email_ad`, `phone`, `password`, `status`) values ('" . $fname . "','" .$lname ."','". $email ."','". $phone ."','". md5($password) ."', 'enabled')"; 
            $user_details_result = mysqli_query($conn, $user_details_sql);
    
            if ($user_details_result) {

                //Send an email

                //Redirect page
                header('Location: login.php?r=232443');
                exit;
            }
        }
    }

    ?>
<?php include('partial/header.php') ; ?>
<?php
    if (!empty($error_msg)) {
        echo '<h4><font color="red">' . $error_msg . '</font></h4>';
    }
?>
            <form method="POST">
                <table>
                    <tr>
                        <td>Firstname*</td><td><input name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Lastname*</td><td><input name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email Address*</td><td><input name="email" type="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Phone Number*</td><td><input name="phone" type="text" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password*</td><td><input name="password" type="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password*</td><td><input name="cpassword" type="password" value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : '' ; ?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td><td><input name="submit" type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
<?php include('partial/footer.php') ; ?>