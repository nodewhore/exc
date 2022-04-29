<?php
    require_once 'mysqli.php';

    if ($result = mysqli_query($mysqli, "SELECT * FROM `news`")) {
        while ($newsadm = $result->fetch_array()) {
            include("./template/com/news.html");
        }
    }
?>