<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/19 0019
 * Time: 14:01
 * Purpose&Description:
 */

/*function inverse($x){
    if(! $x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

try{
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e){
    echo 'Caught exception:',$e->getMessage();
}

echo "HELLOWORLD";
echo "<HR>";
try{
    echo inverse(5);
}catch(Exception $e){
    echo 'caught exception:',$e->getMessage();
}finally{
    echo "first finally.";
}

try{
    echo inverse(0);
}catch(Exception $e){
    echo 'caught exception:',$e->getMessage();
}finally{
    echo "second finally.";
}
echo "hello";

echo '5+1=' . 1+5;  //输出10
echo '5+1=' . 5+1;  //输出6
echo '5+1=' , 1+5;  //输出5+1=6
echo '5+1=' , 5+1;  //输出5+1=6*/

/*#5 Nested Exception
class myexception extends Exception{}

class test{
    public function testing(){
        try{
            try{
                throw new myexception('fool');
            }catch(myexception $e){
                throw $e;
            }
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}

$foo = new test;
$foo->testing();

function xrange($start,$limit,$step = 1){
    if($start<$limit){
        if($step<=0){
            throw new LogicException('step must by +ve');
        }
        for($i = $start; $i <= $limit; $i += $step){
            yield $i;
        }
    }else{
        if($step >= 0){
            throw new LogicException('Step nust be -ve');
        }
        for($i = $start; $i >= $limit; $i +=$step){
            yield $i;
        }
    }
}
var_dump(xrange(1,333,3));
echo 'single digit odd numbers from range():';
foreach(range(1,9,2) as $number){
    echo "$number";
    echo "\n\n";
}
echo "\n";

echo 'single digit odd numbers from xrange():';
echo "<hr>";

$a = xrange(1,10,4);
foreach($a as $number){
    echo "$number";
    echo "<hr>";
}*/

$input = <<<'EOF'
1;php;likes dollar isgns
2;python;likes whitespace
3;ruby;likes blocks
EOF;

function input_parser($input){
    foreach(explode("\n",$input) as $line){
        $fields = explode(';',$line);
        $id = array_shift($fields);

        yield $id =>$fields;
    }
}

foreach(input_parser($input) as $id=>$fields){
    echo "$id :\n";
    echo "      $fields[0]  \n";
    echo "      $fields[1]  \n";

}

/*function  count_to_ten () {
    yield 1 ;
    yield 2 ;
    yield from  [ 3 ,  4 ];
    yield from  new  ArrayIterator ([ 5 ,  6 ]);
    yield from seven_eight ();
    yield 9 ;
    yield 10 ;
}

function  seven_eight () {
    yield 7 ;
    yield from eight ();
}

function  eight () {
    yield 8 ;
}

foreach ( count_to_ten () as  $num ) {
    echo  " $num  " ;
}*/

/*function foo (& $var){}

foo($a);

$b = array();

foo($b['b']);
var_dump(array_key_exists('b',$b));

$c = new StdClass ;
foo($c -> d);
var_dump(property_exists($c,'d'));*/

function foo(&$var){
    $var ++;
}

$a = 5;
foo($a);
echo $a;