<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% yield title %}</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>
<header>
    <!--    добавить ссылку-->
    <a href="/" class="header_logo">
        Logo
    </a>
    <div class="header_contacts">
        <div>
            <p>Контактная информация</p>
            <p>+7123456789</p>
        </div>
    </div>
</header>

<!--добавить ссылки-->
<nav>
    <a href="" class="nav_buttons">Каталог</a>
    <a href="" class="nav_buttons">Акции</a>
    <a href="" class="nav_buttons">Услуги</a>
    <a href="" class="nav_buttons">Контакты</a>
    <a href="/posts"class="nav_buttons">Новости</a>
</nav>
<main class="main-page">
{% yield body %}
    <section class="side-block">
        <div class="side-block_first">
            <div class="side-block_search">
                <input type="text" placeholder="Search">
            </div>
            <div class="side-block_social">
                <div class="side-block_vk">
                    <span>vk</span>
                    <a href="#">
                        <img src="/public/img/icons.png" alt="">
                    </a>
                </div>
                <div class="side-block_ok">
                    <span>ok</span>
                    <a href="#">
                        <img src="/public/img/icons.png" alt="">
                    </a>
                </div>
            </div>
            <div class="side-block_mailing">
                <span>Рассылка</span>
                <input type="email" name="" id=""class="side-block_email"
                       placeholder="Введите ваш e-mail">
                <a href="/registerForm" class="side-block_subscribe">
                    Подписаться
                </a>
            </div>
        </div>
        <div class="side-block_second">
            <div class="side-block_prefs">
                <h3>Почему мы?</h3>
                <p>Работаем по всему краю и Республике Алтай</p>
                <p>Широкий выбор медтехники</p>
                <p>Свой сервисный центр</p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
