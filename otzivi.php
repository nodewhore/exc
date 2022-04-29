<?php
require_once ('db/connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>О нас</title>
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
    <h1>Отзывы</h1>

        <ul class="media-list">
        <div class="comments">
  <?php
      require_once ('db/connect.php');
       $sql = mysqli_query($mysqli, "SELECT `autor`, `text`, `date` FROM `otzivi`");
       $sql=mysqli_fetch_all($sql);    
       foreach($sql as $sql){
      ?>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object img-rounded" width="100px" src="kartinki/avatar.png" alt="123">
        </a>
      </div>
      <div class="media-body">
        <div class="media-heading">
          <div class="author"><?=$sql[0]?></div>
            <div class="metadata">
              <span class="date"><?=$sql[2]?></span>
            </div>
          </div>
          <div class="media-text text-justify"><?=$sql[1]?></div>
          <div class="footer-comment">

          </div>

          <div class="media">

            <div class="media-body">

              <div class="media-text text-justify"></div>
</div>
<hr class="featurette-divider">
<?php
       }
       ?>
    </div>
</div>

        <h4>Добавить отзыв</h4>
        <h3>Добавить комментарий</h3>
    <form action="ot.php" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Ваше имя:</label>
  <input type="text" name="name"  class="form-control" required>
  <label for="exampleFormControlTextarea1" class="form-label">Текст комментария:</label>
  <input type="text" class="form-control" name="comment" size="200" required>
  <br>
  <button type="submit" class="btn btn-primary">Отправить</button>
  <button type="reset" class="btn btn-primary">Очистить</button>
  <br>
</form>
</div>
</div>
      </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021 ХИММАШ</span>
        </div>
      </footer>
</body>
</html>
