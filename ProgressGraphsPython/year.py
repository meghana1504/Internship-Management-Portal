#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")

#print("Content-type:image/png\n")
import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()
c=conn.cursor()
d=conn.cursor()


q1="select count(ayear1) from profile where ayear1=1";
a.execute(q1)
data1=a.fetchone()

q2="select count(ayear1) from profile where ayear1=2";
b.execute(q2)
data2=b.fetchone()

q3="select count(ayear1) from profile where ayear1=3";
c.execute(q3)
data3=c.fetchone()

q4="select count(ayear1) from profile where ayear1=4";
d.execute(q4)
data4=d.fetchone()


import os,sys
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'
import matplotlib as plt
import numpy as np
l1=list(data1)
l2=list(data2)
l3=list(data3)
l4=list(data4)

lf = l1+l2+l3+l4
perform = ['First Year','Second Year','Third Year','Fourth Year']

form = cgi.FieldStorage()
#x = np.array(data1)
#y = np.array(data2)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
#ax.plot(ab,perform,type='bar')
ax.bar(perform,lf,tick_label =perform)


mpld3.show(fig)



