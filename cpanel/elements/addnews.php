<?php
    require_once 'mysqli.php';

    if (isset($_POST['addnews'])) {
        $titlenews = $_POST['titlenews'];
        $textnews = $_POST['textnews'];
        $authornews = $_POST['authornews'];
        $date_ma1 = date("Y-m-d H:m:s");

        mysqli_query($mysqli, "INSERT INTO `news` (`id`, `title`, `text`, `author`, `date`) VALUES (NULL, '$titlenews', '$textnews', '$authornews', '$date_ma1')");
    
        mysqli_close($mysqli); 
        header("Location: ".$_SERVER['HTTP_REFERER']);
    } 
?>