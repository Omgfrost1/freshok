<section class="modal">
    <div class="container">
        <div class="modal__links">
            <a class="modal__link modal__link--active" href="register.php">Регистрация</a>
            <a class="modal__link" href="login.php">Логин</a>
        </div>

        <form class="modal__form" action="#">
            <label class="modal__label">
                Имя пользователя или эл. почта*
                <input class="modal__input" type="text" required>
            </label>

            <label class="modal__label">
                Пароль*
                <input class="modal__input" type="password" required>
            </label>

            <p class="modal__text">
                Пароль будет направлен на указанную Вами почту
            </p>
            <p class="modal__text">
                Ваши личные данные будут использоваться для обработки вашего заказа, поддержки вашего опыта на
                этом веб-сайте и для других целей, описанных в нашей <a href="#">политике конфиденциальности</a>
            </p>

            <label class="modal__label">
                <input type="checkbox">
                Согласен с условиями
            </label>

            <button class="modal__btn" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</section>