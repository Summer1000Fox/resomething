<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14 0014
 * Time: 19:21
 */

class class2{
    function __construct()
    {
        echo "here is class2".__CLASS__;
    }
}

include('class.php');

$s = file_get_contents('store');
$a = unserialize($s);

$a -> show_one();