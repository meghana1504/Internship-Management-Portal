#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")

#print("Content-type:image/png\n")
import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()
print("hey")

q1="select min(overall) as mino from file  where category='Android Development'";
a.execute(q1)
data1=a.fetchall()

q2="select max(overall) from file where category='Android Development'";
b.execute(q2)
data2=b.fetchone()


ab=list(data1)
cd=list(data2)
fl = ab+cd
print(f1)
perform = ['min','max']
'''
import os,sys
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'
import matplotlib as plt
import numpy as np

form = cgi.FieldStorage()
#x = np.array(data1)
#y = np.array(data2)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
#ax.plot(ab,perform,type='bar')
ax.bar(perform,fl,tick_label =perform )


mpld3.show(fig)
'''


