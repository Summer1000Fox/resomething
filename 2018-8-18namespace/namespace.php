<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/18 0018
 * Time: 10:26
 * Purpose&Description:
 */

/*namespace my \ name;

class MyClass{}
function myfunction (){}
const MYCONST = 1;

$a = new MyClass;
$c = new \ my \ name \Myclass;

$a = strlen ('hi');

$d = namespace\ MYCONST;

$d = __NAMESPACE__ . '\MYCONST';
echo constant($d);*/



/*#4 定义多个命名空间和不包含在命名空间中的代码
#除了开始的declare语句外，命名空间的括号外不得有任何PHP代码。
declare( encoding = 'UTF-8' );
namespace  MyProject  {

    const  CONNECT_OK  =  1 ;
    class  Connection  {
        public static function start(){
            echo 23333;
        }
    }
    function  connect () {    }
}

namespace {  // 全局代码
    session_start();
    $a = MyProject \ connect();
    echo MyProject \ Connection:: start();
}*/
/*namespace myproject;
function get($classname){
    $a = __NAMESPACE__ .'\\'.$classname;
    echo $a;
    return new $a;
}
get('1');*/


/*namespace myproject;
use  blah\ blah as mine;
namespace\ func();
namespace\ sub\func();
namespace\ cname::method();
$a = new namespace\sub\cname();
$b = namespace\CONSTANT;*/

/*namespace\ func();
namespace\ sub \ func();
namespace\ cname :: method();
$a = new namespace\ sub \ cname();
$b = namespace\ CONSTANT;*/

/*namespace A\B\C;
class Exception extends \ Exception {}

$a = new Exception ('hi');
$b = new \Exception('hi');*/

namespace A\B\C;
const E_ERROR = 45;
function strlen($str){
    return \ strlen($str) - 1;
}

echo E_ERROR;
echo INI_ALL;

echo strlen('hi');
if(is_array('hi')){
    echo "is array";
}else{
    echo 'is not array';
}