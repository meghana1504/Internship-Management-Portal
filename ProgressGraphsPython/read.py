#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37\python.exe
print("Content-type:text/html\n")

#print("Content-type:image/png\n")

import pymysql as pms
conn = pms.connect("localhost","root","mysroot","finaln")
a=conn.cursor()
b=conn.cursor()

q1="select readability from file where username = (select user_name from curr_user)";
a.execute(q1)
data1=a.fetchall()

import os
import cgi
import cgitb; cgitb.enable();
os.environ['HOME'] = '/tmp/'

ab=[]
perform=[]
for i in range(0,len(data1)):
    ab.append(data1[i][0])
    perform.append(f"Task{i}")
print (ab)
print(perform)

from matplotlib.pyplot import figure
import mpld3
fig = figure()
ax = fig.gca()
#ax.bar(perform,ab,tick_label=perform,color="red")
ax.plot(perform,ab,color="red")

mpld3.show(fig)


