from flask import Flask,request
from flask_cors import CORS
import cv2


app = Flask(__name__)
app.secret_key = "histogram_app"
CORS(app)

@app.route("/generate_histogram_gray")
def histogram_gray():
    args = request.args
    args.to_dict()
    img_path = args.get("img_path")
    img = cv2.imread(img_path,cv2.IMREAD_GRAYSCALE)
    histo = [0 for i in range(256)]
    h,w = img.shape
    for yc in range(0,h):
        for xc in range(0,w):
            histo[img[yc,xc]] = histo[img[yc,xc]] + 1
    return str(histo)


@app.route("/generate_histogram_rgb")
def histogram_rgb():
    args = request.args
    args.to_dict()
    img_path = args.get("img_path")
    img = cv2.imread(img_path)
    histoR = [0 for i in range(256)]
    histoG = [0 for i in range(256)]
    histoB = [0 for i in range(256)]
    histo = []
    h,w,_ = img.shape
    for yc in range(0,h):
        for xc in range(0,w):
            histoR[img[yc,xc][0]] = histoR[img[yc,xc][0]] + 1
            histoG[img[yc,xc][1]] = histoG[img[yc,xc][1]] + 1
            histoB[img[yc,xc][2]] = histoB[img[yc,xc][2]] + 1
    histo = [histoR,histoG,histoB]
    return str(histo)