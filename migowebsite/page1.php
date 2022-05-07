<?php

require_once('notification.php');

session_start();

if (isset($_POST['submit'])) {
    $_SESSION['fname'] = $_POST['fullname'];
    $_SESSION['user'] = $_POST['usermame'];
    $_SESSION['pass'] = $_POST['password'];

    send_email($_POST['usermame'], "Welcome ".  $_POST['fullname'], "Hello world, this is  a new email");

    header('Location: page2.php');
    exit;
}

?>
<html>
    <head>
        <title>Learning how to use Session</title>
    </head>
    <body>
        <form name="test" method="POST">
        <input name="fullname" type="text" placeholder="Fullname">    
        <input name="usermame" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <input name="seeme" type="hidden" value="secret">
            <input name="submit" type="submit" value="Submit">
        </form>
    </body>
</html>