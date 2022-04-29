<?php
require_once ('db/connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Сайт Борхиммаш</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stili.css">
    </head>
<body>
    <header class="nav fixed-top">
            <p class="zavod" style="text-transform:uppercase; padding-right:60px;">Борхиммаш</p>
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
        <h1>АО БОРХИММАШ</h1>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="kartinki/title.jpg" width="100%" height="400px" alt="">
            
                    <div class="container">
                    </div>
                  </div>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
</div>
<div class="container">
    <div class="row">
<div class="mylist">
        <div class="title-number">
         <p>34175</p>
        </div>
            <div class="list-text">
             <p>место по выручке в России</p>
            </div>
    </div>
    <div class="mylist">
        <div class="title-number">
         <p>5554</p>
        </div>
            <div class="list-text">
             <p>место по выручке в регионе Воронежская область</p>
            </div>
    </div>
    <div class="mylist">
        <div class="title-number">
         <p>44482</p>
        </div>
            <div class="list-text">
             <p>место по выручке в отрасли "Обрабатывающие производства"</p>
            </div>
            </div>
            <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Выручка БОРХИММАШ</h2>
        <p class="lead">Выручка «Борхиммаш» в 2017-м составила 1,605 млрд рублей, чистая прибыль – 580 тыс. рублей. По данным «СПАРК-Интерфакс», предприятие в том году уплатило 138,17 млн рублей налогов, в том числе 68,5 млн рублей НДС, 5,64 млн рублей земельного налога, 3,11 млн рублей имущественного налога и 60,84 млн рублей взносов в Пенсионный фонд, фонд ОМС и взносов на социальное страхование.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="kartinki/2.jpg" alt="rez1" width="490px"> 
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">РЕГИОНАЛЬНЫЙ ЦЕНТР «ВОРОНЕЖ» БОРХИММАШ (РЦ ВОРОНЕЖ)</h2>
        <p class="lead">Включает в себя две производственные площадки в г.Воронеж (3-е производство) и в г.Борисоглебск, Воронежской обл. (7-ое производство). Бухгалтерия, отделы маркетинга и снабжения расположены в региональном центре в Воронеже.</p>
      </div>
      <div class="col-md-5">
      <img src="kartinki/02.jpg" alt="rez1" height="400px" width="490px">
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">РУКОВОДИТЕЛЬ ВОРОНЕЖСКОГО ЗАВОДА&nbsp; ПОЛУЧИЛ НАГРАДУ ОТ ГУБЕРНАТОРА РЕГИОНА</h2>
        <p class="lead">Коммерческий директор воронежского завода Артем Чекмарев получил грамоту от губернатора Воронежской области Александра Гусева. Вручение награды состоялось накануне празднования Дня строителя в четверг, 6 августа.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="kartinki/3.jpg" alt="rez1" width="490px"> 
      </div>
    </div>
            <h4>Подписаться на рассылку</h4>
  <form action="rassilka.php" method="post">
  <label for="exampleFormControlTextarea1" class="form-label">Ваше ФИО</label>
  <input type="text" name="name" class="form-control" placeholder="ФИО" required>
  <br>
  <label for="exampleFormControlInput1" class="form-label">Почтовый адрес</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
 <br>
  <button type="submit" class="btn btn-primary">Подписаться</button>
  </form>
</div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021 БОРХИММАШ </span>
          <span> ООО "БОРХИММАШ"</span>
        </div>          
 
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>







