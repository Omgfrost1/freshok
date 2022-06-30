<section class="modal">
    <div class="container">
        <div class="modal__links">
            <a class="modal__link" href="register.php">Регистрация</a>
            <a class="modal__link modal__link--active" href="login.php">Логин</a>
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

            <label class="modal__label">
                <input type="checkbox">
                Запомнить меня
            </label>

            <button class="modal__btn" type="submit">Войти в аккаунт</button>
            <a class="modal__error" href="#">Забыли пароль?</a>
        </form>
    </div>
</section>