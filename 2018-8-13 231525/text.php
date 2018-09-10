<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13 0013
 * Time: 23:15
 */
echo "2333";
//1.建立连接
$connect = mysqli_connect('localhost', 'root', '233333', 'ecshop', '3306');
//2.定义sql语句
$sql = 'select * from ecs_admin_log';
mysqli_query($connect, 'set names utf8');
//3.发送SQL语句
$result = mysqli_query($connect, $sql);
$arr = array();//定义空数组
while ($row = mysqli_fetch_array($result)) {
    //var_dump($row);
    //array_push(要存入的数组，要存的值)
    array_push($arr, $row);
}
echo "<pre>";
var_dump($arr);
echo "</pre>";

//4.关闭连接
//mysqli_close($connect);