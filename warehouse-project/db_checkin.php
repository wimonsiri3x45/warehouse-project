<?php
session_start();

// check login? //
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

include "db_connect.php";
$storage_ID = $_POST['storage_ID'];
$storage_productID = $_POST['storage_productID'];
$storage_Name = $_POST['storage_Name'];
$storage_Status = $_POST['storage_Status'];

$sql = "UPDATE storage SET storage_Name='$storage_Name',storage_Status='$storage_Status' WHERE storage_ID='$storage_ID'";
