<?php
session_start();
include('db_connect.php');

// check login? //
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMATIC WAREHOUSE</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <div class=logo-nav><a href="home.php">Warehouse</a></div>
        <div class="boxbar">
            <button class="nav-item "><a href="checkin.php"> Check in</a></button>
            <button class="nav-item active"><a href="checkout.php"> Check out</a></button>
            <button class="nav-item"><a href="db_logout.php">Logout</a></button>
        </div>
    </div>

    <div class="space2">

        <?php
        include("product.php");
        ?>

        <div class="right-side">
            <h2>CHECK OUT</h2>
            <form action="checkout.php" method="post">
                <lable for="product-id">Product ID</lable>
                <select name="Product-id" id="product-id">
                    <option value="">Choose...</option>
                    <option value="red">61000</option>
                    <option value="blue">45000</option>
                    <option value="green">27000</option>
                </select>
                <br>
                <lable for="product-color">Product Color</lable>
                <select name="Product-color" id="product-color">
                    <option value="">Choose...</option>
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>

                </select>
                <div>
                    <button class="btn2" type="submit">
                        <p>Submit</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- js scripts -->
    <script src="js/script.js"></script>