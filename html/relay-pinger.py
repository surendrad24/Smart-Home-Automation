import cgi
import sys
import subprocess as sp
import json

def ReadGpio(ch) :
        process = sp.Popen(["/usr/local/bin/gpio", "-g", "read", ch], stdout = sp.PIPE)
        data, _ = process.communicate()
        data = data.decode("utf-8")
        data = data.replace("\r", "")
        data = data.replace("\n", "")

        return data
print("Content-Type: text/html")
print("")
response = {'23' : ReadGpio('23'),
	    '24' : ReadGpio('24')}
print(json.dumps(response))
