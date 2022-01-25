<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Узнать доход</title>
  <link rel="stylesheet" href="{{ url_for('static', filename='income.css') }}">
  <link rel="stylesheet" media="all and (min-width: 900px)" href="{{ url_for('static', filename='bstylepc.css') }}" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
</head>
<body>

  <div class="wrapper">

    <header class="header">
      <div class="container">
        <div class="header__body">
          <a href="/" class="header__logo">
            <img src="{{ url_for('static', filename='images/logo.png') }}" alt="">
          </a>
          <div class="header__burger">
            <span></span>
          </div>
          <nav class="header__menu">
            <ul class="header__list">
              <li>
                <a href="/" class="header__link">Главная</a>
              </li>
              <li>
                <a href="/howmuch" class="header__link">Топ блогеров</a>
              </li>
              {% if current_user.is_authenticated %}
                <li>
                <a href="/profile" class="header__link">Профиль</a>
                </li>
              {% else %}
                <li>
                <a href="/login" class="header__link">Войти</a>
                </li>
                <li>
                <a href="/register" class="header__link">Зарегистрироваться</a>
                </li>
              {% endif %}
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="content">
      <div class="container">
          {% if data == None %}
              {% set data = "calcerr" %}

          {% endif %}

          {% if data == "emptyerr" %}
              <div class="hs">Введите никнейм тиктокера</div>

          {% endif %}

          {% if data == "calcerr" %}
              <div class="hs">Такой тиктокер не существует... или у него пустой профиль</div>
          {% endif %}

          {% if data != "calcerr" and data != "emptyerr" %}
          <div class="hs">Статистика по аккаунту</div>
          <div class="content__center">
          <img src="{{data.get("avatar")}}" class="photo__blogger" width="256" height="256">
          <div class="tt__username">{{data.get("username")}}</div>


        <div class="tt__stat__block">
        <div class="tt__stat">{{data.get("totalSubs")}}<br><span style="font-size: 15px; font-weight: 200;">подписчики</span></div>
        <div class="tt__stat">{{data.get("totalLikes")}}<br><span style="font-size: 15px; font-weight: 200;">лайки</span></div>
        <div class="tt__stat">{{data.get("totalViews")}}<br><span style="font-size: 15px; font-weight: 200;">просмотров</span></div>
        <div class="tt__stat">{{data.get("totalVideos")}}<br><span style="font-size: 15px; font-weight: 200;">тиктоков</span></div>
        <div class="tt__stat">{{data.get("totalLiked")}}<br><span style="font-size: 15px; font-weight: 200;">лайкнул</span></div>
        <div class="tt__stat">{{data.get("engagement")}}<br><span style="font-size: 15px; font-weight: 200;">вовлечённость</span></div>

        </div><hr><br><br>
        <div class="hs">Прибыль с видео</div>
        <div class="money__blogger"><span style="color:#F165FA">{{data.get("low_income")}} - {{data.get("high_income")}} ₽</span></div>
        <div class="hs">Рейтинг CheckTok</div>
        <div class="money__blogger"><span style="color:#F165FA">{{data.get("rating")}}</span></div><hr><br>
        {% endif %}
        <div class="main__select">
            <div class="input__wrap">
                <form action="/income" method="POST">
                    <input type="text" class="check__" name="username" id="username" placeholder="Введите имя пользователя без @">
                    <button type="submit" class="main__btn">Рассчитать доход 💸</button>
                </form>
                </div>
          </div>
      </div>

      </div>
      <footer>
  <div class="footer__content">NORTHSPOT 20XX</div>
</footer>
    </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="{{ url_for('static', filename='js/script.js') }}"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
