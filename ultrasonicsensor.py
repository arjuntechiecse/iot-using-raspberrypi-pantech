import RPi.GPIO as gpio
import time
gpio.setmode(gpio.BCM)
gpio.setwarnings(False)
trig=21
echo=20
gpio.setup(trig,gpio.OUT)
gpio.setup(echo,gpio.IN)
gpio.output(trig,False)
print "ultrasonic sensor test"
time.sleep(1)
try:
    while True:
        gpio.output(trig,True)
        time.sleep(0.00001)
        gpio.output(trig,False)
        while gpio.input(echo)==0:
            start=time.time()
        while gpio.input(echo)==1:
            end=time.time()
        duration=end-start
        distance=duration*17150
        distance=round(distance,2)
        print "distance:",distance,"cm"
        time.sleep(1)
except:
    KeyboardInterrupt()
    gpio.cleanup()
