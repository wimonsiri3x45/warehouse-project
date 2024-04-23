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
        <div class="left-side">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <p>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <?php
            include("product.php");
            $sql = "SELECT * FROM storage";
            $result = mysqli_query($conn, $sql);
            ?>
        </div>

        <div class="right-side1">
            <h2>CHECK IN</h2>
            <form action="db_checkin.php" method="post">
                <!-- <div class="checkin-box"> -->
                <lable for="product-id">Product ID</lable>
                <input type="text" name="Product-id" placeholder="product id" required>
                <br>
                <lable for="storage-id">Product Name</lable>
                <input type="text" name="product-name" placeholder="product name" required>
                <!-- </div> -->
                <div>
                    <button class="show-popup btn2" type="submit" name="checkin-submit">
                        <p>Submit</p>
                    </button>
                </div>
            </form>
        </div>
        <!-- pop up
        <div class="popup-container">
            <div class="popup-box">
                <h3>Check in</h3>
                <p>คุณต้องการ <b>'Check in'</b> ใช่หรือไม่</p>
                <form action="db_checkin.php" method="post">
                    <div>
                        <button class="cancle-btn" type="button">Cancle</button>
                        <button class="btn2" id="checkin-check" type="submit">Check in</button>
                    </div>
                </form> -->
    </div>
    </div>

    </div>
    <!-- js scripts -->
    <script src="js/script.js"></script>
