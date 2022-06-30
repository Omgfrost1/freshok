<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фрешок</title>
  <link rel="stylesheet" href="css/register.min.css">
</head>

<body>
  <?php include("module/_header/_header.php"); ?>
  <main class="main">

    <section class="top">
      <div class="container">
        <h2 class="title">Регистрация</h2>
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="index.php" class="breadcrumbs__link">Главная</a>
            </li>

            <li class="breadcrumbs__item">
              <span href="#" class="breadcrumbs__link">Регистрация</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <?php include("module/_register/_register.php"); ?>

  </main>

  <?php include("module/_footer/_footer.php"); ?>

  <script src="js/main.min.js"></script>
</body>

</html>