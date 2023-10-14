from flask import Flask,Response,request
from Generate import GenerateImage
from Detection import DetectFace
from Recognition import RecoFace
import cv2
import os
import numpy as np
from PIL import Image
from flask_cors import CORS


app = Flask(__name__)
CORS(app)


def resultlivedet(RecoFace):
    while True:
        frame =RecoFace.get_frame()

        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/recognition")
def dis_rec():
    args = request.args
    args.to_dict()
    path = args.get("path")
    yaml = args.get("yml")
    name = args.get("name")
    return Response(resultlivedet(RecoFace(path,yaml,name)),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')


def resultliverec(DetectFace):
    while True:
        frame =DetectFace.get_frame()

        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/detection")
def dis_det():
    args = request.args
    args.to_dict()
    path = args.get("path")
    return Response(resultliverec(DetectFace(path)),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')


def resultlive(GenerateImage):
    while True:
        frame =GenerateImage.get_frame()

        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/generate")
def dis_live():
    args = request.args
    args.to_dict()
    path = args.get("path")
    name = args.get("name")
    return Response(resultlive(GenerateImage(path,name)),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')


def getimagewithid(path):
    faces=[]
    ids=[]
    for imagepath in os.listdir(path):
        facesim = Image.open(f"{path}/{imagepath}").convert("L")
        imgnp = np.array(facesim, "uint8")
        id = int(imagepath.split(".")[0].split("_")[0])
        faces.append(imgnp)
        ids.append(id)
        cv2.waitKey(10)
    return np.array(ids),faces

lbph_recognizer = cv2.face.LBPHFaceRecognizer_create()

@app.route("/yaml_file")
def generate_yaml():
    args = request.args
    args.to_dict()
    path = args.get("path")
    name = args.get("name")
    ids,faces = getimagewithid(path)
    lbph_recognizer.train(faces,ids)
    lbph_recognizer.save(f"{path}/{name}.yml")
    return f"Yaml file for {name} has been Created"


# @app.route("/")
# def hello():
#     args = request.args
#     args.to_dict()
#     path = args.get("path")
#     return path


if __name__ == "__main__":
    app.run(debug=True)