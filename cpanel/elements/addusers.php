<?php
    require_once 'mysqli.php';

    if (isset($_POST['addusers'])) {
        $addlogin = $_POST['login1'];
        $addfirstname = $_POST['firstname1'];
        $addlastname = $_POST['lastname1'];
        $addemail = $_POST['email1'];
        $addpassword = $_POST['password1'];
        $addbirthday = $_POST['date_birthday1'];
        $date_ma2 = date("Y-m-d H:m:s");

        mysqli_query($mysqli, "INSERT INTO `users` (`id`, `login`, `firstname`, `lastname`, `email`, `password`, `date_birthday`, `date_reg`) VALUES (NULL, '$addlogin', '$addfirstname', '$addlastname', '$addemail', '$addpassword', '$addbirthday', '$date_ma2')");
    
        mysqli_close($mysqli); 
        header("Location: ".$_SERVER['HTTP_REFERER']);
    } 
?>