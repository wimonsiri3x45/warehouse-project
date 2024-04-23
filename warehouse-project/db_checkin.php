<?php
session_start();

// check login? //
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

include "db_connect.php";

if (isset($_POST['checkin-submit'])) {
    $product_ID = mysqli_real_escape_string($conn, $_POST['Product-id']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product-name']);

    $sql = "INSERT INTO product (productID, productName) VALUES ('$product_ID','$product_name')";
    mysqli_query($conn, $sql);

    header('location: checkin.php');
    $_SESSION['success'] = "Check in successfully!";

    // if (){ ถ้ามีเงื่อไขcheck ห้ามซ้ำ 
    //     header('Location: checkin.php');
    // $_SESSION['errors'] = "Check in Unsuccessfully!";
    // }
}

// $storage_ID = $_POST['storage_ID'];
// $storage_productID = $_POST['storage_productID'];
// $storage_Name = $_POST['storage_Name'];
// $storage_Status = $_POST['storage_Status'];

// $sql = "UPDATE storage SET storage_Name='$storage_Name',storage_Status='$storage_Status' WHERE storage_ID='$storage_ID'";
