<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Топ тиктокеров</title>
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
          <div class="hs">Тиктокеры и их <span style="color:#F165FA">доход</span></div>
          <div class="content__center">
          <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="danya_milokhin">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/milokhin.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@danya_milokhin</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="karna.val">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/karnaval.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@karna.val</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="egorkreed">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/kreed.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@egorkreed</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="homm9k">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/homm9k.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@homm9k</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="karinakross">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/kross.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@karinakross</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="gavrilinaa">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/gavrilina.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@gavrilinaa</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="egorkaship_official">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/ship.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@egorkaship_official</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="a4omg">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/a4omg.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@a4omg</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="miaboyka">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/mia.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@miaboyka</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="_agentgirl_">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/agentgirl.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@_agentgirl_</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="kobyakov_vlad">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/kobyakov.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@kobyakov_vlad</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="kkarrrambaby">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/karambaby.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@kkarrrambaby</div>
            </form>
          </div></br>
            <div class="photo__more">
            <<form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="rahimabram">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/rahim.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@rahimabram</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="dava_m">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/dava.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@dava_m</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="xabibkaaa">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/xabibka.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@xabibkaaa</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="pokrov">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/pokrov.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@pokrov</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="samkamusic">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/samka.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@samkamusic</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="_influesii">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/influesli.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@_influesii</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="badbaarbie">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/badbarbie.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@badbaarbie</div>
            </form>
          </div></br>
            <div class="photo__more">
            <form action="/bloggermoney" method="POST">
              <input type="hidden" name="name" id="name" value="thekiryalife">
              <button type="submit"><img src="{{ url_for('static', filename='images/bloggers/kirya.png') }}" width="128" height="128"></button>
              <div class="tt__username__more">@thekiryalife</div>
            </form>
          </div></br>

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
