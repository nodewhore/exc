<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cp-card">
                    <h1>Список новостей</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Автор</th>
                            <th scope="col">Дата создания</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php include 'elements/news.php';?>
                        </tbody>
                    </table>
                </div>

                <div class="cp-card">
                    <h1>Добавить новость</h1>
                    <form action="elements/addnews.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Название новости</label>
                            <input name="titlenews" type="text" class="form-control" placeholder="Название новости">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Текст новости</label>
                            <textarea name="textnews" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Автор</label>
                            <input name="authornews" type="text" class="form-control" placeholder="Никнейм автора">
                        </div>

                        <div class="d-grid gap-2">
                            <button name="addnews" class="btn btn-primary" type="submit">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
    <h1>Пользователи</h1>
            <div class="col-md-6">
                <div class="cp-card">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Логин</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Дата регистрации</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php include 'elements/users.php';?>
                        </tbody>
                    </table>
                </div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">mail</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <h1>Подписки</h1>
    <?php
    
  require_once 'template/com/connect.php';
 $sql = mysqli_query($mysqli, 'SELECT `id`, `firstname`, `email`, `date_add` FROM `subscribe`');
 $sql=mysqli_fetch_all($sql);    
 foreach($sql as $sql){
?>
      <th scope="row"><?=$sql[0]?></th>
      <td><?=$sql[1]?></td>
      <td><?=$sql[2]?></td>
      <td><?=$sql[3]?></td>
      <td><a style="color: red;" href="delete_mail.php?id=<?= $sql[0]?>">X</a></td>
    </tr>
    <?php
 }
  ?>
  </tbody>
</table>
              
        </div>
    </div>
</body>
</html>