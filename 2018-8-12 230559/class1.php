<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14 0014
 * Time: 19:20
 */

class class1{
    public function __construct()
    {
        echo "class1 is loading...";
    }
}

include('class.php');

$a = new ACVVVVV;
$s = serialize($a);
echo "<pre>";
var_dump($s);
echo "</pre>";
file_put_contents('store',$s);

//O:7:"ACVVVVV":1:{s:8:"one11111";i:12323232;}