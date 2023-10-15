from flask import Flask,Response
from stream import StreamLive
from flask_cors import CORS


app = Flask(__name__)
CORS(app)


def resultlive(StreamLive):
    while True:
        frame =StreamLive.get_frame()
        
        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/face_emotion")
def dis_live():
    return Response(resultlive(StreamLive()),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')



