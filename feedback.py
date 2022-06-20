#!C:\Users\GaneshJ\AppData\Local\Programs\Python\Python39\python.exe
import cgi, cgitb 
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
# Create instance of FieldStorage 
form = cgi.FieldStorage()
# Get data from fields
n = form.getvalue('n')
e  = form.getvalue('e')
b  = form.getvalue('b')
c  = form.getvalue('c')
f  = form.getvalue('f')
html="""
<html>
<body >
<div style="background-image:url(https://www.scscoe.org/cg2.gif);border:1px solid;border-radius:5px;">
    <br>
<center><img src="https://www.scscoe.org/scscoeLogo.jpeg" style="border:1px solid;border-radius:5px;">
<h4 style="color:red;">SHRI CHHATRAPATI SHIVAJI COLLEGE OF ENGINEERING<br>FEEDBACK SYSTEM</h4></center>
Feedback From: """+n+"""<br>Email: """+e+"""<br>Class:"""+c+"""<br>Branch:"""+b+"""<br>Feedback:"""+f+"""</div></body></html>
"""
print("content-type: text/html\n")
try:
 s = smtplib.SMTP('smtp.gmail.com', 587)
 s.starttls()
 s.login('feedback.system@gmail.com','pass')
 body=MIMEMultipart('alternative')
 sub='Subject:SCSCOE FEEDBACK SYSTEM\n'
 part1=MIMEText(sub,'plain')
 part2=MIMEText(html,'html')
 body.attach(part1)
 body.attach(part2)
 s.sendmail('feedback.system@gmail.com','jagdaleganesh9545@gmail.com','Subject:SCSCOE FEEDBACK SYSTEM\n'+body.as_string())
 s.quit()
 print("<style onload=\"hide()\"></style>")
 print("Feedback Sent!")
except:
 print("<style onload=\"hide()\"></style>")
 print("SERVER ERROR!") 
     
