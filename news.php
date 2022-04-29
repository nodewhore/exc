<?php
require_once ('db/connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Новости</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stili.css">
    </head>
<body>
<header class="nav fixed-top">
            <p class="zavod">БОРХИММАШ</p>
        <ul class="menu ">
            <li><a href="index.php" class="actives">Главная</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="otzivi.php">Отзывы</a></li>
            <li><a href="about.html" >О нас</a></li>
            <li><a href="contakti.html">Контакты</a></li>
            <li><a href="tovari.html">Товары</a></li>
            </ul>
        <ul class="sign">
            <li class="sign"><a href="login.html">Войти</a></li>
            <li class="sign"><a href="register.html">Регистрация</a></li>
        </ul>    
    </header>
<div class="header-image">
    <img src="kartinki/header.jpg" class="headimg" alt="header">
</div>
<div class="container">
  <div class="row">
<?php
require_once('db/connect.php');
$sql = mysqli_query($mysqli, 'SELECT `title`, `text`, `author` ,`date`, `date` FROM `news`');
$sql=mysqli_fetch_all($sql);    
foreach($sql as $sql){
?>

  <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?=$sql[0]?></strong>
          <h3 class="mb-0"><?=$sql[1]?></h3>
          <p class="card-text mb-auto"><?=$sql[3]?></p>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
    <?php
       }
       ?>
  </div>
</div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021 БОРХИММАШ</span>
        </div>
      </footer>
</body>
</html>