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
    <?php
    $page = "checkin";
    include("head.php");
    ?>
</head>

<body>

    <?php
    include "navbar.php";
    ?>

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