<?php

session_start();

echo "Hi " . $_SESSION['fname'];
echo "<br />";
echo "Here are your information";
echo "<br />";
echo "Username: " . $_SESSION['user'];
echo "<br />";
echo "Password: " . $_SESSION['pass'];