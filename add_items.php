<?php
require_once 'DataBase/connection.php';


    $result = $link->query("SELECT * FROM `items`");
?>

<html>
<head>
    <link href="nav.css" rel="stylesheet">
</head>
<html>
<head>
    <meta charset="utf-8">
    <title>Minishop</title>
    <link rel='shortcut icon' type='image/x-icon' href='resources/Sessel-coloured.png'/>
    <link rel="stylesheet" type="text/css" href="nav.css"/>
    <link rel="stylesheet" type="text/css" href="table.css"/>
    <link rel="stylesheet" type="text/css" href="form.css"/>
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
            <td>
                ID
            </td>
            <td>
                Title
            </td>
            <td>
                Description
            </td>
            <td>
                Price
            </td>
            <td>
                url
            </td>
            <td>
                Cat
            </td>

        </tr>
        <?php
        while ($res = mysqli_fetch_assoc($result)):?>
            <tr class="<?php echo $res['id'];?>">
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['description']; ?></td>
                <td><?php echo $res['price']; ?></td>
                <td><?php echo $res['img']; ?></td>
                <td><?php echo $res['cat']; ?></td>
            </tr>
        <?php endwhile ?>
    </table>
    <p>
    <div class="sign-in">
    <form action="DataBase/item_into_db.php" method="post">
        Add new items:
        <br>
        Title: <input type="text" name="new_title">
        <br>
        Description: <input type="text" name="new_desc">
        <br>
        Image: <input type="text" name="url">
        <br>
        Price: <input type="number" name="price">
        <br>
        Category: <input type="number" name="cat">
        <br>
        <input type="submit" name="new_sub" value="Add">

    </form>
    </div>
</body>
</html>
