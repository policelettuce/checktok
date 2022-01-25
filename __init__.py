from gevent import monkey
monkey.patch_all()
from datetime import datetime
from werkzeug.security import generate_password_hash, check_password_hash
import calculator
from flask import Flask, render_template, request, flash
from flask_sqlalchemy import SQLAlchemy
from flask_login import LoginManager, login_required, login_user, logout_user, UserMixin, current_user

app = Flask(__name__)
app.secret_key = "Cactus is truly a tsundere among other plants"
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///data.db'
db = SQLAlchemy(app)
manager = LoginManager(app)


class User(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    login = db.Column(db.String(24), nullable=False)
    password = db.Column(db.String(255), nullable=False)

    reports = db.relationship('Report', backref='user', lazy='dynamic')


class Stat(db.Model):
    username = db.Column(db.String(32), primary_key=True)
    avatar = db.Column(db.String(255), nullable=False)
    subs = db.Column(db.String(16), nullable=False)
    likes = db.Column(db.String(16), nullable=False)
    views = db.Column(db.String(16), nullable=False)
    videos = db.Column(db.String(16), nullable=False)
    liked = db.Column(db.String(16), nullable=False)
    engagement = db.Column(db.String(16), nullable=False)
    income_low = db.Column(db.String(16), nullable=False)
    income_high = db.Column(db.String(16), nullable=False)
    rating = db.Column(db.Integer, nullable=False)
    date = db.Column(db.DateTime, default=datetime.now())


class Report(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(32), nullable=False)
    subs = db.Column(db.Integer, nullable=False)
    avg_views = db.Column(db.Integer, nullable=False)
    subs_to_views = db.Column(db.Integer, nullable=False)
    engagement = db.Column(db.Integer, nullable=False)
    rating = db.Column(db.Integer, nullable=False)
    date = db.Column(db.DateTime, default=datetime.now())

    ownerid = db.Column(db.Integer, db.ForeignKey('user.id'), nullable=False)


class Top(db.Model):
    username = db.Column(db.String(32), primary_key=True)
    avatar = db.Column(db.String(255), nullable=False)
    subs = db.Column(db.String(16), nullable=False)
    likes = db.Column(db.String(16), nullable=False)
    income_low = db.Column(db.String(16), nullable=False)
    income_high = db.Column(db.String(16), nullable=False)
    rating = db.Column(db.Integer, nullable=False)
    date = db.Column(db.DateTime, default=datetime.now())


@manager.user_loader
def load_user(user_id):
    return User.query.get(user_id)


@app.route('/')
def hello_world():
    return render_template("index.php")


@app.route('/login', methods=['GET', 'POST'])
def login_page():
    login = request.form.get('login')
    password = request.form.get('password')

    if request.method == "POST":
        if login and password:
            user = User.query.filter_by(login=login).first()
            if user:
                if check_password_hash(user.password, password):
                    login_user(user)
                    return render_template("index.php")
                else:
                    flash("Пароль неверен! :(")
            else:
                flash("Такого юзверя мы еще не видели...")
        else:
            flash("Пожалуйста, введите логин и пароль!")

    return render_template("login.php")



@app.route('/register', methods=['GET', 'POST'])
def register_page():
    login = request.form.get('login')
    password = request.form.get('password')
    confirm_password = request.form.get('password_confirm')

    if request.method == "POST":
        if not (login or password or confirm_password):
            flash("Пожалуйста, заполните все поля!")
        elif password != confirm_password:
            flash("Пароли не совпадают! :(")
        else:
            hash_pass = generate_password_hash(password)
            new_user = User(login=login, password=hash_pass)
            db.session.add(new_user)
            db.session.commit()
            login_user(new_user)

            return render_template('index.php')

    return render_template('register.php')


@app.route('/logout')
def logout_page():
    logout_user()
    return render_template('index.php')


@app.route('/howmuch')
def howmuch():
    return render_template("howmuch.php")


@app.route('/bloggermoney', methods=['POST', 'GET'])
def topblogger():
    data = None
    if request.method == 'POST':
        name = str(request.form['name'])
        query = db.session.query(Top).filter(Top.username == name).first()
        if query and (datetime.now() - query.date).days < 1:
            data = dict(username=str(query.username), avatar=str(query.avatar), subs=str(query.subs),
                        likes=str(query.likes), income_low=str(query.income_low),
                        income_high=str(query.income_high), rating=str(query.rating))
            return render_template('bloggermoney.php', data=data)
        else:
            data = calculator.calculate(name)
            return render_template('bloggermoney.php', data=data)
    else:
        return render_template("howmuch.php")


@app.route('/income', methods=['POST', 'GET'])
def calc():
    data = None
    if request.method == 'POST':
        if request.form['username'] != "":
            data = calculator.calculate(str(request.form['username']))
            return render_template('income.php', data=data)
        else:
            data = 'emptyerr'
    return render_template('income.php', data=data)


@app.route('/profile', methods=['POST', 'GET'])
@login_required
def profile():
    if request.method == 'POST':
        if request.form['username'] != "":
            calculator.create_report(str(request.form['username']), current_user.get_id())

    query = db.session.query(Report).filter(Report.ownerid == current_user.get_id()).all()
    return render_template('profile.php', query=query)


@app.route('/order_report')
@login_required
def order_report():
    return render_template('oreder_report.php')


@app.route('/report_page', methods=['POST', 'GET'])
@login_required
def report_page():
    if request.method == 'POST':
        query = db.session.query(Report).filter(Report.id == request.form['report_id']).first()
        return render_template('report_page.php', query=query)
    else:
        query = db.session.query(Report).filter(Report.ownerid == current_user.get_id()).all()
        return render_template('profile.php', query=query)


@app.after_request
def redirect_to_auth(response):
    if response.status_code == 401:
        return(render_template('login.php'))

    return response


if __name__ == '__main__':
    app.run(debug=True)
