import cv2
from datetime import datetime
from deepface import DeepFace


class StreamLive(object):
    def __init__(self):
        self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        self.face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
        self.myobj = datetime.now()

    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,img = self.video.read()
        gray = cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)

        faces = self.face_cascade.detectMultiScale(gray,1.3,5)
        for(x,y,w,h) in faces:
            cv2.rectangle(img,(x,y),(x+w,y+h),(0,255,0),2)
            roi =img[y:y+h,x:x+w]
            results = DeepFace.analyze(roi, actions=['emotion'], enforce_detection=False)
            cv2.putText(img,results['dominant_emotion'],(x,y),1,cv2.FONT_HERSHEY_COMPLEX,(0,255,0),2)
            with open(f"data.txt" ,"w") as file:
                file.write(results['dominant_emotion'])
                

        ret,jpg = cv2.imencode('.jpg',img)
        return jpg.tobytes()