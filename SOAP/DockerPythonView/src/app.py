from flask import Flask, jsonify, request, render_template

app = Flask(__name__,
            static_folder="static",
            template_folder="templates")

@app.route('/')
def index():
    return render_template("cursos.html")

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000) #local
    #app.run() pythonAnywhere
