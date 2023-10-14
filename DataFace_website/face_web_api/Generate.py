import cv2



class GenerateImage(object):
    def __init__(self,videoname,name):
        self.name = name
        self.videoname = videoname
        if self.videoname == "0":
            self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        else:
            self.video = cv2.VideoCapture(self.videoname)
        self.counter = 0
        self.bool = True
        self.detect = True
        self.face_cascade=cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,frame = self.video.read()
        h,w,_ = frame.shape
        
        if self.video.get(cv2.CAP_PROP_POS_FRAMES) == self.video.get(cv2.CAP_PROP_FRAME_COUNT):
            self.video.set(cv2.CAP_PROP_POS_FRAMES,0)
        
        gray=cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)
        if self.detect:
            faces=self.face_cascade.detectMultiScale(gray,1.1,4)
            for (x,y,w,h) in faces:
                cv2.rectangle(frame,(x,y),(x+w,y+h),(0,255,0),3)
                roi = frame[y:y+h,x:x+w]
                roi = cv2.cvtColor(roi,cv2.COLOR_BGR2GRAY)
                if self.bool:
                    cv2.imwrite(f"{self.name}/1_{self.counter}.jpg",roi)
                    self.counter += 1
                    if self.counter >10:
                        self.bool = False
                        self.detect = False
                   
        
        if self.bool == False and self.bool == False:
            midpoint = h//4 + h//2
            cv2.rectangle(frame,(0,(h//4)),(w,midpoint),(255,255,255),cv2.FILLED)
            cv2.putText(frame,"Images has been capture",(0,h//2),1,cv2.FONT_HERSHEY_COMPLEX,(0,0,0),2)


        ret,jpg = cv2.imencode('.jpg',frame)
        return jpg.tobytes()