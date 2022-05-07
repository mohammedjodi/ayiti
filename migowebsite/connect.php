<?php

    $server = '';
    $username = '';
    $password = '';
    $db = '';

    $blessing = mysqli_connect($server, $username, $password, $db);
    
    if (!$blessing) {
        die("Database is not connected. Error:" . mysqli_connect_error());
    }