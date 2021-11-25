from gevent import monkey
monkey.patch_all()
from flask import Flask, render_template, request
import calculator

app = Flask(__name__)


@app.route('/')
def hello_world():
    return render_template("index.html")


@app.route('/calc', methods=['POST', 'GET'])
def calc():
    error = None
    if request.method == 'POST':
        if request.form['username'] != "":
            data = calculator.calculate(str(request.form['username']))
            return render_template('index.html', data=data)
        else:
            error = 'Далбаеб?введи че нибудь'
    return render_template('index.html', error=error)


if __name__ == '__main__':
    app.run()
