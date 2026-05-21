#!/usr/bin/env python

import time
import serial
import sys
import RPi.GPIO as GPIO

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11,GPIO.OUT) # Room Mag Lock Physical/Board pin 11 GPIO/BCM pin 17 Wiring Pi pin 0
GPIO.setup(13,GPIO.OUT) # Home Lock Physical/Board pin 13 GPIO/BCM pin 27 Wiring Pi pin 2
GPIO.setup(15,GPIO.OUT) # Aqua Thermostat Physical/Board pin 15 GPIO/BCM pin 22 Wiring Pi pin 3
GPIO.setup(29,GPIO.OUT) # Bot Power Physical/Board pin 29 GPIO/BCM pin 5 Wiring Pi pin 21
GPIO.setup(31,GPIO.OUT) # 12v MCB Physical/Board pin 31 GPIO/BCM pin 6 Wiring Pi pin 22
GPIO.setup(33,GPIO.OUT) # Circulation Pump Physical/Board pin 33 GPIO/BCM pin 13 Wiring Pi pin 23
GPIO.setup(37,GPIO.OUT) # Uv Light Physical/Board pin 37 GPIO/BCM pin 26 Wiring Pi pin 25
GPIO.setup(16,GPIO.OUT) # Aqua Light Physical/Board pin 16 GPIO/BCM pin 23 Wiring Pi pin 4


if len(sys.argv) < 2:
    print('Missing command argument')
    sys.exit(2)

cmd = str(sys.argv[1])

if __name__ == '__main__':
    ser = serial.Serial(
        port='/dev/ttyUSB0',
        baudrate = 115200,
        parity=serial.PARITY_NONE,
        stopbits=serial.STOPBITS_ONE,
        bytesize=serial.EIGHTBITS,
        timeout=1
        )
    #ser.flushInput()
    #print("connected to: " + ser.portstr)
def spdata():
    sdata = ser.readline().decode('utf-8').rstrip()
    print (sdata)
while True:
    if cmd == 'RM1R11':
        ser.write(b'111')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R10':
        ser.write(b'110')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R21':
        ser.write(b'121')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R20':
        ser.write(b'120')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R31':
        ser.write(b'131')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R30':
        ser.write(b'130')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R41':
        ser.write(b'141')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R40':
        ser.write(b'140')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R51':
        ser.write(b'151')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R50':
        ser.write(b'150')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R61':
        ser.write(b'161')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R60':
        ser.write(b'160')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R71':
        ser.write(b'171')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R70':
        ser.write(b'170')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R81':
        ser.write(b'181')
        spdata()
        sys.exit(0)
    elif cmd == 'RM1R80':
        ser.write(b'180')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R11':
        ser.write(b'211')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R10':
        ser.write(b'210')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R21':
        ser.write(b'211')
        time.sleep(1)
        ser.write(b'221')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R20':
        ser.write(b'210')
        time.sleep(1)
        ser.write(b'220')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R31':
        ser.write(b'231')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R30':
        ser.write(b'230')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R41':
        ser.write(b'241')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R40':
        ser.write(b'240')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R51':
        ser.write(b'251')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R50':
        ser.write(b'250')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R61':
        ser.write(b'261')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R60':
        ser.write(b'260')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R71':
        ser.write(b'271')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R70':
        ser.write(b'270')
        spdata()
        sys.exit(0)
    elif cmd == 'RM2R81':
        ser.write(b'281')
        sdata = ser.readline().decode('utf-8').rstrip()
        print (sdata)
        time.sleep(0.5)
        sys.exit(0)
    elif cmd == 'RM2R80':
        ser.write(b'280')
        spdata()
        time.sleep(0.5)
        sys.exit(0)
    elif cmd == 'RM3R11':
        GPIO.output(11,GPIO.HIGH)
        sdata = "RM3 R1 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R10':
        GPIO.output(11,GPIO.LOW)
        sdata = "RM3 R1 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R1':                # Push
        GPIO.output(11,GPIO.LOW)
        spdata()
        GPIO.output(11,GPIO.HIGH)
        sdata = "RM3 R1 Unlocked";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R21':
        GPIO.output(13,GPIO.LOW)
        sdata = "RM3 R2 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R20':
        GPIO.output(13,GPIO.HIGH)
        sdata = "RM3 R2 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R2':                # Push
        GPIO.output(13,GPIO.LOW)
        spdata()
        GPIO.output(13,GPIO.HIGH)
        sdata = "RM3 R2 Unlocked";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R31':
        GPIO.output(15,GPIO.LOW)
        sdata = "RM3 R3 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R30':
        GPIO.output(15,GPIO.HIGH)
        sdata = "RM3 R3 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R41':
        GPIO.output(29,GPIO.LOW)
        sdata = "RM3 R4 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R40':
        GPIO.output(29,GPIO.HIGH)
        sdata = "RM3 R4 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R51':
        GPIO.output(31,GPIO.LOW)
        sdata = "RM3 R5 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R50':
        GPIO.output(31,GPIO.HIGH)
        sdata = "RM3 R5 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R61':
        GPIO.output(33,GPIO.LOW)
        sdata = "RM3 R6 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R60':
        GPIO.output(33,GPIO.HIGH)
        sdata = "RM3 R6 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R71':
        GPIO.output(37,GPIO.LOW)
        sdata = "RM3 R7 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R70':
        GPIO.output(37,GPIO.HIGH)
        sdata = "RM3 R7 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R81':
        GPIO.output(16,GPIO.LOW)
        sdata = "RM3 R8 Turned On";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM3R80':
        GPIO.output(16,GPIO.HIGH)
        sdata = "RM3 R8 Turned Off";
        print (sdata)
        sys.exit(0)
    elif cmd == 'RM4R11':
        ser.write(b'311')
        spdata()
        sys.exit(0)
    elif cmd == 'RM4R10':
        ser.write(b'310')
        spdata()
        sys.exit(0)
    elif cmd == 'RM4R21':
        ser.write(b'321')
        spdata()
        sys.exit(0)
    elif cmd == 'RM4R20':
        ser.write(b'320')
        spdata()
        sys.exit(0)
    

    else:
        print('Unknown command: ' + cmd)
        sys.exit(1)
