from flask import Flask, render_template, request
from datetime import datetime
from flask_sqlalchemy import SQLAlchemy
import calculator

app = Flask(__name__)

app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///data.db'
db = SQLAlchemy(app)


class User(db.Model):
    userid = db.Column(db.Integer, primary_key=True)
    login = db.Column(db.String(24), nullable=False)
    password = db.Column(db.String(32), nullable=False)

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
    date = db.Column(db.DateTime, default=datetime.utcnow)

    top = db.relationship('Top', backref='stat', lazy='dynamic')


class Report(db.Model):
    reportid = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(32), nullable=False)
    subs = db.Column(db.Integer, nullable=False)
    avg_views = db.Column(db.Integer, nullable=False)
    subs_to_views = db.Column(db.Integer, nullable=False)
    engagement = db.Column(db.Integer, nullable=False)
    rating = db.Column(db.Integer, nullable=False)
    date = db.Column(db.DateTime, default=datetime.utcnow)

    ownerid = db.Column(db.Integer, db.ForeignKey('user.userid'), nullable=False)


class Top(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    avatar = db.Column(db.String(255), nullable=False)
    subs = db.Column(db.String(16), nullable=False)
    likes = db.Column(db.String(16), nullable=False)
    income_low = db.Column(db.String(16), nullable=False)
    income_high = db.Column(db.String(16), nullable=False)
    rating = db.Column(db.Integer, nullable=False)

    username = db.Column(db.String(32), db.ForeignKey('stat.username'), nullable=False)


@app.route('/')
def hello_world():
    return render_template("index.php")


@app.route('/howmuch')
def howmuch():
    return render_template("howmuch.php")


@app.route('/bloggermoney')
def milokhin():
    return render_template("bloggermoney.php")


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


if __name__ == '__main__':
    app.run()
