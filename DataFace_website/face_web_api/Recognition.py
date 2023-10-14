import cv2


class RecoFace(object):
    def __init__(self,videoname,yaml,name):
        self.name = name
        self.yaml = yaml
        self.videoname = videoname
        self.lbph_recognizer = cv2.face.LBPHFaceRecognizer_create()
        self.lbph_recognizer.read(f"{self.yaml}")
        if self.videoname == "0":
            self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        else:
            self.video = cv2.VideoCapture(self.videoname)
        self.face_cascade=cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,frame = self.video.read()

        # print(self.yaml)
        
        if self.video.get(cv2.CAP_PROP_POS_FRAMES) == self.video.get(cv2.CAP_PROP_FRAME_COUNT):
            self.video.set(cv2.CAP_PROP_POS_FRAMES,0)
        
        gray=cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)
        faces=self.face_cascade.detectMultiScale(gray,1.1,4)
        for (x,y,w,h) in faces:
            id,conf = self.lbph_recognizer.predict(gray[y:y+h,x:x+w])
        if (conf < (1-80/100)*255):
            cv2.rectangle(frame,(x,y),(x+w,y+h),(0,255,0),2)
            per = (1-conf/255)*100
            cv2.putText(frame,f"{self.name}-{int(per)}%",(x,y),cv2.FONT_HERSHEY_COMPLEX,1,(0,255,0),2)  
        else:
            cv2.rectangle(frame,(x,y),(x+w,y+h),(0,0,255),2)
            cv2.putText(frame,"Unknown",(x,y),cv2.FONT_HERSHEY_COMPLEX,1,(0,0,255),1,cv2.LINE_AA)



        ret,jpg = cv2.imencode('.jpg',frame)
        return jpg.tobytes()