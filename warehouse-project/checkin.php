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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <div class="navbar">
        <div class=logo-nav><a href="home.php">Warehouse</a></div>
        <div class="boxbar">
            <button class="nav-item active"><a href="checkin.php"> Check in</a></button>
            <button class="nav-item "><a href="checkout.php"> Check out</a></button>
            <button class="nav-item"><a href="db_logout.php">Logout</a></button>

        </div>
    </div>

    <div class="space2">

        <?php
        include("product.php");
        ?>

        <div class="right-side1">
            <div>
                <button class="show-popup" type="button">
                    <p>check in</p>
                </button>
            </div>
        </div>
        <!-- pop up -->
        <div class="popup-container">
            <div class="popup-box">
                <h3>Check in</h3>
                <p>คุณต้องการ <b>'Check in'</b> ใช่หรือไม่</p>
                <form action="db_checkin.php" method="post">
                    <div>
                        <button class="cancle-btn" type="button">Cancle</button>
                        <button class="btn2" id="checkin-check" type="submit">Check in</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- js scripts -->
    <script src="js/script.js"></script>