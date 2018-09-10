# -*- coding: UTF-8 -*-
while True:
 I = input("pls input the lirun:")
 if I <= 10:
  a = I * 0.01
  print a
 elif I <= 20 and I > 10:
  b =0.25 + I * 0.075
  print b
 elif I <= 40 and I > 20:
  c = 0.75 + I * 0.05
  print c
 elif I <= 60 and I > 40:
  d = 0.95 + I * 0.03
  print d
 elif I <= 60 and I > 100:
  e = 2 + I * 0.015
  print e
 else:
  f = 2.95 + I * 0.01
  print f