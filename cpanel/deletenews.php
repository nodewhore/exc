<?php
require_once('connect.php');
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM `news` WHERE `news`.`id` = '$id'");
header('Location: http://localhost/tajicums/cpanel/admin.php');
?>