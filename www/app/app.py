import time
import RPi.GPIO as GPIO
from flask import Flask, render_template, request, redirect, url_for
app = Flask(__name__)

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

# Create a dictionary called pins to store the pin number, name, and pin state:
pins = {
   17 : {'name' : 'MagLock', 'state' : GPIO.LOW},
   27 : {'name' : 'HomeLock', 'state' : GPIO.HIGH},
   22 : {'name' : 'AquaPump', 'state' : GPIO.HIGH},
   5 : {'name' : 'GPIO5', 'state' : GPIO.HIGH},
   6 : {'name' : '12VMains', 'state' : GPIO.HIGH},
   13 : {'name' : 'BotPower', 'state' : GPIO.HIGH},
   26 : {'name' : 'UVLight', 'state' : GPIO.HIGH},
   23 : {'name' : 'AquaLight', 'state' : GPIO.HIGH}
   }

# Set each pin as an output and make it low:
for pin in pins:
   GPIO.setup(pin, GPIO.OUT)
   GPIO.output(pin, GPIO.HIGH)

@app.route("/")
def main():
   # For each pin, read the pin state and store it in the pins dictionary:
   for pin in pins:
      pins[pin]['state'] = GPIO.input(pin)
   # Put the pin dictionary into the template data dictionary:
   templateData = {
      'pins' : pins
      }
   # Pass the template data into the template main.html and return it to the user
   return render_template('main.html', **templateData)
   #return render_template('main.html', **templateData)

# The function below is executed when someone requests a URL with the pin number and action in it:
@app.route("/<changePin>/<action>")
def action(changePin, action):
   # Convert the pin from the URL into an integer:
   changePin = int(changePin)
   # Get the device name for the pin being changed:
   deviceName = pins[changePin]['name']
   # If the action part of the URL is "on," execute the code indented below:
   if action == "on":
      # Set the pin high:
      GPIO.output(changePin, GPIO.HIGH)
      # Save the status message to be passed into the template:
      message = "Turned " + deviceName + " on."
      #return render_template('main.html')
      return redirect("/")
   if action == "off":
      GPIO.output(changePin, GPIO.LOW)
      message = "Turned " + deviceName + " off."
      return redirect("/")
   if action == "push":
      GPIO.output(changePin, GPIO.LOW)
      time.sleep(2)
      GPIO.output(changePin, GPIO.HIGH)
      return redirect("/")

   # For each pin, read the pin state and store it in the pins dictionary:
   for pin in pins:
      pins[pin]['state'] = GPIO.input(pin)
   
   # Along with the pin dictionary, put the message into the template data dictionary:
   templateData = {
      'pins' : pins
   }

   return render_template('main.html', **templateData)

if __name__ == "__main__":
   app.run(host='0.0.0.0', port=9090, debug=True)
