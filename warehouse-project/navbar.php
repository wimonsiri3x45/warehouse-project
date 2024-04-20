<div class="navbar">
    <div class=logo-nav><a href="home.php">Warehouse</a></div>
    <div class="boxbar">
        <button class="nav-item <?php if ($page == "checkin") { ?>active<?php } ?>"><a href="checkin.php"> Check in</a></button>
        <button class="nav-item <?php if ($page == "checkout") { ?>active<?php } ?>"><a href="checkout.php"> Check out</a></button>
        <button class="nav-item"><a href="db_logout.php">Logout</a></button>
    </div>
</div>