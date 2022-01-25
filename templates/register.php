<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
  <link rel="stylesheet" href={{ url_for('static', filename='registration_style.css') }}>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width"> 
</head>
<body>
  <div class="container">
    <div class="reg__box">
      <div class="header__reg">Регистрация</div>

      {% with messages = get_flashed_messages() %}
        {% if messages %}
          <ul class=reg__block>
          {% for message in messages %}
            {{ message }}
          {% endfor %}
          </ul>
        {% endif %}
      {% endwith %}

      <div class="reg__block">
        <form action="/register" method="POST">
        Логин</br>
        <input type="text" class="reg__input" placeholder="Введите ваш логин" name="login" id="login">
        <hr>
      </div>
      <div class="reg__block">
        Пароль</br>
        <input type="text" class="reg__input" placeholder="Введите ваш пароль" name="password" id="password">
        <hr>
      </div>
      <div class="reg__block">
        Повтор пароля</br>
        <input type="text" class="reg__input" placeholder="Повторите пароль" name="password_confirm" id="password_confirm">
        <hr>
      </div>
      <input type="submit" value="Создать аккаунт" class="reg__btn">
      <div class="reg__block" align="center">
        Уже есть аккаунт? <a style="color:#F165FA" href={{ url_for('login_page') }}>Войти</a>
      </div>
    </div>
  </div>
</body>
</html>