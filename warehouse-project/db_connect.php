<!-- for check host connected -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywarehouse";

// Crate Connection//
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection//
if (!$conn) {
    die("Connection failed." . mysqli_connect_error());
}

?>