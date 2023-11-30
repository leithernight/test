{% extends "base.mvc.php" %}

{% block title %}Все новости{% endblock %}

{% block body %}

<section class="main-page_main">
    <h1>Новости</h1>
    {% foreach ($posts as $post): %}
    <hr>
    <article class="post">
        <a href="/post"><h2>{{ post['title'] }}</h2></a>
        <div class="content">{{ post['content'] }}</div>
    </article>
    {% endforeach; %}
</section>

{% endblock %}