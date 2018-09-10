<?php 
ob_start();

//开启缓冲区 
echo "这是第一次输出内容!\n";

$ff[1] = ob_get_contents() ; //获取当前缓冲区内容

ob_flush();//缓冲器清除

echo "这是第二次输出内容!\n";

$ff[2] = ob_get_contents() ; //获取当前缓冲区内容
//ob_flush();//缓冲器清除
echo "这是第三次输出内容!\n";

$ff[3] = ob_get_contents() ; //获取当前缓冲区内容

echo "<pre>";

print_r($ff);