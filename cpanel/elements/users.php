<?php
    require_once 'mysqli.php';

    if ($result = mysqli_query($mysqli, "SELECT * FROM `users`")) {
        while ($usersadm = $result->fetch_array()) {
            include("./template/com/users.html");
        }
    }
?>