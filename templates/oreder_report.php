<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Попасть в реки</title>
  <link rel="stylesheet" href="{{ url_for('static', filename='analyticsmobile.css') }}">
  <link rel="stylesheet" media="all and (min-width: 900px)" href="{{ url_for('static', filename='analyticspc.css') }}" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;500;700&display=swap" rel="stylesheet">  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
</head>
<body>
  <div class="star__background">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </div>

  <div class="wrapper">

    <header class="header">
      <div class="container">
        <div class="header__body">
          <a href="" class="header__logo">
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
                <a href="/profile" class="header__link">Профиль</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="page__background__black">
      <hr>
      <footer>
        <div class="footer__content">NORTHSPOT 20XX</div>
        <img src="{{ url_for('static', filename='images/nailpolish.png') }}" width="25" height="25">
      </footer>
    </div>
    <div class="content">
      <div class="container">

          <div class="hs">Поможем вывести твой профиль </br><span style="color:#F165FA">в тренды</span> :)</div>
          <div class="main__select">
            <div class="input__wrap">
                <form action="/profile" method="POST">
                    <input type="text" class="check__" name="username" id="username" placeholder="Введите имя своего аккаунта без @">
                    <button type="submit" class="main__btn">В рекомендации 💸</button>
                </form>
                </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="hsc1">Что <span style="color:#F165FA">я получу? </span></div>
          
          <div class="firstcontainer"><div class="content__text">
           Пока другие "гуру" просят за свои курсы по продвижению в ТикТоке десятки тысяч рублей, мы проведём полный анализ твоего профиля и дадим <span style="color:#F165FA">личные рекомендации </span>по тому, что следует сделать, чтобы твои ТикТоки стали залетать в тренды и набирать миллионы просмотров!</br>А взамен попросим всего одну кружку капучино!</br></br>Наши алгоритмы проверят твой профиль по следующим пунктам:</br></br>
         1. Аудитория и общий охват</br></br>2. Оценка охвата каждого видео</br></br>3. Насколько ты нравишься аудитории</br></br>4. Активность твоих зрителей</br></br>5. Оценка нашими экспертами</br></br>По результатам проверки ты получаешь индивидуальный список рекомендаций по тому, что следует поменять или добавить в своём профиле, чтобы твои ролики стали залетать в реки!</br></div></div>
        
          <div class="cntr"><button class="btn2">Продвинуться в тренды 💰</button></div>

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
