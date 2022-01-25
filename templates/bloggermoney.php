<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Доход тиктокера</title>
  <link rel="stylesheet" href="{{ url_for('static', filename='bstylemobile.css') }}">
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
                <a href="/howmuch" class="header__link">Назад</a>
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
          <div class="hs">Сколько зарабатывает <span style="color:#F165FA">{{data.get("username")}}?</span></div>
          <div class="content__center">
          <img src="{{data.get("avatar")}}" class="photo__blogger" width="256" height="256">
          <div class="tt__username">@{{data.get("username")}}</div>


        <div class="tt__stat__block">
        <div class="tt__stat">{{data.get("subs")}}<br><span style="font-size: 15px; font-weight: 200;">подписчики</span></div>
        <div class="tt__stat">{{data.get("likes")}}<br><span style="font-size: 15px; font-weight: 200;">лайки</span></div>
        <div class="tt__stat">{{data.get("rating")}}<br><span style="font-size: 15px; font-weight: 200;">рейтинг checktok</span></div>
        </div><hr><br><br>
        <div class="hs">Прибыль с видео</div>
        <div class="money__blogger"><span style="color:#F165FA">{{data.get("income_low")}} - {{data.get("income_high")}} ₽</span></div><hr>
        <form action='order_report'>
            <button class="main__btn" >Хочу так же 💸</button>
        </form>
        <div class="content__text">Смотри ещё</div>
        <div class="tt__stat__block">
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
