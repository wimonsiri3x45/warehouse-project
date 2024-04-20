<?php
session_start();
include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
</head>

<body>
    <div class="bg-space1">
        <div class="box-signin">
            <a href="index.php" style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg></a>
            <div>
                <form action="db_login.php" method="post" name="login_form">
                    <h2>sign in</h2>
                    <?php if (isset($_SESSION['errors'])) : ?>
                        <div class="errors">
                            <p>
                                <?php
                                echo $_SESSION['errors'];
                                unset($_SESSION['errors']);
                                ?>
                            </p>
                        </div>
                    <?php endif ?>
                    <div>
                        <div class="form-container">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" placeholder="username.." required>
                        </div>
                        <div>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" placeholder="password.." required>
                        </div>

                    </div>

                    <div class="btn1">
                        <button type="submit" name="signin-submit" class="btn">Sign In</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>