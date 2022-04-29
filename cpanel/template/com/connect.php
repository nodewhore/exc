<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'zavod');
    if (!$mysqli) {
        echo "Ошибка подключения к БД";
    }
?>