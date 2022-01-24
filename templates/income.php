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
                <a href="/howmuch" class="header__link">Заработок блогеров</a>
              </li>
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
          Here is your data! {{ data }}
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
