<?php
session_start();
include('db_connect.php');
// check login? //
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

$sql = "SELECT * FROM user ";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
</head>

<body>

    <?php
    include("navbar.php");
    ?>

    <div class="content">
        <!-- noti message -->
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

        <!--popup-->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome ,<b><?php echo $_SESSION['username']; ?></b></p>
        <?php endif ?>
        <!--end popup-->
        <h1>Database - Admin</h1>

        <div class="table-container">
            <table id="admin-db" class="active">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Create_at</th>
                    <th>Update_at</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>
    <!-- js scripts -->
    <script src="js/script.js"></script>
</body>

</html>