<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/18 0018
 * Time: 10:26
 * Purpose&Description:
 */

namespace my \ name;

class MyClass{}
function myfunction (){}
const MYCONST = 1;

$a = new MyClass;
$c = new \ my \ name \Myclass;

$a = strlen ('hi');

$d = namespace\ MYCONST;

$d = __NAMESPACE__ . '\MYSCONST';
echo constant($d);