<?php
require_once('connect.php');
$login=$_POST['login_m2'];
$passwd=$_POST['password_m2'];
$check_user = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$passwd'");
$log=mysqli_num_rows($check_user);

if($log==1)
{
    header('Location: http://tajicums/cpanel/admin.php');
}
else
echo 'Неверный логин или пароль';
?>