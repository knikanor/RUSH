<?php
    require_once 'DataBase/connection.php';

    $result = $link->query("SELECT * FROM `user`");

    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Minishop</title>
    <link rel='shortcut icon' type='image/x-icon' href='resources/Sessel-coloured.png'/>
    <link rel="stylesheet" type="text/css" href="nav.css"/>
    <link rel="stylesheet" type="text/css" href="table.css"/>
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
</div>
    <table>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Role</th>
        </tr>
        <?php

        while ($res = mysqli_fetch_assoc($result)) {
            print "<tr>";
            print "<td>";
            print $res['id'];
            print "</td>";
            print "<td>";
            print $res['login'];
            print "</td>";
            print "<td>";
            print $res['role'];
            print "</td>";
            print "</tr>";
        }

        ?>
        <tr>
            <td>1</td>
            <td>ypikul</td>
            <td>user</td>
        </tr>
    </table>

</body>
</html>