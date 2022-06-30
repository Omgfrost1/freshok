<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фрешок</title>
  <link rel="stylesheet" href="css/contacts.min.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
  <?php include("module/_header/_header.php"); ?>

  <main class="main">

    <section class="top">
      <div class="container">
        <h2 class="title">Контакты</h2>
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="index.php" class="breadcrumbs__link">Главная</a>
            </li>

            <li class="breadcrumbs__item">
              <span href="#" class="breadcrumbs__link">Наши контакты</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container">
        <div id="map"></div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="contact__inner">
          <div class="contact__info">
            <h3 class="contact__info-title">Не стесняйтесь связаться с нами</h3>
            <p class="contact__info-text">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Она,
              собрал пор повстречался диких переписали маленькая ты если несколько однажды жизни до свой
              заглавных текст то грустный, эта ведущими?
            </p>

            <ul class="contact__info-list">
              <li class="contact__info-item">
                <a class="contact__info-phone " href="tel:+79100778154">+7-910-077-81-54</a>
                <a class="contact__info-phone " href="tel:+79100778154">+7-910-077-81-54</a>
              </li>
              <li class="contact__info-item">
                Россия, Тамбовская область <br>
                г. Тамбов, ул. Агапкина 53
              </li>
              <li class="contact__info-item">
                <a class="contact__info-mail" href="mailto:dostavkaproduct@yandex.ru">dostavkaproduct@yandex.ru</a>
                <a class="contact__info-mail" href="mailto:dostavkaproduct@yandex.ru">dostavkaproduct@yandex.ru</a>
              </li>
            </ul>
          </div>

          <form class="contact__form" action="#">
            <h3 class="contact__form-title">Обратная связь</h3>
            <div class="contact__form-box">
              <input class="contact__form-input" type="text" placeholder="Ваше имя">
              <input class="contact__form-input" type="text" placeholder="Ваша эл. почта">
            </div>
            <input class="contact__form-input" type="text" placeholder="Тема обращения">
            <textarea class="contact__form-textarea" placeholder="Ваше сообщение"></textarea>
            <button class="btn" type="submit">Отправить сообщение</button>
          </form>
        </div>
      </div>
    </section>

  </main>

  <?php include("module/_footer/_footer.php"); ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly" defer>
  </script>
  <script src="js/main.min.js"></script>
</body>

</html>