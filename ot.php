<?php
require_once ('db/connect.php');
  $name=$_POST['name'];
  $comment=$_POST['comment'];
  $today = date("d.m.y");
  $addcomment=mysqli_query($mysqli,"INSERT INTO `otzivi` (`id`, `autor`, `text`, `date`) VALUES (NULL, '$name', '$comment', '$today')");
  if(!$addcomment){
      print_r('Ошибка');
  }
  else{
    header('Location: /tajicums/otzivi.php');
  }
  ?>