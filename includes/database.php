<?php

//params to conenct to a database
$dbHost = "localhost:3307";
$dbUser = "root";
$dbPass = '';
$dbName = "pcpwbs";


//connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed");
}

?>