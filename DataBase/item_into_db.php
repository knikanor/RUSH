<?php
/**
 * Created by PhpStorm.
 * User: knikanor
 * Date: 6/24/18
 * Time: 12:02 AM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'connection.php';

if (isset($_POST['new_title']) && isset($_POST['new_desc']) && isset($_POST['url']) &&
    isset($_POST['price']) && isset($_POST['cat']) && $_POST['new_sub'] == "Add") {
    $name = $_POST['new_title'];
    $desc = $_POST['new_desc'];
    $img = $_POST['url'];
    $price = $_POST['price'];
    $cat = $_POST['cat'];
    $link->query("INSERT INTO `items` (`name`, `description`, `price`, `img`, `cat`) VALUES ('$name', '$desc', $price, '$img', $cat)");

    print(mysqli_error($link));
    header("Location: ../add_items.php");
}