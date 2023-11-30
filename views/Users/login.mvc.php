{% extends "base.mvc.php" %}

{% block title %}Авторизация{% endblock %}

{% block body %}

<section class="main-page_main">
    <div class="main-page_register">
        <h3>Авторизация</h3>
        <div class="main-page_form">
            <form class="main-page_ness" action="/login" method="POST">
                <div class="main-page_field">
                    <span>Логин</span>
                    <input type="text" name="login" id="" placeholder="qwerty">
                </div>
                <div class="main-page_field">
                    <span>Пароль</span>
                    <input type="password" name="password" id="" placeholder="qwerty">
                </div>
                <span>Если нет аккаунта - <a href="/registerForm"><u>Зарегистрироваться</u></a></span>
                <button class="main-page_register-btn">Войти</button>
            </form>
        </div>
    </div>
</section>

{% endblock %}