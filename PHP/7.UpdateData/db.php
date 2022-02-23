<?php

    $connection = mysqli_connect("localhost", "root", "","userdata");
    if(!$connection)
    {
        die("Database Connection failed");
    }

?>