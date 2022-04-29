<?php
    $mysqli = mysqli_connect('localhost', 'e95077bm_borhim', 'Root12', 'e95077bm_borhim')->set_charset("UTF8");
    if (!$mysqli) {
        echo "Ошибка подключения к БД";
    }
?>