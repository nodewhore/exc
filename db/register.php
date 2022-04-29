<?php
    require_once 'connect.php';

    if (isset($_POST['register'])) {
        $login_m2 = $_POST['login_m2'];
        $firstname_m1 = $_POST['firstname_m2'];
        $lastname_m1 = $_POST['lastname_m2'];
        $email_m2 = $_POST['email_m2'];
        $password_m2 = $_POST['password_m2'];
        $date_m2 = $_POST['date_m2'];
        $datereg = date("Y-m-d H:m:s");

        mysqli_query($mysqli, "INSERT INTO `users` (`id`, `login`, `firstname`, `lastname`, `email`, `password`, `date_birthday`, `date_reg`) VALUES (NULL, '$login_m2', '$firstname_m2', '$lastname_m2', '$email_m2', '$password_m2', '$date_m2', '$datereg')");
    
        mysqli_close($mysqli); 
        echo "Регистрация прошла успешно!";
    } 
?>