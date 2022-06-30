<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фрешок</title>
  <link rel="stylesheet" href="css/404.min.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

  <?php include("module/_header/_header.php"); ?>

  <main class="main">
    <section class="page-404">
      <div class="container">
        <div class="page-404__inner" style="background-image: url(images/404.png)">
          <div class="page-404__info">
            <h2 class="page-404__title">Что-то пошло не так</h2>
            <p class="page-404__text">
              К сожалению, запрашиваемая страница не найдена. Возможно, вы перешли по ссылке, в которой
              была допущена ошибка, или ресурс был удален. Попробуйте перейти на главную страницу.
            </p>
            <a href="index.php" class="btn">Вернуться на главную</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("module/_footer/_footer.php"); ?>

  <script src="js/main.min.js"></script>
</body>

</html>