<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
  <link rel="stylesheet" href={{ url_for('static', filename='auth_style.css') }}>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width"> 
</head>
<body>
  <div class="container">
    <div class="auth__box">
      <div class="header__auth">Войти</div>

      {% with messages = get_flashed_messages() %}
        {% if messages %}
          <ul class=auth__block>
          {% for message in messages %}
            {{ message }}
          {% endfor %}
          </ul>
        {% endif %}
      {% endwith %}

      <form action="/login" method="POST">
      <div class="auth__block">
        Логин</br>
        <input type="text" class="auth__input" placeholder="Введите ваш логин или email" name="login" id="login">
        <hr>
      </div>
      <div class="auth__block">
        Пароль</br>
        <input type="text" class="auth__input" placeholder="Введите ваш пароль" id="password" name="password">
        <hr>
        </br>
      </div>
      <input type="submit" value="Войти" class="auth__btn">
      <div class="auth__block" align="center">
        Еще нет аккаунта? <a style="color:#F165FA" href={{ url_for('register_page') }}>Зарегистрироваться</a>
      </div>
    </div>
  </div>
</body>
</html>