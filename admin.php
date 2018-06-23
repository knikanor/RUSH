<?php
session_start();
if ($_SESSION['role'] != "1") {
    header("Location: ../DataBase/sign_in.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin page</title>
    <link href="nav.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img src="resources/image1.jpg">
        <img src="resources/logo1.png">
        <img src="resources/image3.jpg">
    </div>
    <div class="menu">
        <a href="index.php" class="brand"><img src="resources/logo.png"></a>
        <nav>
            <ul>
                <li><a href="users.php">Users</a></li>
                <li><a href="add_items.php">Add Items</a></li>
            </ul>
        </nav>
        <div>
            <?php


            ?>
        </div>
    </div>

    </body>

</ul>
</body>
</html>
