<?php

    $connection = mysqli_connect("localhost", "root", "", "user");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "user");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

 $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "user";
   $db = new mysqli($hostname, $username, $password, $dbname);

?>