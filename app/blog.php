<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фрешок</title>
  <link rel="stylesheet" href="css/blog.min.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

  <?php include("module/_header/_header.php"); ?>

  <main class="main">

    <section class="top">
      <div class="container">
        <h2 class="title">Новости</h2>
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="index.php" class="breadcrumbs__link">Главная</a>
            </li>

            <li class="breadcrumbs__item">
              <span href="#" class="breadcrumbs__link">Все записи</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="blog-page">
      <div class="container">
        <div class="blog-page__inner">
          <div class="blog-page__content">
            <div class="blog-page__item">
              <a class="blog-page__item-link" href="#">
                <img class="blog-page__img" src="images/blog/1-big.jpeg" alt="blog img">
              </a>
              <div class="blog-page__item-box">
                <h4 class="blog-page__item-title">
                  <a class="blog-page__item-link" href="#">
                    В чем полезность свежых овощей
                  </a>
                </h4>
                <p class="blog-page__item-text">Далеко-далеко за словесными горами в стране гласных и
                  согласных, живут рыбные тексты. Инициал по всей домах, от всех пунктуация там
                  семантика мир всемогущая напоивший, своего однажды родного ему семь, своих свой свое
                  предложения запятой.</p>
              </div>
            </div>

            <div class="blog-page__item">
              <a class="blog-page__item-link" href="#">
                <img class="blog-page__img" src="images/blog/2-big.jpeg" alt="blog img">
              </a>
              <div class="blog-page__item-box">
                <h4 class="blog-page__item-title">
                  <a class="blog-page__item-link" href="#">
                    В чем полезность свежых овощей
                  </a>
                </h4>
                <p class="blog-page__item-text">Далеко-далеко за словесными горами в стране гласных и
                  согласных, живут рыбные тексты. Инициал по всей домах, от всех пунктуация там
                  семантика мир всемогущая напоивший, своего однажды родного ему семь, своих свой свое
                  предложения запятой.</p>
              </div>
            </div>

            <div class="blog-page__item blog-page__item--slider">
              <div class="blog-page__slider">
                <img class="blog-page__img" src="images/blog/3-big.jpeg" alt="blog img">
                <img class="blog-page__img" src="images/blog/2-big.jpeg" alt="blog img">
                <img class="blog-page__img" src="images/blog/1-big.jpeg" alt="blog img">
              </div>
              <div class="blog-page__item-box">
                <h4 class="blog-page__item-title">
                  <a class="blog-page__item-link" href="#">
                    В чем полезность свежых овощей
                  </a>
                </h4>
                <p class="blog-page__item-text">Далеко-далеко за словесными горами в стране гласных и
                  согласных, живут рыбные тексты. Инициал по всей домах, от всех пунктуация там
                  семантика мир всемогущая напоивший, своего однажды родного ему семь, своих свой свое
                  предложения запятой.</p>
              </div>
            </div>

            <div class="blog-page__item blog-page__item--no-image">
              <div class="blog-page__item-box">
                <h4 class="blog-page__item-title">
                  <a class="blog-page__item-link" href="#">
                    В чем полезность свежых овощей
                  </a>
                </h4>
                <p class="blog-page__item-text">Далеко-далеко за словесными горами в стране гласных и
                  согласных, живут рыбные тексты. Инициал по всей домах, от всех пунктуация там
                  семантика мир всемогущая напоивший, своего однажды родного ему семь, своих свой свое
                  предложения запятой.</p>
              </div>
            </div>
          </div>

          <div class="blog-page__aside">

            <div class="filter-search filter__item">
              <h3 class="filter__title">Поиск</h3>
              <form class="filter-search__form" action="#">
                <input class="filter-search__input" type="text" placeholder="Введите название товара...">
                <button class="filter-search__btn" type="submit">
                  <img src="images/icon/icon-search__white.svg" alt="search images">
                </button>
              </form>
            </div>

            <div class="person">
              <img class="person__img" src="images/avatar/ceo.jpeg" alt="ceo avatar">
              <div class="person__name">
                Олег Газманов
              </div>
              <div class="person__position">
                Директор & Основатель
              </div>
              <p class="person__text">
                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                Запятой путь языкового которое букв переулка необходимыми единственное, деревни оксмокс.
              </p>
            </div>

            <div class="latest-post">
              <h4 class="latest-post__title">
                Последние новости
              </h4>

              <div class="latest-post__item">
                <a class="latest-post__img-link" href="#">
                  <img class="latest-post__img" src="images/blog/1.jpg" alt="post">
                </a>
                <div class="latest-post__box">
                  <a class="latest-post__box-title" href="#">
                    Далеко-далеко за словесными горами в стране.
                    <span class="latest-post__box-date">18.05.2022</span>
                  </a>
                </div>
              </div>

              <div class="latest-post__item">
                <a class="latest-post__img-link" href="#">
                  <img class="latest-post__img" src="images/blog/2.jpg" alt="post">
                </a>
                <div class="latest-post__box">
                  <a class="latest-post__box-title" href="#">
                    Далеко-далеко за словесными горами в стране.
                    <span class="latest-post__box-date">19.05.2022</span>
                  </a>
                </div>
              </div>

              <div class="latest-post__item">
                <a class="latest-post__img-link" href="#">
                  <img class="latest-post__img" src="images/blog/3.jpg" alt="post">
                </a>
                <div class="latest-post__box">
                  <a class="latest-post__box-title" href="#">
                    Далеко-далеко за словесными горами в стране.
                    <span class="latest-post__box-date">22.05.2022</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="filter__item filter-category">
              <h3 class="filter__title">Категории</h3>
              <form class="filter-category__form" action="#">
                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox">
                  <div class="filter-category__checkbox">
                    <span>Фрукты</span>
                    <span>6</span>
                  </div>
                </label>

                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox">
                  <div class="filter-category__checkbox">
                    <span>Овощи</span>
                    <span>2</span>
                  </div>
                </label>

                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox" checked>
                  <div class="filter-category__checkbox">
                    <span>Напитки</span>
                    <span>2</span>
                  </div>
                </label>

                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox">
                  <div class="filter-category__checkbox">
                    <span>Мясо</span>
                    <span>1</span>
                  </div>
                </label>

                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox">
                  <div class="filter-category__checkbox">
                    <span>Рыба</span>
                    <span>1</span>
                  </div>
                </label>

                <label class="filter-category__label">
                  <input class="filter-category__input" type="checkbox">
                  <div class="filter-category__checkbox">
                    <span>Бакалея</span>
                    <span>2</span>
                  </div>
                </label>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>


  </main>

  <?php include("module/_footer/_footer.php"); ?>
  
  <script src="js/main.min.js"></script>
</body>

</html>