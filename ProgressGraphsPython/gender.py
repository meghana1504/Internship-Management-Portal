#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")

#print("Content-type:image/png\n")
import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()
q1="select count(gender1) as femalecount from profile where gender1='female'";
a.execute(q1)
data1=a.fetchone()

q2="select count(gender1) as malecount from profile where gender1='male'";
b.execute(q2)
data2=b.fetchone()

import os,sys
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'
import matplotlib as plt
import numpy as np
ab=list(data1)
cd=list(data2)
fl = ab+cd
perform = ['female','male']

form = cgi.FieldStorage()
#x = np.array(data1)
#y = np.array(data2)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
#ax.plot(ab,perform,type='bar')
ax.bar(perform,fl,tick_label =perform,color="purple" )

mpld3.show(fig)



