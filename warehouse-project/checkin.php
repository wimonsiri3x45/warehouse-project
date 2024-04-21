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
        $sql = "SELECT * FROM storage";
        $result = mysqli_query($conn, $sql);

        ?>

        <div class="right-side">
            <h2>CHECK IN</h2>
            <form action="db_checkin.php" method="post">
                <lable for="product-id">Product ID</lable>
                <select name="Product-id" id="product-id">
                    <option value="">Choose...</option>

                </select>
                <br>
                <lable for="storage-id">Storage ID</lable>
                <select name="storage-id" id="storage-id">
                    <option value="">Choose...</option>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?= $row["storage_Name"]; ?>"><?= $row["storage_Name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <div>
                    <button class="show-popup btn2" type="submit">
                        <p>Submit</p>
                    </button>
                </div>
            </form>
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