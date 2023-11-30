{% extends "base.mvc.php" %}

{% block title %}Регистрация{% endblock %}

{% block body %}

    <section class="main-page_main">
        <form class="main-page_register" action="/register" method="POST">
            <h3>Регистрация</h3>
            <div class="main-page_form">
                <div class="main-page_ness">
                    <span>Обязательные данные</span>
                    <div class="main-page_field">
                        <span>Логин</span>
                        <input type="text" name="login" id="" placeholder="qwerty">
                    </div>
                    <div class="main-page_field">
                        <span>E-mail</span>
                        <input type="email" name="email" id="" placeholder="qwerty@qwer.ty">
                    </div>
                    <div class="main-page_field">
                        <span>Пол</span>
                        <select name="sex" id="">
                            <option value="Мужской">Мужской</option>
                            <option value="Женский">Женский</option>
                        </select>
                    </div>
                    <div class="main-page_field">
                        <span>Пароль</span>
                        <input type="password" name="password" id="" placeholder="qwerty">
                    </div>
                    <div class="main-page_field">
                        <span>Подтвердить пароль</span>
                        <input type="password" name="confirm_password" id="" placeholder="qwerty">
                    </div>
                </div>
                <div class="main-page_adds">
                    <span>Дополнительные данные</span>
                    <div class="main-page_field">
                        <span>Имя</span>
                        <input type="text" name="first-name" id="" placeholder="qwerty">
                    </div>
                    <div class="main-page_field">
                        <span>Фамилия</span>
                        <input type="text" name="second-name" id="" placeholder="qwerty">
                    </div>
                    <div class="main-page_field">
                        <span>Гражданство</span>
                        <input type="text" name="citizenship" id="" placeholder="qwerty">
                    </div>
                    <div class="main-page_field">
                        <span>Дата рождения</span>
                        <input type="date" name="birthday" id="" placeholder="">
                    </div>
                </div>
                <span>Если уже есть аккаунт - <a href="/loginForm"><u>Авторизоваться</u></a></span>
            </div>
            <div class="main-page_text">
                <h4>Правила сайта</h4>
                <span>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio vitae placeat odio, fugit omnis perferendis voluptate unde dolorem sit sed aspernatur saepe iste rerum totam eaque est? Voluptatibus qui temporibus, quaerat totam animi blanditiis tempora quos rem. Vel perspiciatis mollitia maiores neque deleniti voluptate pariatur veniam ipsum dignissimos incidunt. Blanditiis expedita perspiciatis ratione, asperiores enim numquam, delectus necessitatibus ea obcaecati dolorem corrupti. Ut reprehenderit architecto aspernatur enim nisi voluptate fuga est atque cum! Iste molestias quis harum dicta dolores veniam dolorem soluta nemo, deleniti dolore corporis velit optio numquam delectus eveniet autem eum dignissimos possimus libero, consequatur doloribus, cum veritatis.
                </span>
            </div>
            <button type="submit" class="main-page_register-btn">Зарегистрироваться</button>
        </form>
    </section>

{% endblock %}