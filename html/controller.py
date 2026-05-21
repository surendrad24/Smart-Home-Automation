
import spidev
import time
import os
 
# Open SPI bus
spi = spidev.SpiDev()
spi.open(0,0)
 
# Function to read SPI data from MCP3008 chip
# Channel must be an integer 0-7
def ReadChannel(channel):
  adc = spi.xfer2([1,(8+channel)<<4,0])
  data = ((adc[1]&3) << 8) + adc[2]
  return data
 


# Define sensor channels
mq_channel = 0
 
# Define delay between readings
delay = 5
 

 
# Read the light sensor data
mq_level = ReadChannel(mq_channel)
  
 
  
 
print mq_level
 
