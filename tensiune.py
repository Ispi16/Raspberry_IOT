#!/usr/bin/env python
import serial, time, minimalmodbus,os
import MySQLdb

db = MySQLdb.connect("localhost","monitor","password","temps")
curs = db.cursor()
curs.execute("SELECT * FROM tensiune")
result = curs.fetchone()

print result

nemo96 = minimalmodbus.Instrument('/dev/ttyUSB0',1)
nemo96.serial.baudrate = 9600
nemo96.serial.parity = serial.PARITY_NONE
nemo96.serial.timeout = 3
nemo96.debug = False

y = nemo96.read_long(0x1000,3)
y2 = "%s" % y

print "%s" % y2

curs.execute("INSERT INTO tensiune(data,timp,tensiune) VALUES(CURRENT_DATE(), TIME(NOW()), %s)" % y2)
db.commit()
db.close() 
