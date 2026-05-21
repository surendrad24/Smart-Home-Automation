import RPi.GPIO as GPIO



GPIO.setmode(GPIO.BOARD)
GPIO.setup(26,GPIO.IN)
in_val=GPIO.input(26)
 
if(in_val==0):
    print("danger, The value of sensor is: "+str(in_val))
else:
    print("relax no problem, The value of sensor is: "+str(in_val))

