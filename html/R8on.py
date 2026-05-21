#!/usr/bin/env python

import RPi.GPIO as GPIO


GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(16,GPIO.OUT)
GPIO.output(16,GPIO.LOW)



print "img/pic_bublon.gif"