<?php
echo "Hello Python !".'</br></br></br>';
 
//shell_exec
$output = shell_exec('C:\Users\Administrator\AppData\Local\Programs\Python\Python37\python.exe C:\wamp64\www\test\python\1.py');
print 'shell_exec:》》 '.$output;