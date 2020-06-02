#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")

#print("Content-type:image/png\n")
import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()
c=conn.cursor()
d=conn.cursor()
e=conn.cursor()

q1="select count(Category) as java from file where category='Java Programming'";
a.execute(q1)
data1=a.fetchone()

q2="select count(Category) as python from file where category='Python Programming'";
b.execute(q2)
data2=b.fetchone()

q3="select count(Category) as cpp from file where category='C++ Programming'";
c.execute(q3)
data3=c.fetchone()

q4="select count(Category) as ad from file where category='Android Development'";
d.execute(q4)
data4=d.fetchone()

q5="select count(Category) as wd from file where category='Web Development'";
e.execute(q5)
data5=e.fetchone()

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
l5=list(data5)

lf = l1+l2+l3+l4+l5
perform = ['Java Programming','Python Programming','C++ Programming','Android Development','Web Development']

form = cgi.FieldStorage()
#x = np.array(data1)
#y = np.array(data2)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
#ax.plot(ab,perform,type='bar')
#ax.bar(perform,lf,tick_label =perform)
ax.pie(lf,labels=perform,autopct="%1.2f",startangle=90)

mpld3.show(fig)



