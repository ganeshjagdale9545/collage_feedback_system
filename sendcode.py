#!C:\Users\GaneshJ\AppData\Local\Programs\Python\Python39\python.exe
import cgi, cgitb 
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
# Create instance of FieldStorage 
form = cgi.FieldStorage()
# Get data from fields
name = form.getvalue('name')
email  = form.getvalue('email')
branch  = form.getvalue('branch')
classs  = form.getvalue('classs')
code  = form.getvalue('code')
html="""
<html>
<body >
<div style="background-image:url(https://www.scscoe.org/cg2.gif);border:1px solid;border-radius:5px;">
    <br>
<center><img src="https://www.scscoe.org/scscoeLogo.jpeg" style="border:1px solid;border-radius:5px;">
<h4 style="color:red;">SHRI CHHATRAPATI SHIVAJI COLLEGE OF ENGINEERING<br>FEEDBACK SYSTEM</h4></center>
Dear student """+name+""" of the class """+classs+""" """+branch+""" you are successfully register for SHRI CHHATRAPATI SHIVAJI COLLEGE OF ENGINEERING FEEDBACK SYSTEM
<br>Your varification code is<b> <label style="color: blue;">"""+code+"""</label></b></div></body></html>
"""
print("content-type: text/html\n")
try:
 s = smtplib.SMTP('smtp.gmail.com', 587)
 s.starttls()
 s.login('scscoe.feedback.system@gmail.com','scscoe123')
 body=MIMEMultipart('alternative')
 sub='Subject:SCSCOE FEEDBACK SYSTEM\n'
 part1=MIMEText(sub,'plain')
 part2=MIMEText(html,'html')
 body.attach(part1)
 body.attach(part2)
 remail=email
 s.sendmail('scscoe.feedback.system@gmail.com',remail,'Subject:SCSCOE FEEDBACK SYSTEM\n'+body.as_string())
 s.quit()
 print("<style onload=\"hide()\"></style>")
 print("Email Sent!")
except:
 print("<style onload=\"hide()\"></style>")
 print("SERVER ERROR!Email Not Sent Please Resend")     