#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")
#print("Content-type:image/png\n")

import os,sys
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'
import matplotlib as plt
import numpy as np

form = cgi.FieldStorage()
x=[1,2,3,4,5]
xa= np.array(x)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
ax.plot(xa,xa**3)
mpld3.show(fig)

#import pylab as pl