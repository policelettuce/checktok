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
          <div class="hs">Тиктокеры и их <span style="color:#F165FA">доход</span></div>
          <div class="content__center">
          <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/milokhin.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@danya_milokhin</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/karnaval.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@karna.val</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/kreed.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@egorkreed</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/homm9k.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@homm9k</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/kross.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@karinakross</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/gavrilina.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@gavrilinaa</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/ship.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@egorkaship_official</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/a4omg.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@a4omg</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/mia.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@miaboyka</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/agentgirl.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@_agentgirl_</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/kobyakov.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@kobyakov_vlad</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/karambaby.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@kkarrrambaby</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/rahim.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@rahimabram</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/dava.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@dava_m</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/xabibka.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@xabibkaaa</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/pokrov.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@pokrov</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/samka.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@samkamusic</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/influesli.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@_influesii</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/badbarbie.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@badbaarbie</div>
          </div></br>
            <div class="photo__more">
            <a href="/bloggermoney"><img src="{{ url_for('static', filename='images/bloggers/kirya.png') }}" width="128" height="128"></a>
            <div class="tt__username__more">@thekiryalife</div>
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
