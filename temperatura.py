#!/usr/bin/env python
import Adafruit_DHT as dht
import time
import MySQLdb

db = MySQLdb.connect("localhost","monitor","password","temps")
curs = db.cursor()
curs.execute("SELECT * FROM temperatura")
result = curs.fetchone()

print result

h,t = dht.read_retry(dht.DHT22, 4)
h1 = '{0:0.2f}' .format(h)
t1 = '{0:0.2f}' .format(t)

print h1, t1

curs.execute("INSERT INTO temperatura(data,timp,temperatura,umiditate) VALUES(CURRENT_DATE(),TIME(NOW()) , %s, %s)" % (h1,t1) )
db.commit()
db.close()
