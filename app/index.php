<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фрешок</title>
  <link rel="icon" href="images/icon/home.svg">
  <link rel="stylesheet" href="css/index.min.css">
</head>

<body>
  <?php include("module/_header/_header.php"); ?>


  <main class="main">

    <?php include("module/_top-slider/_top-slider.php");
     include("module/_advantages/_advantages.php");
     include("module/_product/_product.php");
     include("module/_banners/_banners.php");
     include("module/_stock/_stock.php");
     include("module/_blog/_blog.php"); ?>






  </main>

  <?php include("module/_footer/_footer.php"); ?>

  <script src="js/main.min.js"></script>
</body>

</html>