import urllib2
from Tkinter import *
#f = urllib2.urlopen('http://192.168.0.9:8081/img')
#f.read()
master = Tk()
w = Canvas(master, width=200, height=100)
w.pack()
w.create_line(0, 0, 200, 100)
w.create_line(0, 100, 200, 0, fill="red", dash=(4, 4))
w.create_rectangle(50, 25, 150, 75, fill="blue")

mainloop()

from turtle import *

setup (width=200, height=200, startx=0, starty=0)

speed ("fastest") # important! turtle is intolerably slow otherwise
tracer (False)    # This too: rendering the 'turtle' wastes time

for i in range(200):
    forward(i)
    right(90.5)

done()
