<?php
require_once('db/connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$date=date("d.m.y");
$add=mysqli_query($mysqli, "INSERT INTO `subscribe` (`id`, `firstname`, `email`, `date_add`) VALUES (NULL, '$name', '$email', '$date')");
header('Location: http://localhost/tjcums/index.php');
?>