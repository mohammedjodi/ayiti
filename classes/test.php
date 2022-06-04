<?php

    include('Man.php');
    include('Boy.php');
    include('Notification.php');

    $great = new Boy();
    echo $great->legs;
    $great->run();

