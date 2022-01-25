<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Узнать доход</title>
  <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}">
  <link rel="stylesheet" media="all and (min-width: 900px)" href="{{ url_for('static', filename='style2.css') }}" />
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

    <div class="page__background__black">
      <hr>
      <footer>
        <div class="footer__content">NORTHSPOT 20XX<br><br><a href="mailto:northspotweb@gmail.com">northspotweb@gmail.com</a></div>
        <img src="{{ url_for('static', filename='images/nailpolish.png') }}" width="25" height="25">
      </footer>
    </div>
    <div class="content">
      <div class="container">

          <div class="hs">Проверь <span style="color:#F165FA">заработок</span> тиктокера</div>
          <div class="main__select">
            <div class="input__wrap">
                <form action="/income" method="POST">
                    <input type="text" class="check__" name="username" id="username" placeholder="Введите имя пользователя без @">
                    <button type="submit" class="main__btn">Рассчитать доход 💸</button>
                </form>
                </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="hsc1">Как <span style="color:#F165FA">заработать </span>в Тик-Токе?</div>

          <div class="ad__">Здесь будет рекламный баннер</div>

          <div class="firstcontainer"><div class="content__text">
          <span style="font-weight:500 ;">1. TikTok Coins и алмазики</span></br></br>
          Этот способ заработка появился в приложении совсем недавно, но уже приносит авторам <span style="color:#F165FA">сотни тысяч рублей</span>. Для того, чтобы получать деньги таким образом, необходимо, например, запустить прямой эфир и заинтересовать зрителей так, чтобы они отправляли тебе подарки, которые они могут приобрести за монетки.</br></br> <img src="{{ url_for('static', filename='images/coins.png') }}" class="content__img"> </br></br>После прямого эфира ты можешь обменять полученные подарки на настоящие деньги, при условии, что общий баланс за все эфиры у тебя уже больше <span style="color:#F165FA">100$</span> (7500 рублей). </br>Так же Тик-Ток удерживает комиссию около 20%.</br></br>Например, тебе за трансляцию надарили подарков на 10000 рублей. Тик-Ток удержит себе 2000 рублей, а ты получишь <span style="color:#F165FA">8000 рублей</span>, которые можешь сразу вывести на карту. Вот такая несложная математика.</br></br>Ниже мы составили таблицу приблизительного дохода с прямых эфиров, при условии, что они будут интересными для зрителей :)

          </br></br>

          <table class="iksweb">
              <tbody>
                <tr>
                  <td>Количество подписчиков</td>
                  <td>Доход с одной трансляции</td>
                </tr>
                <tr>
                  <td>1 000 - 6 000</td>
                  <td>700 руб.</td>
                </tr>
                <tr>
                  <td>6 000 - 12 000</td>
                  <td>4 200 руб.</td>
                </tr>
                <tr>
                  <td>12 000 - 50 000</td>
                  <td>8 500 руб.</td>
                </tr>
                <tr>
                  <td>50 000 - 100 000</td>
                  <td>18 000 руб.</td>
                </tr>
                <tr>
                  <td>Больше 100 000</td>
                  <td>42 000 руб.</td>
                </tr>
              </tbody>
          </table>

        </br></br><span style="font-weight:500 ;">2. Рекламные интеграции</span></br></br>

      Вот мы и подобрались к главному источнику дохода всех блогеров. Это может быть реклама чего угодно: от сладостей до автомобилей. И платят за такое размещение уже неплохие деньги. Как правило, сегодня компании просят создать видимость, что вы сами пользуетесь их продуктом и как бы советуете его зрителям. Вспомните любую рекламу банковских карт или средств для ухода за собой. Цена за размещение устанавливается самим тиктокером, но приблизительно можно сказать, что это около</br></br>

      <span style="color:#F165FA">10 000 рублей за 100 000 просмотров.</span></br></br>Стоит понимать, что реклама у блогера с развлекательным контентом будет стоить дешевле, чем, например, у блогера-юриста или инвестора.</br></br><img src="{{ url_for('static', filename='images/stat.jpg') }}" class="content__img__vert"></br></br>Так же встречаются предложения станцевать под какой-нибудь трек начинающего артиста. Ценник за такой формат гораздо ниже, чем за прямую рекламу, потому что здесь не нужно ничего рассказывать, а достаточно просто добавить звук и записать короткий тик ток. Цена за рекламу трека колеблется в районе</br></br><span style="color:#F165FA">2 000 рублей за 100 000 просмотров.</span></br></br>Вот на этих двух видах рекламы и держится любой популярный тиктокер. Более мелких форматов рекламы, на самом деле, ещё очень много, это и запись дуэтов и добавление чужого видео в профиль и упоминание чего-либо в описании профиля. Цены за такие действия гораздо ниже, чем за прямую рекламу и рекламу треков, но для начинающих эти способы являются одними из основных, потому что они пока не получают крупные заказы.

          </div></div>

          <div data-aos="fade-up" data-aos-duration="1000" class="hsc">Сколько <span style="color:#F165FA">получают </span>популярные тиктокеры?</div>
          <div class="image-slider swiper-container">
            <div class="image-slider__wrapper swiper-wrapper">
              <div class="image-slider__slide swiper-slide">
                <div class="image-slider__image">
                  <img src="{{ url_for('static', filename='images/slides/slide1.png') }}">
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="image-slider__image">
                  <img src="{{ url_for('static', filename='images/slides/slide2.png') }}">
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="image-slider__image">
                  <img src="{{ url_for('static', filename='images/slides/slide3.png') }}">
                </div>
              </div>
            </div>
          </div>
          <div class="firstcontainer">
            <div class="content__text">Мы провели собственное расследование, основываясь на алгоритме нашей системы подсчёта, в которую входят <span style="color:#F165FA">выплаты рекламодателей и музыкальных лейблов</span>. Однако, на деле эти цифры могут оказаться даже больше представленных, потому что реклама и музыка далеко не единственные способы заработка таких популярных тиктокеров. Прибавьте сюда приглашения на мероприятия и участие в челленджах от крупных компаний.</br></br>Кстати, у нас на сайте есть целая страница, где подсчитаны примерные <span style="color:#F165FA">доходы</span> популярных тиктокеров! Цифры, честно говоря, удивляют. </div>
          </div>
          <form action="/howmuch">
          <div class="cntr"><button class="btn">Узнать 💎</button>
          </form>
          <div data-aos="fade-right" data-aos-duration="1000" class="hsc2">Смогу ли я получать <span style="color:#F165FA">деньги</span> снимая тик-токи?</div>
          <div class="ad__">Здесь будет рекламный баннер</div>
          <div class="firstcontainer">
            <div class="content__text">Если тебе кажется, что ТикТок уже переполнен блогерами и суваться туда со своими задумками не стоит, то вспомни сколько людей <span style="color:#F165FA">ежедневно</span> пользуются этим приложением. И с каждым днём их число всё увеличивается.</br></br>Зрителям нужно шоу, никто в наше время не будет годами следить за одними и теми же персонажами. Всегда появляется кто-то новый, кто <span style="color:#F165FA">перенимает эстафету</span> у "старичков". И с чего ты решил, что у тебя ничего не получится?</br></br>ТикТок - это как раз тот случай, когда для большого успеха и <span style="color:#F165FA">миллионов просмотров</span> достаточно просто знать, что добавить или убрать в видео и профиле, чтобы алгоритмы стали бешеными темпами продвигать твои видео <span style="color:#F165FA">в тренды!</span> Кнопка ниже раскроет тебе эти секреты.</div>
          </div>
          <div class="cntr"><button class="btn2">Продвинуть видео в тренды 💰</button></div>

      </div>
      </div>

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
