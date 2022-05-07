<?php

$fullname = $email = $phone = $gender = $contact_by_phone = $address = 'ope';

if (isset( $_POST['submit'])) {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $contact_by_phone = $_POST['contact_by_phone'];
    $address = $_POST['address'];


    if (empty($fullname) || empty($email) || empty($phone) || empty($gender) || empty($contact_by_phone) || empty($address)) {
        echo "Error: All required fields cannot be empty. Please fill the required fields";
        echo "<br />";
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
        echo "Only letters and white space allowed in fullname";
      }

    if( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Your email address is invalid. Please enter a valid email address.";
        echo "<br />";
    }

    // if (empty($phone)) {
    //     echo "Error: Your phone number can not be empty. Please enter phone number";
    //     echo "<br />";
    // }

    // if (empty($gender)) {
    //     echo "Error: Your gender can not be empty. Please enter gender";
    //     echo "<br />";
    // }

    // if (empty($contact_by_phone)) {
    //     echo "Error: Your contact by phone number can not be empty. Please enter contact by phone number";
    //     echo "<br />";
    // }

    // if (empty($address)) {
    //     echo "Error: Your address can not be empty. Please enter address";
    //     echo "<br />";
    // }
}

?>

<html>
    <head>
        <title>Migo Website</title>
        <style type="text/css">
            .none{display: none}
            </style>
    </head>
    <body>
        <form class="contact" name="contact" action="contact.php" method="POST" >
            <table >
                <tr>
                    <td><label>Fullname</label></td>
                    <td><input class="sum" required name="fullname" type="text" value="<?php echo $fullname ; ?>"></td>
                </tr>
                <tr>
                    <td><label>Email Address</label></td>
                    <td><input class="sum" required name="email" type="email" value="<?php echo $email ; ?>"></td>
                </tr>
                <tr>
                    <td><label>Phone Number</label></td>
                    <td><input required class="sum" name="phone" type="number" value="<?php echo $phone ; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input name="gender" type="radio" value="male" checked> Male
                        <input name="gender" type="radio" value="female"> Female
                        <input name="gender" type="radio" value="others"> Others
                    </td>
                </tr>
                <tr>
                    <td>Should we contact you by phone</td>
                    <td>
                        <select required name="contact_by_phone">
                            <option value="">--Select--</option>
                            <option value="y">Yes</option>
                            <option value="n">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Contact Address</label></td>
                    <td><textarea required class="sum" name="address"><?php echo $address ; ?></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input name="submit" value="Send" type="submit"></td>
                </tr>
            </table>
            <!-- All stared (*) fields are required. -->
        </form>

        <script src="main.js"></script>
    </body>
</html>