<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Профиль</title>
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
                <a href="/howmuch" class="header__link">Топ блогеров</a>
              </li>
              <li>
                <a href="/order_report" class="header__link">Заказать отчет</a>
              </li>
              <li>
                <a href="/logout" class="header__link">Выйти из аккаунта</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="content">
      <div class="container">
          <div class="hs"><span style="color:#F165FA">Моя аналитика</span></div>
          {% if query %}
            {% for report in query %}
                <form id ="leforme" name="leforme" action="/report_page" method="POST">
                    <input type="hidden" name="report_id" id="report_id" value={{ report.id }}>
                    <button type="submit"><div class="profile__check">Отчёт {{ report.username }} {{ report.date.strftime('%d-%m-%Y') }}</div></button>
                </form>
            {% endfor %}
          {% else %}
            У вас пока нет отчетов, самое время создать первый!
          {% endif %}
          <div class="empty__"></div>
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
  <script src="assets/js/script.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
