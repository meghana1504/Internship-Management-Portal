#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")
#print("Content-type:image/png\n")

import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()
q1="select m from mark";
a.execute(q1)
q2="select j from mark";
b.execute(q2)
print(2+3)
data1=a.fetchall()
data2=b.fetchall()

import os,sys
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'
import matplotlib as plt
import numpy as np

form = cgi.FieldStorage()
x = np.array(data1)
y = np.array(data2)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
ax.plot(x,y)
mpld3.show(fig)


