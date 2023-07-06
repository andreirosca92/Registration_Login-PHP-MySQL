<?php
// Change this to your connection info.
$host = "127.0.0.1";
$user = "root";
$password = "xxx";
$db = "tutorial_mysql";

$connessione = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
